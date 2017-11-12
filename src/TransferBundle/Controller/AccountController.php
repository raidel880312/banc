<?php

namespace TransferBundle\Controller;

use AdminBundle\Entity\Trace;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TransferBundle\Entity\Account;
use TransferBundle\Form\AccountType;
use AdminBundle\Manager\AdminManager;

/**
* Account controller.
*
* @Route("/admin/account")
*/
class AccountController extends AdminManager {

    function __construct() {
        parent::__construct(new Account(), new AccountType(), "TransferBundle:Account");
    }

    /**
    * Lists all Account entities.
    *
    * @Route("/")
    * @return template
    * @Template()
    */
    public function indexAction() {
      return parent::listObjects();
    }


    /**
    * Lists all Account entities.
    *
    * @Route("/list")
    * @return template
    * @Template()
    */
    public function listAction() {
      return parent::listObjects();
    }

    /**
    * Finds and displays a Account entity.
    * @param integer $id
    * @return template
    * @Route("/{id}/show")
    * @Template()
    */
    public function showAction($id) {
      return parent::showObject($id);
    }

    /**
    * Displays a form to create a new Account entity.
    * @return template
    * @Route("/new")
    * @Template()
    */
    public function newAction() {
        return parent::newObject();
    }

    /**
    * Creates a new Account entity.
    *
    * @param Request $request
    * @return Array json
    * @Route("/create")
    * @Method("POST")
    */
    public function createAction(Request $request) {
        /**
        * In case you need to change the FormType, change [$this->form] for yours
        */
      parent::handleForm(
        Trace::CREATING,
        $request,
        $this->form,
        NULL,
        'Account created successfully',
        $this->repository
      );
    }

    /**
    * Displays a form to edit an existing Account entity.
    * @param integer $id
    * @return template
    * @Route("/{id}/edit")
    * @Template()
    */
    public function editAction($id) {
        /**
        * In case you need to change the FormType, pass as the second parameter
        */
        return parent::editObject($id);
    }

    /**
    * Edits an existing Account entity.
    * @param Request $request
    * @param integer $id
    * @return Array json
    * @Route("/{id}/update")
    * @Method("POST")
    */
    public function updateAction(Request $request, $id) {
        /**
        * In case you need to change the FormType, pass as the second parameter
        */
        $this->handle(Trace::UPDATING, $request, $this->form, $id, 'Account updated successfully.', $this->repository);
    }

    /**
    * Deletes a Account entity.
    * @param integer $id
    * @return template
    * @Route("/{id}/delete")
    * @Method("DELETE")
    * @Template()
    */
    public function deleteAction($id) {
       return parent::deleteObject($id);
    }
    
}

