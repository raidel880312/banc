<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Trace;
use AdminBundle\Entity\User;
use AdminBundle\Form\UserEditProfileType;
use AdminBundle\Form\UserEditType;
use AdminBundle\Form\UserPasswdType;
use AdminBundle\Form\UserType;
use AdminBundle\Manager\AdminManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Profile controller.
 *
 * @Route("/admin/user/profile")
 */
class ProfileController extends AdminManager
{

    function __construct()
    {
        parent::__construct(new User(), new UserType(), "AdminBundle:User");
    }

    /**
     * Lists all User entities.
     * @param integer $id
     * @return index.html.twig
     * @Route("/{id}")
     * @Template()
     */
    public function indexAction($id)
    {
        return parent::showObject($id);
    }

    /**
     * Displays a form to edit an existing User entity.
     * @param integer $id
     * @return Array json
     * @Route("/{id}/edit")
     * @Template()
     */
    public function editAction($id)
    {
        return parent::editObject($id, new UserEditType());
    }

    /**
     * Displays a form to edit an existing User entity.
     * @param integer $id
     * @return Array json
     * @Route("/{id}/edit/profile")
     * @Template()
     */
    public function editProfileAction($id)
    {
        return $this->render('AdminBundle:Profile:edit.html.twig', parent::editObject($id, new UserEditProfileType()));
    }

    /**
     * Edits an existing User entity.
     * @param Request $request
     * @param integer $id
     * @return Array json
     * @Route("/{id}/update")
     * @Method("POST")
     */
    public function updateAction(Request $request, $id)
    {
        $this->handleForm(Trace::UPDATING, $request, new UserEditType(), $id, 'Profile updated successfully', 'AdminBundle:Profile');
    }

    /**
     * Edits an existing User entity.
     * @param Request $request
     * @param integer $id
     * @return Array json
     * @Route("/{id}/update/profile")
     * @Method("POST")
     */
    public function updateProfileAction(Request $request, $id)
    {
        $this->handleForm(Trace::UPDATING, $request, new UserEditProfileType(), $id, 'Profile updated successfully', 'AdminBundle:Profile');
    }



    /**
     * Set a User password.
     * @param integer $id
     * @return template
     * @Route("/{id}/set-password")
     * @Template()
     */
    public function setPassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository($this->repository)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity.');
        }
        $editForm = $this->createForm(new UserPasswdType(), $entity);
        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView()
        );
    }

    /**
     * Update a User password.
     * @param Request $request
     * @param integer $id
     * @param string $message
     * @return Array json
     * @Route("/{id}/update-password")
     * @Method("PUT")
     * @Template()
     */
    public function updatePassAction(Request $request, $id, $message = 'Password updated successfully')
    {
        $result = array();
        try {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository($this->repository)->find($id);
            if (!$entity) {
                throw new \Exception('Unable to find entity.');
            } else {
                $editForm = $this->createForm(new UserPasswdType(), $entity);
                $editForm->submit($request);
                if ($editForm->isValid()) {
                    $em->flush();
                    $this->addTrace(Trace::UPDATING);
                    $result['success'] = true;
                    $result['message'] = $message;
                    $result['id'] = $entity->getId();
                } else {
                    throw new \Exception('Error en formulario ');
                }
            }
        } catch (\Exception $ex) {
            $result['success'] = false;
            $result['error'] = array('cause' => 'Intern', 'message' => $ex->getMessage());
        }
        echo json_encode($result);
        die;
    }

    protected function handleForm($action, $request, $custom_form, $id = null, $message = "Profile created successfully", $view = null)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository($this->repository)->find($id);
            $form = $this->createForm(new $custom_form, $entity);
            $form->handleRequest($request);
            $entity = $form->getData();
            $result = array();
            if ($form->isValid()) {
                if (!$entity) {
                    throw new \Exception('Unable to find entity.');
                } else {
                    $em->flush();
                    $this->addTrace(Trace::UPDATING);
                }
                $result['view'] = $this->renderView($view . ':index.html.twig', $this->indexAction($id));
                $result['success'] = true;
                $result['message'] = $message;
                $result['id'] = $entity->getId();
            } else {
                $sms = '';
                foreach ($this->get('formError')->generateMessage($form) as $error) {
                    $sms = $error;
                }
                throw new \Exception($sms);
            }
        } catch (\Exception $ex) {
            $result['success'] = false;
            $result['error'] = array('cause' => 'Intern', 'message' => $ex);
        }
        echo json_encode($result);
        die;
    }


}

