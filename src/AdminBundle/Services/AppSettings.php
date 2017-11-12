<?php


/**
 * Application settings
 *
 * @author asensio
 */

namespace AdminBundle\Services;


use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;

class AppSettings {

    protected $session;
    protected $em;

    function __construct(Session $session, EntityManager $em)
    {
        $this->session = $session;
        $this->em = $em;
    }

    public function get()
    {
        return  $this->em->getRepository('AdminBundle:Setting')->findOneBy(array("id"=>1));
    }

}
