<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Settings
 *
 * @ORM\Table(name="setting")
 * @ORM\Entity
 */
class Setting extends BaseImage
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=255, nullable=false)
	 */
	private $title;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="address", type="string", length=255, nullable=false)
	 */
	private $address;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="phone", type="string", length=255, nullable=true)
	 */
	private $phone;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="fax", type="string", length=255, nullable=true)
	 */
	private $fax;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", nullable=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="latitude", type="string", nullable=true)
	 */
	private $latitude;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="longitude", type="string", nullable=true)
	 */
	private $longitude;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="rights", type="string", length=255, nullable=true)
	 */
	private $rights;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="owner", type="string", length=255, nullable=false)
	 */
	protected $owner;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="offline", type="boolean",nullable=true)
	 */
	private $offline;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="message", type="text", nullable=true)
	 */
	private $message;

	protected function getImageUploadDir()
	{
		return 'uploads/logo/';
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param string $message
	 */
	public function setMessage($message)
	{
		$this->message = $message;
	}

	/**
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * @param string $fax
	 */
	public function setFax($fax)
	{
		$this->fax = $fax;
	}

	/**
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * @param string $latitude
	 */
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}

	/**
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * @param string $longitude
	 */
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}


	/**
	 * @return boolean
	 */
	public function isOffline()
	{
		return $this->offline;
	}

	/**
	 * @param boolean $offline
	 */
	public function setOffline($offline)
	{
		$this->offline = $offline;
	}

	/**
	 * @return string
	 */
	public function getRights()
	{
		return $this->rights;
	}

	/**
	 * @param string $rights
	 */
	public function setRights($rights)
	{
		$this->rights = $rights;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getOwner()
	{
		return 'settings_' . $this->id;
	}

	/**
	 * @param string $owner
	 * @return string
	 */
	public function setOwner($owner)
	{
		$this->owner = $owner;
		return $this;
	}


}
