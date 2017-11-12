<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BaseImage
 * 
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
class BaseImage
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $path;
    protected $temp;
    
    /**
     * @Assert\Image(maxSize ="5M", mimeTypes = {"image/jpg","image/png","image/gif","image/jpeg","application/zip","application/pdf" })
     */
    protected $image;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    protected $owner;


    /**
     * Returns the directory where the file will be located
     * (You must override this method to change the default directory)
     * 
     * @return string
     */   
    protected function getImageUploadDir() {
        return 'uploads/' ;
    }
    
    /**
     * Returns a unique generated name for the uploaded file
     * (You must override this method to change this behavior)
     * 
     * @return string
     */       
    protected function createImageFileName() 
    {
        return uniqid() . '.' . $this->getImage()->guessExtension();
    }
    
    /**
     * Set path
     * @param string $path
     * @return string
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
     * Set image.
     *
     * @param UploadedFile $image
     * @return UploadedFile
     */
    public function setImage(UploadedFile $image = null) {
        $this->image = $image;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        }

       if (NULL !== $this->image) {
            $this->path = $this->createImageFileName();
       }

        return $this;
    }

    /**
     * Get image
     *
     * @return UploadedFile 
     */
    public function getImage() {
        return $this->image;
    }

    public function getUploadRootDir() {
        return __DIR__ . '/../../../web/' . $this->getImageUploadDir();
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . $this->path;
    }
    
    /**
     * Get the image web path
     * 
     * @return string
     */
    public function getImageWebPath() {
        return null === $this->path ? null : $this->getImageUploadDir() . $this->path;
    }
    
    /**
     * @deprecated use getImageWebPath
     */
    public function getWebPath() {
        return $this->getImageWebPath();
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function uploadImage() {
        if (null === $this->getImage()) {
            return;
        }
        if (isset($this->temp)) {
            try {
                unlink($this->getUploadRootDir() . $this->temp);
            } catch (\Exception $e) {
                // nothing to do
            }
            $this->temp = null;
        }
        $this->getImage()->move($this->getUploadRootDir(), $this->path);
        $this->image = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUploadImage() {
        $path = $this->getAbsolutePath();
        try {
            if (file_exists($path) && !is_dir($path)) {
                unlink($path);
            }
        } catch (\Exception $e) {
            // nothing to do
        }
    }



}