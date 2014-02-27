<?php 

namespace Acme\UserBundle\Repository;
 
use Acme\RecommendBundle\Entity\Message;
/**
 * @return \Acme\HelloBundle\Repository\MessagesRepository
 */
function getMessagesRepository()
{
    return $this->getDoctrine()->getRepository('AcmeRecommendBundle:Messages');
}
?>