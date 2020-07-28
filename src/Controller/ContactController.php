<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        // $this->addFlash('info', 'Quelques infos utlies');

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();

            $email = (new Email())
                ->from($contactFormData['from'])
                ->to('test.programmation87@gmail.com')
                ->subject('Time for Symfony Mailer!')
                ->text($contactFormData['message']);

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a été envoyé !');

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'contact_form' => $form->createView(),
        ]);
    }
}
