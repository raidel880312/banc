<?php

namespace AdminBundle\Manager;

use AdminBundle\Entity\Contact;
use AdminBundle\Entity\Trace;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminManager extends Controller implements TrackerInterface
{

    protected $object;
    protected $form;
    protected $repository;

    function __construct($object, $form, $repository)
    {
        $this->object = $object;
        $this->form = $form;
        $this->repository = $repository;
    }
    
    public function listObjects()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository($this->repository)->findAll();
        $this->addTrace(Trace::READING);
        return array(
            'list' => $list,
        );
    }

    public function newObject()
    {
        $entity = $this->object;
        $form = $this->createForm(new $this->form, $entity);

        return array(
            'entity' => $entity,
            'edit_form' => $form->createView(),
        );
    }

    public function showObject($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository($this->repository)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity.');
        }
        $module = explode(":", $this->repository);
        return array(
            'entity' => $entity,
            'module' => strtolower($module[1]),
        );
    }

    public function editObject($id, $custom_form = null)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository($this->repository)->find($id);
        if (isset($custom_form))
            $this->form = $custom_form;
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity.');
        }
        $editForm = $this->createForm(new $this->form, $entity);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView()
        );
    }

    public function deleteObject($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository($this->repository)->find($id);
        if (!$entity) {
            throw new \Exception('Unable to find entity.');
        } else {
            $this->addTrace(Trace::DELETING);
            $em->remove($entity);
            $em->flush();
        }
        return $this->listObjects();
    }

    public function clearObject($id)
    {
        $result = array();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository($this->repository)->find($id);
        if (!$entity) {
            $result['success'] = false;
            $result['message'] = 'This element do not exists.';
        } else {
            $this->addTrace(Trace::DELETING);
            $em->remove($entity);
            $em->flush();
            $result['success'] = true;
            $result['message'] = 'Element deleted successfully.';
        }

        echo json_encode($result);
        die;
    }

    /**
     * Creates a new Publication entity.
     *
     * @param Trace| string $action
     * @param Request $request
     * @param string $custom_form
     * @param integer|null $id
     * @param string $message
     * @param string|null $view
     * @return Array json
     */
    protected function handleForm($action, $request, $custom_form, $id = null, $message = "Object created successfully", $view = null)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $creating = false;
            if ($action == Trace::CREATING) {
                $entity = $this->object;
                $creating = true;
            } else
                $entity = $em->getRepository($this->repository)->find($id);
           
            $form = $this->createForm(new $custom_form, $entity);
            $form->handleRequest($request);
            $entity = $form->getData();
            $result = array();
            if ($form->isValid()) {
                if ($creating) {
                    $em->persist($entity);
                    $em->flush();

                    $this->addTrace(Trace::CREATING);
                    $result['creating'] = true;
                } else {
                    if (!$entity) {
                        throw new \Exception('Unable to find entity.');
                    } else {
                        $em->flush();
                        $this->addTrace(Trace::UPDATING);
                    }
                }
                if ($view !== $this->repository)
                    $result['view'] = $this->renderView($view . ':index.html.twig', $this->listObjects());
                else
                    $result['view'] = $this->renderView($this->repository . ':index.html.twig', $this->listObjects());
                $result['success'] = true;
                $result['message'] = $message;
                $result['id'] = $entity->getId();
            } else {
                $sms = '';
                foreach ($this->get('formError')->generateMessage($form) as $error) {
                    $sms = $error;
                }
                throw new \Exception($sms[0]);
            }
        } catch (\Exception $ex) {
            $result['success'] = false;
            $result['error'] = array('cause' => 'Intern', 'message' => $ex->getMessage());
        }
        echo json_encode($result);
        die;
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
            $trace = new Trace($action, $server->getClientIp(), $server->getUri(), $this->getUser() != null ?  $this->getUser() : 'ANONYMOUS' , $browscap);
            $em->persist($trace);
            $em->flush();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * Finds an entity by its primary key / identifier.
     *
     * @param string|null $repository
     * @param mixed $id
     * @return object|null The entity instance or NULL if the entity can not be found.
     */
    protected function find($repository = null, $id)
    {
        $this->addTrace(Trace::FINDING);
        $repo = isset($repository) ? $repository : $this->repository;
        $object = $this->getDoctrine()->getManager()->getRepository($repo)->find($id);
        return $object;
    }

    /**
     * Finds a single entity by a set of criteria.
     *
     * @param string|null $repository
     * @param array $criteria
     * @param array|null $orderBy
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     */
    protected function findOneBy($repository = null, array $criteria, array $orderBy = null)
    {
        $this->addTrace(Trace::FINDING);
        $repo = isset($repository) ? $repository : $this->repository;
        $object = $this->getDoctrine()->getManager()->getRepository($repo)->findBy($criteria, $orderBy);
        return $object;
    }

    /**
     * Finds entities by a set of criteria.
     *
     * @param string|null $repository
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return array The objects.
     */
    protected function findBy($repository = null, array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $this->addTrace(Trace::FINDING);
        $repo = isset($repository) ? $repository : $this->repository;
        $object_list = $this->getDoctrine()->getManager()->getRepository($repo)->findBy($criteria, $orderBy, $limit, $offset);
        return $object_list;
    }

    /**
     * Finds all entities in the repository.
     *
     * @param string|null $repository
     * @return array The entities.
     */
    protected function findAll($repository = null)
    {
        $this->addTrace(Trace::FINDING);
        $repo = isset($repository) ? $repository : $this->repository;
        $object_list = $this->getDoctrine()->getManager()->getRepository($repo)->findAll();
        return $object_list;
    }



    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param mixed $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    public function sendMail($subject, $from, $to, $body)
    {
        try {
            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($from)
                ->setTo($to)
                ->setBody($body);
            $this->get('mailer')->send($message);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function sendToContacts($entity)
    {
        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('AdminBundle:Contact')->findBy(array('type' => Contact::NEWSLETTER));
        $conf = $this->get('appsettings')->get();
        $message = $this->renderView('FrontBundle:Support:email.html.twig', array('entity' => $entity));
        foreach($contacts as $c){
            $this->sendMail($conf->getTitle(),$conf->getEmail(), $c->getEmail(), $message );
        }
    }

    public function assert_valid_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}
