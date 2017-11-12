<?php

namespace TransferBundle\Controller;

use AdminBundle\Entity\Trace;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TransferBundle\Entity\AccountType;
use TransferBundle\Form\AccountTypeType;
use AdminBundle\Manager\AdminManager;

/**
 * AccountType controller.
 *
 * @Route("/admin/accounttype")
 */
class AccountTypeController extends AdminManager {
  
  function __construct() {
    parent::__construct(
      new AccountType(),
      new AccountTypeType(),
      "TransferBundle:AccountType"
    );
  }
  
  /**
   * Lists all AccountType entities.
   *
   * @Route("/")
   * @return template
   * @Template()
   */
  public function indexAction() {
    return parent::listObjects();
  }
  
  
  /**
   * Lists all AccountType entities.
   *
   * @Route("/list")
   * @return template
   * @Template()
   */
  public function listAction() {
    return parent::listObjects();
  }
  
  /**
   * Finds and displays a AccountType entity.
   * @param integer $id
   * @return template
   * @Route("/{id}/show")
   * @Template()
   */
  public function showAction($id) {
    return parent::showObject($id);
  }
  
  /**
   * Displays a form to create a new AccountType entity.
   * @return template
   * @Route("/new")
   * @Template()
   */
  public function newAction() {
    return parent::newObject();
  }
  
  /**
   * Creates a new AccountType entity.
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
      'Account type created successfully',
      $this->repository
    );
  }
  
  /**
   * Displays a form to edit an existing AccountType entity.
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
   * Edits an existing AccountType entity.
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
    parent::handleForm(
      Trace::UPDATING,
      $request,
      $this->form,
      $id,
      'Account type updated successfully',
      $this->repository
    );
  }
  
  /**
   * Deletes a AccountType entity.
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

