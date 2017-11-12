<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Setting;
use AdminBundle\Entity\Trace;
use AdminBundle\Form\SettingType;
use AdminBundle\Manager\AdminManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Setting controller.
 *
 * @Route("/admin/setting")
 */
class SettingController extends AdminManager
{

    function __construct()
    {
        parent::__construct(new Setting(), new SettingType(), "AdminBundle:Setting");
    }

    /**
     * Lists all Setting entities.
     *
     * @Route("/")
     * @return template
     * @Template()
     */
    public function indexAction()
    {
        return parent::listObjects();
    }


    /**
     * Lists all Setting entities.
     *
     * @Route("/list")
     * @return template
     * @Template()
     */
    public function listAction()
    {
        return parent::listObjects();
    }

    /**
     * Finds and displays a Setting entity.
     * @param integer $id
     * @return template
     * @Route("/{id}/show")
     * @Template()
     */
    public function showAction($id)
    {
        return parent::showObject($id);
    }

    /**
     * Displays a form to create a new Setting entity.
     * @return template
     * @Route("/new")
     * @Template()
     */
    public function newAction()
    {
        return parent::newObject();
    }

    /**
     * Creates a new Setting entity.
     *
     * @param Request $request
     * @return Array json
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        parent::createObject($request);
    }

    /**
     * Displays a form to edit an existing Setting entity.
     * @param integer $id
     * @return template
     * @Route("/{id}/edit")
     * @Template()
     */
    public function editAction($id)
    {
        return parent::editObject($id);
    }

    /**
     * Edits an existing Setting entity.
     * @param Request $request
     * @param integer $id
     * @return Array json
     * @Route("/{id}/update")
     * @Method("POST")
     */
    public function updateAction(Request $request, $id)
    {
        $this->handleForm(Trace::UPDATING, $request, $this->form, $id, 'Objeto actualizado satisfactoriamente', $this->repository);
    }

    /**
     * Deletes a Setting entity.
     * @param integer $id
     * @return template
     * @Route("/{id}/delete")
     * @Method("DELETE")
     * @Template()
     */
    public function deleteAction($id)
    {
        return parent::deleteObject($id);
    }

    protected function handleForm($action, $request, $custom_form, $id = null, $message = "Object created successfully", $view = null)
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
                    $this->addTrace(Trace::UPDATING, $id);
                }
                $result['view'] = $this->renderView($this->repository . ':edit.html.twig', $this->editAction($id));
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
            $result['error'] = array('cause' => 'Intern', 'message' => $ex->getMessage());
        }
        echo json_encode($result);
        die;
    }

}

