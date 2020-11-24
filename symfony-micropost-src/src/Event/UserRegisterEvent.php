<?php


namespace App\Event;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * The user.register event is dispatched each time a new user is registered
 * in the system.
 */
class UserRegisterEvent extends Event
{
    const NAME = 'user.register';

    /**
     * @var User
     */
    private $registeredUser;
    /**
     * @var Request
     */
    private $request;

    public function __construct(User $registeredUser, Request $request)
    {
        $this->registeredUser = $registeredUser;
        $this->request = $request;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return User
     */
    public function getRegisteredUser(): User
    {
        return $this->registeredUser;
    }

}