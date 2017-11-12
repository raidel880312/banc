<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Trace;
use AdminBundle\Entity\User;
use AdminBundle\Form\UserEditType;
use AdminBundle\Form\UserPasswdType;
use AdminBundle\Form\UserType;
use AdminBundle\Manager\AdminManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("/admin/user")
 */
class UserController extends AdminManager
{

    function __construct()
    {
        parent::__construct(new User(), new UserType(), "AdminBundle:User");
    }

    /**
     * Lists all User entities.
     *
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return parent::listObjects();
    }


    /**
     * Lists all User entities.
     *
     * @Route("/list")
     * @Template()
     */
    public function listAction()
    {
        return parent::listObjects();
    }

    /**
     * Finds and displays a User entity.
     * @param integer $id
     * @return show.html.twig
     * @Route("/{id}/show")
     * @Template()
     */
    public function showAction($id)
    {
        return parent::showObject($id);
    }

    /**
     * Displays a form to create a new User entity.
     *
     * @Route("/new")
     * @Template()
     */
    public function newAction()
    {
        return parent::newObject();
    }

    /**
     * Creates a new User entity.
     *
     * @param Request $request
     * @return Array json
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        parent::handleForm(Trace::CREATING, $request, $this->form, null, 'User created successfully.', $this->repository);
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
     * @Route("/{id}/profile")
     * @Template()
     */
    public function profileAction($id)
    {
        return parent::editObject($id, new UserEditType());
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
        parent::handleForm(Trace::UPDATING, $request, new UserEditType(), $id, 'User updated successfully.', $this->repository);
    }

    /**
     * Deletes a User entity.
     * @param integer $id
     * @return Array json
     * @Route("/{id}/delete")
     * @Method("DELETE")
     * @Template()
     */
    public function deleteAction($id)
    {
        return parent::deleteObject($id);
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
    public function updatePassAction(Request $request, $id, $message = 'Object updated successfully')
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
                    $this->addTrace(Trace::UPDATING, $entity->getId());
                    $result['success'] = true;
                    $result['message'] = $message;
                    $result['id'] = $entity->getId();
                } else {
                    throw new \Exception('Error on form');
                }
            }
        } catch (\Exception $ex) {
            $result['success'] = false;
            $result['error'] = array('cause' => 'Interno', 'message' => $ex->getMessage());
        }
        echo json_encode($result);
        die;
    }


}

