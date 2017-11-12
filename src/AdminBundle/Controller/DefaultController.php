<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Publication;
use AdminBundle\Entity\Trace;
use AdminBundle\Manager\TrackerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/admin")
 *
 */
class DefaultController extends Controller implements TrackerInterface
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $this->addTrace(Trace::READING);
        return array();
    }

    /**
     * @Route("/dashboard")
     * @Template()
     */
    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $accounts = array();
        if ($user->getId() == 1) {
          $accounts = $em->getRepository('TransferBundle:Account')->findAll();
        } else {
          $accounts = $em->getRepository("TransferBundle:Account")->findBy(
            array('user' => $user)
          );
        }
        
        return array(
            'accounts' => $accounts
        );
    }

    /**
     * @Route("/data-grid")
     * @Template()
     */
    public function gridAction()
    {
        return array();
    }

    public function addTrace($action)
    {
        try {
            $server = $this->get('request');
            $em = $this->getDoctrine()->getManager();
            $browscap = false;
            if (ini_get('browscap')) {
                $browscap = true;
            }
            $trace = new Trace($action, $server->getClientIp(), $server->getUri(), $this->getUser() != null ? $this->getUser() : 'ANONYMOUS', $browscap);
            $em->persist($trace);
            $em->flush();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
