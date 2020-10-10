<?php

namespace App\Controller\SendEmail;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SendEmailController extends AbstractController {

    /**
     * @Route("/send_email", methods="POST", name="send_email")
     */
    public function sendEmail(Request $request, MailerInterface $mailer)
    {
        $name = $request->get('userName');
        $email = $request->get('email');
        $phoneNumber = $request->get('phoneNumber');

        $emailService = (new Email())
            ->to('mylifewebdev@gmail.com')
            ->subject('Новый лид')
            ->text('Имя:' . $name ."<br>" . 'Email:' . $email . "<br>" . 'Номер телефона' . $phoneNumber);
        $mailer->send($emailService);

        return 'success';
    }
}