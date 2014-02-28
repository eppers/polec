<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\RecommendBundle\Entity\Messages;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query;

class UserController extends Controller
{

    /**
     * flat multidimensional array
     *
     * @param array $array
     * @return array
     */  
    public static function flatArray(array $array){
        $return = array();
        array_walk_recursive($array, function($a,$b) use (&$return) { $return[$b] = $a; });
        
        return $return;
    }
    
    public function indexAction($name)
    {
        return $this->render('AcmeUserBundle:User:index.html.twig', array('name' => $name));
    }
    
    public function messageAction() {       
            $repo = $this->getDoctrine()
            ->getRepository('AcmeRecommendBundle:Messages');
            $query = $repo->createQueryBuilder('m')
                      ->where('m.idReceiver = :idReceiver')->setParameter('idReceiver','2')
                      ->getQuery();
            
            $messages = $query->getResult(Query::HYDRATE_ARRAY);
            foreach($messages as &$row) {
              $user = $this->getDoctrine()
              ->getRepository('AcmeRecommendBundle:Users')->find($row['idReceiver']);
              
              $row['receiverName'] = $user->getName().' '.$user->getLname();
              
            };
            
            if (!$messages) {
              throw $this->createNotFoundException(
               'Brak wiadomoœci'
              );
            };
            
        return $this->render('AcmeUserBundle:User:message.html.twig', array(
            'messages' => $messages
        ));
        
    }
    
    public function messageDetailsAction(Request $request) {
        
        
        //check if receiver of this message is the logged user
        //$id = $this->get('request')->request->get('id');
        //print json_encode($id);
       
  
        //message details
        $msgId = $request->get("id");
        $message = $this->getDoctrine()->getRepository('AcmeRecommendBundle:Messages')->find($msgId);
        
        //Sender info
        $sender = $this->getDoctrine()->getRepository('AcmeRecommendBundle:Users')->find($message->getIdSender());
        
        
//        if(($message->getReceiver()==1 || $message->getSender()==1) && $request->isXmlHttpRequest()) { #change 1 to SESSION[user][id]
            return $this->render('AcmeUserBundle:User:message_details.html.twig', array('msg' => $message, 'sender' => $sender));
  //      }
    //      $response = array("id" => $msgId);
  //you can return result as JSON
//  return new Response(json_encode($message));
        
        

    }
    
    public function messageNewAction() {
        $message = new Messages();
        $message->setTask('');
        $message->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($message)
            ->add('name', 'text')
            ->add('lname', 'text')
            ->getForm();

        return $this->render('AcmeUserBundle:User:message_new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function messageResponseAction() {
        $form = json_decode('{"receiver":"1","title":"Re: testMsg1","content":"\r\n\r\ntestMsg Content"}',true);
        //parse_str($request->get("form"),$form);
        
        $em = $this->getDoctrine()->getManager();
        
        $message = new Messages();
        $message->setIdReceiver($form['receiver']);
        $message->setTitle($form['title']);
        $message->setContent($form['content']);
        $message->setDateSend(date_create(date('Y-m-d H:i:s')));
        
        $sender = $em->getRepository('AcmeRecommendBundle:Users')->findOneById(1);
        $message->setIdSender($sender);
        
        $em->persist($message);
        $em->flush();
    
        return new Response(json_encode($form));     //dodaje coment
        //return $this->render('AcmeUserBundle:User:message_response.html.twig', array('title' => $form['title'], 'content' => $form['content']));
    }
}
