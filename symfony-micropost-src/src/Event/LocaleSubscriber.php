<?php

namespace App\Event;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Security;

/**
 * @ORM\Embedded
 */
class LocaleSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private $defaultLocale;
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     *
     * @var RouterInterface
     */
    private $router;


    /**
     * LocaleSubscriber constructor.
     * @param string $defaultLocale
     * @param TokenStorageInterface $tokenStorage
     * @param EntityManagerInterface $entityManager
     * @param RouterInterface $router
     */
    public function __construct(
        string $defaultLocale,
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $entityManager,
        RouterInterface $router
    )
    {
        $this->defaultLocale = $defaultLocale;
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
        $this->router = $router;
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * ['eventName' => 'methodName']
     *  * ['eventName' => ['methodName', $priority]]
     *  * ['eventName' => [['methodName1', $priority], ['methodName2']]]
     *
     * The code must not depend on runtime state as it will only be called at compile time.
     * All logic depending on runtime state must be put into the individual methods handling the events.
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                [
                    'onKernelRequest'
                ]
            ]
        ];
    }

    /**
     * @param RequestEvent $event
     */
    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();

        $requestLocale = $request->attributes->get('_locale');

        if(empty($requestLocale)) {
            $request->attributes->set('_locale', $this->defaultLocale);
            $response = new RedirectResponse($this->router->generate('micro_post_index'));
            $event->setResponse($response);
            return;
        }

        //daca nu are inceputa o sesiune
        if(!$request->hasPreviousSession()){
            return;
        }

        //daca userul logat schimba limba salvam noua limba in baza de date
        $sessionLocale = $request->getSession()->get('_locale');
        if($requestLocale && $sessionLocale != $requestLocale) {
            $request->getSession()->set('_locale', $requestLocale);
            if($this->tokenStorage->getToken()) {
                $user = $this->tokenStorage->getToken()->getUser();
                if($user && $user instanceof User) {
                    $preferance = $user->getPreferences();
                    $preferance->setLocale($requestLocale);
                    $user->setPreferences($preferance);

                    $this->entityManager->flush();
                }
            }
        }
    }
}