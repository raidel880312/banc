<?php

namespace TransferBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity()
 */
class Account {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="CUSTOM")
   * @ORM\CustomIdGenerator(class="AdminBundle\Doctrine\RandomIdGenerator")
   *
   */
  private $id;
  
  /**
   * @var float
   *
   * @ORM\Column(name="balance", type="float")
   */
  private $balance;
  
  /**
   * @ORM\ManyToOne(targetEntity="AccountType", inversedBy="accounts",cascade={"persist"})
   */
  private $accounttype;
  
  /**
   * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\User", inversedBy="banc_accounts",cascade={"persist"})
   */
  private $user;
  
  /**
   * @ORM\OneToMany(targetEntity="Transfer", mappedBy="origin_account", cascade={"persist", "remove"})
   */
  private $transfer_origin_account;
  
  /**
   * @ORM\OneToMany(targetEntity="Transfer", mappedBy="destiny_account", cascade={"persist", "remove"})
   */
  private $transfer_destiny_account;
  
  /**
   * @var string
   *
   * @ORM\Column(name="slug", type="string", length=255)
   * @Gedmo\Slug(fields={"id"})
   */
  private $slug;
  
  
  function __construct() {
    $this->balance = 0;
    $this->transfer_origin_account = new ArrayCollection();
    $this->transfer_destiny_account = new ArrayCollection();
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
   * @return mixed
   */
  public function getTransferOriginAccount()
  {
    return $this->transfer_origin_account;
  }
  
  /**
   *
   * @param \TransferBundle\Entity\Account $account
   */
  public function addTransferOriginAccount(Account $account)
  {
    $this->transfer_origin_account[] = $account;
  }
  
  /**
   *
   * @param \TransferBundle\Entity\Account $account
   */
  public function removeTransferOriginAccount(Account $account)
  {
    $this->transfer_origin_account->removeElement($account);
  }
  
  /**
   * @param \TransferBundle\Entity\Account $account
   */
  public function addTransferDestinyAccount(Account $account)
  {
    $this->transfer_destiny_account[] = $account;
  }
  
  /**
   * @param \TransferBundle\Entity\Account $account
   */
  public function removeTransferDestinyAccount(Account $account)
  {
    $this->transfer_destiny_account->removeElement($account);
  }
  /**
   * @return mixed
   */
  public function getTransferDestinyAccount()
  {
    return $this->transfer_destiny_account;
  }
  
  /**
   * @return float
   */
  public function getBalance() {
    return $this->balance;
  }
  
  /**
   * @param float $balance
   */
  public function setBalance($balance) {
    $this->balance = $balance;
  }
  
  /**
   * @param $user
   */
  public function setUser($user) {
    $this->user = $user;
  }
  
  /**
   * @return mixed
   */
  public function getUser()
  {
    return $this->user;
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
   * @return string
   */
  public function getTitle() {
    return $this->id;
  }
  
  
  /**
   * @return string
   */
  public function getSlug() {
    return $this->slug;
  }
  
  /**
   * @param string $slug
   */
  public function setSlug($slug) {
    $this->slug = $slug;
  }
  
  public function __toString() {
    return $this->slug;
  }
  
}