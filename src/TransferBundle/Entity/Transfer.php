<?php

namespace TransferBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Transfer
 *
 * @ORM\Table(name="transfer")
 * @ORM\Entity(repositoryClass="TransferBundle\Repository\TransferRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Transfer {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  
  /**
   * @var float
   *
   * @ORM\Column(name="amount", type="float")
   */
  private $amount;
  
  /**
   * @var string
   *
   * @ORM\Column(name="description", type="string", length=255)
   */
  private $description;
  
  /**
   * @var string $date
   *
   * @ORM\Column(name="date", type="string", length=30, nullable=true)
   */
  private $date;
  
  /**
   * @ORM\ManyToOne(targetEntity="Account", inversedBy="transfer_origin_account", cascade={"persist"})
   */
  private $origin_account;
  
  /**
   * @ORM\ManyToOne(targetEntity="Account", cascade={"persist"})
   */
  private $destiny_account;
  
  /**
   * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\User", inversedBy="transfer",cascade={"persist"})
   */
  private $user;
  

  function __construct() {
    $this->date = date('Y-m-d');
  }
  
  /**
   * @return mixed
   */
  public function getUser() {
    return $this->user;
  }
  
  /**
   * @param mixed $user
   */
  public function setUser($user) {
    $this->user = $user;
  }
  
  /**
   * @return float
   */
  public function getAmount() {
    return $this->amount;
  }
  
  /**
   * @param float $amount
   */
  public function setAmount($amount) {
    $this->amount = $amount;
  }
  
  /**
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * @param string $description
   */
  public function setDescription($description) {
    $this->description = $description;
  }
  
  /**
   * @return mixed
   */
  public function getDate() {
    return $this->date;
  }
  
  /**
   * @param mixed $date
   */
  public function setDate($date) {
    $this->date = $date;
  }
  
  
  /**
   * @param $accounttype
   */
  public function setAccountType($accounttype) {
    $this->accounttype = $accounttype;
  }
  
  /**
   * @return mixed
   */
  public function getAccountType()
  {
    return $this->accounttype;
  }
  
  /**
   * @return int
   */
  public function getId() {
    return $this->id;
  }
  
  /**
   * @param int $id
   */
  public function setId($id) {
    $this->id = $id;
  }
  
  /**
   * @return mixed
   */
  public function getOriginAccount() {
    return $this->origin_account;
  }
  
  /**
   * @param mixed $origin_account
   */
  public function setOriginAccount($origin_account) {
    $this->origin_account = $origin_account;
  }
  
  /**
   * @return mixed
   */
  public function getDestinyAccount() {
    return $this->destiny_account;
  }
  
  /**
   * @param mixed $destiny_account
   */
  public function setDestinyAccount($destiny_account) {
    $this->destiny_account = $destiny_account;
  }
  
  /**
   * @return string
   */
  public function getTitle() {
    return $this->description;
  }
  
  
  public function __toString() {
    return $this->description;
  }
  
}