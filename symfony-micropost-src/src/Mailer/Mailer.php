<?php


namespace App\Mailer;

use App\Entity\User;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Mailer
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * @var string
     */
    private $mailFrom;

    public function __construct(\Swift_Mailer $mailer, Environment $twig, string $mailFrom)
    {

        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->mailFrom = $mailFrom;
    }

    public function sendConfirmationEmail(User $user)
    {
        try {
            $body = $this->twig->render(
                'email/registration.html.twig',
                [
                    'user' => $user
                ]
            );
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }
        $message = (new \Swift_Message())
            ->setFrom($this->mailFrom)
            ->setTo($user->getEmail())
            ->setSubject('Welcome to the micro-post app')
            ->setBody($body, 'text/html');
        $this->mailer->send($message);
    }
}