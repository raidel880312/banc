<?php

namespace TransferBundle\Controller;

use AdminBundle\Entity\Trace;
use AdminBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use TransferBundle\Entity\Transfer;
use TransferBundle\Form\TransferType;
use AdminBundle\Manager\AdminManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * AccountType controller.
 *
 * @Route("/admin/transfer")
 */
class TransferController extends AdminManager {
  
  function __construct() {
    
    parent::__construct(
      new Transfer(),
      new TransferType(),
      "TransferBundle:Transfer"
    );
  }
  
  
  /**
   * Lists all Transfer entities.
   *
   * @Route("/index")
   * @return template
   * @Template()
   */
  public function indexAction() {
    
    $user = $this->getUser();
  
    if ($user->getId() != 1) {
      return $this->listUserTransfer($user);
    }
    else {
      return parent::listObjects();
    }
  }
  
  
  /**
   * Lists all Transfer entities.
   *
   * @Route("/list")
   * @return template
   * @Template()
   */
  public function listAction() {
  
    $user = $this->getUser();
  
    if ($user->getId() != 1) {
      return $this->listUserTransfer($user);
    }
    else {
      return parent::listObjects();
    }
  }
  
  public function listUserTransfer(User $user) {
    $em = $this->getDoctrine()->getManager();
    $list = $em->getRepository("TransferBundle:Transfer")->findBy(
      array('user' => $user)
    );
  
    $this->addTrace(Trace::READING);
    return array(
      'list' => $list,
    );
  }
  
  /**
   * Finds and displays a Transfer entity.
   * @param integer $id
   * @return template
   * @Route("/{id}/show")
   * @Template()
   */
  public function showAction($id) {
    return parent::showObject($id);
  }
  
  /**
   * Displays a form to create a new Transfer entity.
   * @return template
   * @Route("/new")
   * @Template()
   */
  public function newAction() {
    
    $user = $this->getUser();
    $entity = new Transfer();
    $entity->setUser($user);
    
    $form_type = new TransferType($user);
    $form = $this->createForm($form_type, $entity);
  
    return array(
      'entity' => $entity,
      'edit_form' => $form->createView(),
    );
    
  }
  
  /**
   * Creates a new Transfer entity.
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
    try {
      
      $origin_account_id = $request->get(
        'transfer_bundle_transfer'
      )['origin_account'];
      $destiny_account_id = $request->get(
        'transfer_bundle_transfer'
      )['destiny_account'];
      $description = $request->get(
        'transfer_bundle_transfer'
      )['description'];
        
      
      
      if ($origin_account_id == $destiny_account_id) {
        $result['success'] = FALSE;
        $result['error'] = array(
          'cause' => 'Intern',
          'message' => "Your need to select another destiny account, origin and destiny account can't be the same."
        );
        echo json_encode($result);
        die;
      }
      else {
        
        $transfer_amount = $request->get('transfer_bundle_transfer')['amount'];
  
        if (!$description || !$transfer_amount) {
          $result['success'] = FALSE;
          $result['error'] = array(
            'cause' => 'Intern',
            'message' => "Please, fill all fields."
          );
          echo json_encode($result);
          die;
        }
         
        if (!is_numeric($transfer_amount)) {
          $result['success'] = FALSE;
          $result['error'] = array(
            'cause' => 'Intern',
            'message' => "Please enter a correct value in amount field."
          );
          echo json_encode($result);
          die;
        }
  
        if (!is_numeric($transfer_amount)) {
          $result['success'] = FALSE;
          $result['error'] = array(
            'cause' => 'Intern',
            'message' => "Please enter a correct value in amount field."
          );
          echo json_encode($result);
          die;
        }
        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TransferBundle:Account')->find(
          $origin_account_id
        );
        $account_amount = $entity->getBalance();
        
        
        if ($account_amount > $transfer_amount) {
          
          
          $user = $this->getUser();
          
          $em = $this->getDoctrine()->getManager();
          
          $transfer = new Transfer();
          $transfer->setUser($user);
          
          $form = $this->createForm(new TransferType($user), $transfer);
          $form->handleRequest($request);
          $transfer = $form->getData();
          $result = array();
          if ($form->isValid()) {
            
            //updating accounts balance values and persisting in data base accounts and transfer
            $destiny_account = $em->getRepository('TransferBundle:Account')->find($destiny_account_id);
            $actual_balance = $destiny_account->getBalance();
            $balance = $actual_balance + $transfer_amount;
            $destiny_account->setBalance($balance);
            
            $origin_balance = $account_amount - $transfer_amount;
            $entity->setBalance($origin_balance);
            
            $em->persist($entity);
            $em->persist($destiny_account);
            $em->persist($transfer);
            $em->flush();
            
            $this->addTrace(Trace::CREATING);
            $result['creating'] = TRUE;
            
            
            $result['view'] = $this->renderView(
              $this->repository . ':index.html.twig',
              $this->listUserTransfer($user)
            );
            $result['success'] = TRUE;
            $result['message'] = 'Transfer made successfully';
            $result['id'] = $transfer->getId();
          }
          else {
            $sms = '';
            foreach ($this->get('formError')->generateMessage(
              $form
            ) as $error) {
              $sms = $error;
            }
            throw new \Exception($sms[0]);
          }
        }
        else {
          $result['success'] = FALSE;
          $result['error'] = array(
            'cause' => 'Intern',
            'message' => "Your account does not have enough money for this transfer."
          );
          
        }
        echo json_encode($result);
        die;
      }
      
    } catch (\Exception $ex) {
      $result['success'] = FALSE;
      $result['error'] = array(
        'cause' => 'Intern',
        'message' => $ex->getMessage()
      );
      echo json_encode($result);
      die;
    }
    
  }
  
  /**
   * Displays a form to edit an existing Transfer entity.
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
   * Edits an existing Transfer entity.
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
      'Transfer updated successfully',
      $this->repository
    );
  }
  
  /**
   * Deletes a Transfer entity.
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

