<?php
/**
 * Created by PhpStorm.
 * User: asensio
 * Date: 28/09/15
 * Time: 9:34
 */

namespace AdminBundle\Manager;
use AdminBundle\Entity\Trace;


/**
 * @author Abelardo Asensio Callol <guerrillerokings@gmail.com>
 *
 */
interface TrackerInterface
{

    /**
     * Add user trace
     * You should create a Trace object with these variables and passing two param 1: The 'action' and 2: The entity id
     * @param Trace | string $action
     *
     */
    public function addTrace($action);


}