<?php
/**
 * Created by PhpStorm.
 * User: asensio
 * Date: 28/09/15
 * Time: 9:34
 */

namespace AdminBundle\Manager;

use AdminBundle\Entity\Trace;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @author Abelardo Asensio Callol <guerrillerokings@gmail.com>
 *
 */
class PaginateInterface
{

    /**
     * Number of elements per page
     */
    private $per_page;

    /**
     * PaginateInterface constructor.
     */
    public function __construct()
    {
        $this->per_page = 10;
    }

    /**
     * Sent to the view these params
     */
    public function indexAction()
    {
        /*The list of elements*/
        $list = new ArrayCollection();
        $total = count($list);
        $pages = $total / $this->per_page;
        if ($total % $this->per_page != 0) {
            $pages += 1;
            $pages = intval($pages);
        }
        return array(
            'total' => $total,
            'per_page' => $this->per_page,
            'pages' => $pages,
            'list' => $list
        );
    }

    /**
     * @param Request $request
     * @return Array
     * @Route("/paginate")
     * @Method("POST")
     * @Template()
     */
    public function paginateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $offset = $request->get('offset');
        /*This is for the case you send and extra parameters like filters*/
        $extra = $request->get('extra');
        $filter = $extra['filter'];
        if ($filter != '-1')
            $list = $em->getRepository('')->findBy(array('filter' => $filter), null, $this->per_page, $offset);
        else
            $list = $em->getRepository('')->findBy(array(), null, $this->per_page, $offset);
        $all = $em->getRepository('')->findAll();
        $total = count($all);
        $pages = $total / $this->per_page;
        if ($total % $this->per_page != 0) {
            $pages += 1;
            $pages = intval($pages);
        }
        return $this->render('Bundle:Folder:elements_list.html.twig', array(
            'total' => $total,
            'per_page' => $this->per_page,
            'pages' => $pages,
            'list' => $list
        ));

    }

}