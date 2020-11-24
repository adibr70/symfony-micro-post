<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Entity\User;
use App\Repository\MicroPostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Twig\Environment;

use Doctrine\ORM\Mapping as ORM;
use App\Form\MicroPostType;


/**
 * @Route("/")
 */
class MicroPostController
{
    /**
     * @var Environment
     */
    private $twig;
    /**
     * @var MicroPostRepository
     */
    private $microPostRepository;

    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

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
     * @var FlashBagInterface
     */
    private $flashBag;

    /**
     * @var $authorizationChecker
     */
    private $authorizationChecker;

    /**
     * MicroPostController constructor.
     * @param Environment $twig
     * @param MicroPostRepository $microPostRepository
     * @param FormFactoryInterface $formFactory
     * @param EntityManagerInterface $entityManager
     * @param RouterInterface $router
     * @param FlashBagInterface $flashBag
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(
                            Environment $twig, MicroPostRepository $microPostRepository,
                            FormFactoryInterface $formFactory, EntityManagerInterface $entityManager,
                            RouterInterface $router, FlashBagInterface $flashBag,
                            AuthorizationCheckerInterface $authorizationChecker
                        )
    {
        $this->twig = $twig;
        $this->microPostRepository = $microPostRepository;
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->flashBag = $flashBag;
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     *
     * @Route("/", name="micro_post_index")
     * @param TokenStorageInterface $tokenStorage
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index(TokenStorageInterface $tokenStorage, UserRepository $userRepository)
    {
        $currentUser = $tokenStorage->getToken()->getUser();

        $usersToFollow = [];

        if($currentUser instanceof User) {
            $posts = $this->microPostRepository->findAllByUsers($currentUser->getFollowing());

            $usersToFollow = count($posts) === 0 ? $userRepository->findAllExceptUserWithMorePostsThan(
                                                                        3,
                                                                        $currentUser
                                                                    ) : [];
        }

        $posts = $this->microPostRepository->findBy(
            [],
            ['time'=>'DESC']
        );

        $html = $this->twig->render(
            'micro-post/index.html.twig',
            [
                'posts' => $posts,
                'usersToFollow' => $usersToFollow
            ]
        );

        return new Response($html);
    }

    /**
     *
     * @Route ("/add", name="micro_post_add")
     * @Security("is_granted('ROLE_USER')")
     */
    public function add(Request $request, TokenStorageInterface $tokenStorage)
    {
        $user = $tokenStorage->getToken()->getUser();

        $microPost = new MicroPost();
        $microPost->setUser($user);

        $form = $this->formFactory->create(MicroPostType::class, $microPost);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($microPost);
            $this->entityManager->flush();

            return new RedirectResponse($this->router->generate('micro_post_index'));
        }

        return new Response(
            $this->twig->render('micro-post/add.html.twig', ['form'=>$form->createView()])
        );
    }

    /**
     * @Route ("/edit/{id}", name="micro_post_edit")
     * @Security("is_granted('edit', microPost)", message="Access denied")
     */
    function edit(MicroPost $microPost, Request $request)
    {
        //if extends AbstractController
        //$this->denyUnlessGranted('edit', $microPost)

        //if injected AuthorizationCheckerInterface
        //if($this->authorizationChecker->is_granted('edit', $microPost))
        //{
            //throw new UnauthorizedHttpException();
        //}

        $form = $this->formFactory->create(MicroPostType::class, $microPost);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //$this->entityManager->persist($microPost);
            $this->entityManager->flush();

            return new RedirectResponse($this->router->generate('micro_post_index'));
        }

        return new Response(
            $this->twig->render('micro-post/add.html.twig', ['form'=>$form->createView()])
        );
    }

    /**
     * @Route ("/delete/{id}", name="micro_post_delete")
     * @Security("is_granted('delete', microPost)", message="Access denied")
     */
    function delete(MicroPost $microPost)
    {
        $this->entityManager->remove($microPost);
        $this->entityManager->flush();

        $this->flashBag->add('notice', 'Micro post was deleted.');

        return new RedirectResponse(
            $this->router->generate('micro_post_index')
        );
    }

    /**
     * @Route("/user/{username}", name="micro_post_user")
     */
    public function userPosts(User $userWithPosts)
    {
        $html = $this->twig->render(
            'micro-post/user-posts.html.twig',
            [
//                'posts' => $this->microPostRepository->findBy(
//                    ['user' => $userWithPosts],
//                    ['time' =>'DESC']
//                )
                'posts' => $userWithPosts->getPosts(),
                'user'  => $userWithPosts
            ]);

        return new Response($html);
    }

    /**
     * @Route("/post/{id}", name="micro_post_post")
     */
    public function post(MicroPost $post) {

        return new Response(
            $this->twig->render(
                'micro-post/post.html.twig', ['post'=> $post]
            )
        );
    }

}