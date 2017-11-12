<?php

namespace TransferBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AccountType
 *
 * @ORM\Table(name="account_type")
 * @ORM\Entity()
 * @Gedmo\TranslationEntity(class="TransferBundle\Entity\AccountTypeTranslation")
 */
class AccountType {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  
  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255, nullable=false)
   * @Gedmo\Translatable
   */
  private $name;
  
  /**
   * @var string
   *
   * @ORM\Column(name="slug", type="string", length=255)
   * @Gedmo\Slug(fields={"name"})
   */
  private $slug;

  /**
   * @ORM\OneToMany(targetEntity="Account", mappedBy="accounttype",cascade={"persist"})
   */
  private $accounts;
  
  
  /**
   * @Gedmo\Locale
   */
  private $locale;
  
  
  /**
   * @ORM\OneToMany(targetEntity="AccountTypeTranslation", mappedBy="object", cascade={"persist", "remove"})
   */
  private $translations;
  
  function __construct($name = '', ArrayCollection $accounts = NULL) {
    $this->name = $name;
    $this->accounts = $accounts;
    $this->translations = new ArrayCollection();
  }
  
  /**
   * Add Account
   *
   * @param Account $account
   * @return void
   */
  public function addAccounts(Account $account) {
    $this->accounts[] = $account;
  }
  
  /**
   * Remove Account
   *
   * @param Account $account
   */
  public function removeAccounts(Account $account) {
    $this->accounts->removeElement($account);
  }
  
  /**
   * @return mixed
   */
  public function getAccounts() {
    return $this->accounts;
  }
  
  /**
   * @param mixed $accounts
   */
  public function setAccounts($accounts) {
    $this->accounts = $accounts;
  }
  
  
  /**
   * Add translations
   *
   * @param AccountTypeTranslation $translations
   * @return AccountTypeTranslation
   */
  public function addTranslation(AccountTypeTranslation $translations) {
    if (!$this->translations->contains($translations)) {
      $this->translations[] = $translations;
      $translations->setObject($this);
    }
    
    return $this;
  }
  
  /**
   * Remove translations
   *
   * @param AccountTypeTranslation $translations
   */
  public function removeTranslation(AccountTypeTranslation $translations) {
    $this->translations->removeElement($translations);
  }
  
  /**
   * Get translations
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getTranslations() {
    return $this->translations;
  }
  
  /**
   * Set translatable locale
   *
   * @param type $locale
   * @return Post
   */
  public function setTranslatableLocale($locale) {
    $this->locale = $locale;
    
    return $this;
  }
  
  /**
   * Set locale
   *
   * @param type $locale
   * @return Post
   */
  public function setLocale($locale) {
    $this->locale = $locale;
    $this->setTranslatableLocale($locale);
    
    return $this;
  }
  
  /**
   * Get locale
   *
   * @return string
   */
  public function getLocale() {
    return $this->locale;
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
  public function getName() {
    return $this->name;
  }
  
  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
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
    return $this->name;
  }
  
  public function getTitle() {
    return $this->name;
  }
  
}