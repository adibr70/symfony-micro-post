<?php

namespace App\Tests\Mailer;

use App\Entity\User;
use App\Mailer\Mailer;
use Monolog\Test\TestCase;
use Twig\Environment;

class MailerTest extends TestCase
{
    public function testConfirmationEmail()
    {
        $user = new User();
        $user->setEmail('adibr70@gmail.com');

        $swiftMailer = $this->getMockBuilder(\Swift_Mailer::class)
            ->disableOriginalConstructor()
            ->getMock();
        $swiftMailer->expects($this->once())->method('send')
            ->with($this->callback(function ($subject){
                $messageStr = (string)$subject;
                return strpos($messageStr, "From: me@symfony.com") != false
                    && strpos($messageStr, "Content-Type: text/html; charset=utf-8") != false
                    && strpos($messageStr, "Subject: Welcome to the micro-post app") != false
                    && strpos($messageStr, "To: adibr70@gmail.com") != false
                    && strpos($messageStr, "This is a message body") != false;
            }));

        $twigMock = $this->getMockBuilder(Environment::class)
            ->disableOriginalConstructor()
            ->getMock();
        $twigMock->expects($this->once())
            ->method('render')
            ->with(
                'email/registration.html.twig',
                [
                    'user' => $user
                ]
            )->willReturn("This is a message body");

        $mailer = new Mailer($swiftMailer, $twigMock, 'me@symfony.com');
        $mailer->sendConfirmationEmail($user);
    }
}