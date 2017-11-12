<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

/**
 * SecuredController
 *
 * @Route("/admin")
 */
class SecuredController extends Controller
{

    /**
     * @param Request $request
     * @Route("/login", name="_login")
     * @Template()
     * @return login.html.twig
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        }

        
        return $this->render(
            'AdminBundle:Secured:login.html.twig',
            array(
                'last_username' => $session->get(Security::LAST_USERNAME),
                'error'         => $error,
                'stg' => array()
            )
        );
    }

    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request

    }

    /**
     * @Route("/logout", name="_logout")
     */
    public function logoutAction()
    {
        //close session
    }

}

?>
