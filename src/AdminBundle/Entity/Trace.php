<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="trace")
 * @ORM\Entity
 */
class Trace
{

    const CREATING = 'CREATING';
    const READING = 'READING';
    const UPDATING = 'UPDATING';
    const DELETING = 'DELETING';
    const LISTING = 'LISTING';
    const UPLOADING = 'UPLOADING';
    const FINDING = 'FINDING';


    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $date
     *
     * @ORM\Column(name="date", type="string", length=30)
     */
    private $date;

    /**
     * @var string $time
     *
     * @ORM\Column(name="time", type="string", length=10)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="text", nullable=true)
     */
    private $user_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", nullable=false)
     */
    private $browser;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", nullable=false)
     */
    private $device;

    /**
     * @var string $action
     *
     * @ORM\Column(name="url", type="string")
     */
    private $url;

    /**
     * @var string $user
     *
     * @ORM\Column(name="user", type="string")
     */
    private $user;

    /**
     * @var string $action
     *
     * @ORM\Column(name="action", type="string")
     */
    private $action;

    /**
     * Trace constructor.
     * @param string $action
     * @param string $ip
     * @param string $url
     * @param string $user
     * @param string $browscap
     */
    public function __construct($action, $ip, $url, $user, $browscap)
    {
        $this->action = $action;
        $this->ip = $ip;
        $this->url = $url;
        $this->user = $user;
        $this->time = date('H:i:s');
        $this->date = date('d-m-Y');
        $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
        if ($browscap) {
            $access = get_browser($this->user_agent, true);
            $this->browser = $access['browser'];
            $this->device = $access['device_name'];
        } else {
            $this->browser = 'unknown';
            $this->device = 'unknown';
        }
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param string $user_agent
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
    }

    /**
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @param string $browser
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param string $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }


}