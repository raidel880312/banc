<?php

namespace AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use TransferBundle\Entity\Account;
use TransferBundle\Entity\Transfer;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {
  
  /**
   * @var integer $id
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  
  /**
   * @var string $username
   *
   * @ORM\Column(name="username", type="string", length=30, nullable=true)
   */
  protected $username;
  
  /**
   * @var string $name
   *
   * @ORM\Column(name="name", type="string", length=100)
   */
  protected $name;
  
  /**
   * @var string $email
   *
   * @ORM\Column(name="email", type="string", unique=true)
   * @Assert\Email()
   */
  protected $email;
  
  /**
   * @var string $password
   *
   * @ORM\Column(name="password", type="string")
   */
  protected $password;
  
  /**
   * @var string $salt
   *
   * @ORM\Column(name="salt", type="string")
   */
  protected $salt;
  
  /**
   * @var string $path
   * @ORM\Column(name="path", type="string", nullable=true)
   */
  private $path;
  private $temp;
  
  /**
   * @Assert\Image(maxSize ="1M", mimeTypes = {"image/jpg","image/png","image/gif","image/jpeg"})
   */
  protected $file;
  
  /**
   * @var boolean $enabled
   *
   * @ORM\Column(name="enabled", type="boolean", nullable=true)
   */
  protected $enabled;
  
  /**
   * @ORM\OneToMany(targetEntity="TransferBundle\Entity\Account", mappedBy="user", cascade={"persist", "remove"})
   */
  private $banc_accounts;
  
  /**
   * @ORM\OneToMany(targetEntity="TransferBundle\Entity\Transfer", mappedBy="user", cascade={"persist", "remove"})
   */
  private $transfer;
  
  /**
   * @var string $birthday
   *
   * @ORM\Column(name="birthday", type="string", length=30, nullable=true)
   */
  protected $birthday;
  
  /**
   * @var Gender
   *
   * @ORM\ManyToOne(targetEntity="Gender")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="gender", referencedColumnName="id")
   * })
   */
  protected $gender;
  
  /**
   * @var string
   *
   * @ORM\Column(name="phones", type="string", nullable=true)
   */
  protected $phones;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="sms", type="boolean", nullable=true)
   */
  protected $sms;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="mail", type="boolean", nullable=true)
   */
  protected $mail;

  /**
   * @ORM\ManyToMany(targetEntity="Role", inversedBy="users")
   *
   */
  private $roles;
  
  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
  
  public function getRoles() {
    return $this->roles->toArray();
  }
  
  
  public function __construct() {
    $this->roles = new ArrayCollection();
    $this->banc_accounts = new ArrayCollection();
    $this->transfer = new ArrayCollection();
    $this->salt = base_convert(sha1(uniqid(mt_rand(), TRUE)), 16, 36);
    $this->enabled = TRUE;
  }
  
  /**
   *
   * @return \Doctrine\Common\Collections\ArrayCollection
   */
  public function getBancAccounts()
  {
    return $this->banc_accounts;
  }
  
  /**
   *
   * @param \TransferBundle\Entity\Account $account
   */
  public function addBancAccount(Account $account)
  {
    $this->banc_accounts[] = $account;
   }
  
  /**
   *
   * @param \TransferBundle\Entity\Account $account
   */
  public function removeAccount(Account $account)
  {
    $this->banc_accounts->removeElement($account);
  }
  
  /**
   *
   * @return \Doctrine\Common\Collections\ArrayCollection
   */
  public function getTransfer()
  {
    return $this->transfer;
  }
  
  /**
   *
   * @param \TransferBundle\Entity\Transfer $transfer
   */
  public function addTransfer(Transfer $transfer)
  {
    $this->transfer[] = $transfer;
  }
  
  /**
   *
   * @param \TransferBundle\Entity\Transfer $transfer
   */
  public function removeTransfer(Transfer $transfer)
  {
    $this->transfer->removeElement($transfer);
  }
  
  /**
   * @return string
   */
  public function __toString() {
    return $this->name;
  }
  
  /**
   * @return void
   */
  public function eraseCredentials() {
    // nothing
  }
  
  /**
   * @return string
   */
  public function getPassword() {
    return $this->password;
  }
  
  /**
   * @return string
   */
  public function getSalt() {
    return $this->salt;
  }
  
  /**
   *
   * @return string
   */
  public function getUsername() {
    return $this->username;
  }
  
  /**
   * @return bool
   */
  public function isAccountNonExpired() {
    return $this->enabled;
  }
  
  /**
   * @return bool
   */
  public function isAccountNonLocked() {
    return $this->enabled;
  }
  
  /**
   * @return bool
   */
  public function isCredentialsNonExpired() {
    return $this->enabled;
  }
  
  /**
   * @return bool
   */
  public function isEnabled() {
    return $this->enabled;
  }
  
  /**
   * Set username
   *
   * @param string $username
   */
  public function setUsername($username) {
    $this->username = $username;
  }
  
  /**
   * Set name
   *
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
  }
  
  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set email
   *
   * @param string $email
   */
  public function setEmail($email) {
    $this->email = $email;
  }
  
  /**
   * Get email
   *
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }
  
  /**
   * Set password
   *
   * @param string $password
   */
  public function setPassword($password) {
    $encoder = new MessageDigestPasswordEncoder('sha512', TRUE, 10);
    $password = $encoder->encodePassword($password, $this->salt);
    $this->password = $password;
  }
  
  /**
   * Set salt
   *
   * @param string $salt
   */
  public function setSalt($salt) {
    //$this->salt = $salt;
  }
  
  /**
   * Set enabled
   *
   * @param boolean $enabled
   */
  public function setEnabled($enabled) {
    $this->enabled = $enabled;
  }
  
  /**
   * Get enabled
   *
   * @return boolean
   */
  public function getEnabled() {
    return $this->enabled;
  }
  
  /**
   * Set path
   *
   * @param string $path
   * @return User
   */
  public function setPath($path) {
    $this->path = $path;
    
    return $this;
  }
  
  /**
   * Get path
   *
   * @return string
   */
  public function getPath() {
    return $this->path;
  }
  
  /**
   * @return string
   */
  public function getBirthday() {
    return $this->birthday;
  }
  
  /**
   * @param string $birthday
   */
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
  }
  
  /**
   * @return Gender
   */
  public function getGender() {
    return $this->gender;
  }
  
  /**
   * @param Gender $gender
   */
  public function setGender($gender) {
    $this->gender = $gender;
  }
  
  /**
   * @return string
   */
  public function getPhones() {
    return $this->phones;
  }
  
  /**
   * @param string $phones
   */
  public function setPhones($phones) {
    $this->phones = $phones;
  }
  
  /**
   * @return boolean
   */
  public function isSms() {
    return $this->sms;
  }
  
  /**
   * @param boolean $sms
   */
  public function setSms($sms) {
    $this->sms = $sms;
  }
  
  /**
   * @return boolean
   */
  public function isMail() {
    return $this->mail;
  }
  
  /**
   * @param boolean $mail
   */
  public function setMail($mail) {
    $this->mail = $mail;
  }
  
  /**
   * Set image.
   *
   * @param UploadedFile $image
   * @return User
   */
  public function setFile(UploadedFile $image = NULL) {
    $this->file = $image;
    // check if we have an old image path
    if (isset($this->path)) {
      // store the old name to delete after the update
      $this->temp = $this->path;
      $this->path = NULL;
    }
    else {
      $this->path = 'initial';
    }
    
    return $this;
  }
  
  /**
   * Get image
   *
   * @return UploadedFile
   */
  public function getFile() {
    return $this->file;
  }
  
  protected function getUploadDir() {
    return 'uploads/admin/user/';
  }
  
  protected function getUploadRootDir() {
    return __DIR__ . '/../../../web/' . $this->getUploadDir();
  }
  
  public function getAbsolutePath() {
    return NULL === $this->path ? NULL : $this->getUploadRootDir(
      ) . '/' . $this->path;
  }
  
  public function getWebPath() {
    return NULL === $this->path ? NULL : $this->getUploadDir(
      ) . '/' . $this->path;
  }
  
  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload() {
    if (NULL !== $this->file) {
      $this->path = uniqid() . '.' . $this->getFile()->guessExtension();
    }
  }
  
  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload() {
    if (NULL === $this->getFile()) {
      return;
    }
    if (isset($this->temp)) {
      try {
        unlink($this->getUploadRootDir() . '/' . $this->temp);
      } catch (\Exception $e) {
        // nothing to do
      }
      $this->temp = NULL;
    }
    $this->getFile()->move($this->getUploadRootDir(), $this->path);
    $this->image = NULL;
  }
  
  /**
   * @ORM\PostRemove()
   */
  public function removeUpload() {
    $path = $this->getAbsolutePath();
    try {
      if (file_exists($path) && !is_dir($path)) {
        unlink($path);
      }
    } catch (\Exception $e) {
      // nothing to do
    }
  }
  
  public function serialize() {
    
    return serialize(
      array(
        $this->id,
        $this->email,
        $this->password,
        // see section on salt below
        // $this->salt,
      )
    );
  }
  
  public function unserialize($serialized) {
    list (
      $this->id,
      $this->email,
      $this->password,
      // see section on salt below
      // $this->salt
      ) = unserialize($serialized);
  }
  

  
  public function getTitle() {
    return $this->getName();
  }
  
  public function setRoles($roles) {
    $this->roles = $roles;
  }
  
  /**
   * @return mixed
   */
  public function getTemp() {
    return $this->temp;
  }
  
  /**
   * @param mixed $temp
   */
  public function setTemp($temp) {
    $this->temp = $temp;
  }
  
}