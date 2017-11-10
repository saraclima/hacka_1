<?php
namespace Dojo\Controllers;



/**
 * Class DefaultController
 * @package Dojo\Controllers
 */
class DefaultController extends Controller
{
	/**
	 * @return string
	 */
	public function indexAction(){
		return $this->twig->render('user/home.html.twig');
	}

	public function result(){
		return $this->twig->render('user/result.html.twig');
	}


    public function sendEmail(){
        // Create the Transport
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('diana.montout@gmail.com')
            ->setPassword('jah06lon15')
        ;

// Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

// Create a message
        $message = (new \Swift_Message('Wonderful Subject'))
            ->setFrom(['diana.montout@gmail.com' => 'John Doe'])
            ->setTo(['diana.montout@gmail.com', 'other@domain.org' => 'A name'])
            ->setBody('Here is the message itself')
        ;

// Send the message
        $mailer->send($message);
        return $this->twig->render('user/home.html.twig');
    }

  	public function contact(){
		return $this->twig->render('user/contact.html.twig');
		
	}
}



	

