<?php
/**
 * Created by PhpStorm.
 * User: asensio
 * Date: 4/10/15
 * Time: 15:02
 */

namespace AdminBundle\Manager;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * Publication
 * This class is only to group all attributes and methods used for entity translations
 * @Gedmo\TranslationEntity(class="AdminBundle\Entity\YourOwnTranslationClass")
 */
class TranslationInterface
{

    /**
     * Your entity should have two attributes
     * $locale and $translations
     */

     /* @Gedmo\Locale
      * */
      private $locale;

    /**
     * @ORM\OneToMany(
     *   targetEntity="YourOwnTranslationClass",
     *   mappedBy="object",
     *   cascade={"persist", "remove"}
     * )
     */
    private $translations;

    public function __construct()
    {

        $this->translations = new ArrayCollection();

    }

    public function getTranslations() {
        return $this->translations;
    }

    /**
     * Add the class that inherits from AbstractPersonalTranslation translations
     * In your implementation, the parameter is replaced by your own Translation class that inherits from AbstractPersonalTranslation
     * @param YourOwnTranslationClass $t
     */
    public function addTranslation(YourOwnTranslationClass $t) {
        if (!$this->translations->contains($t)) {
            $this->translations[] = $t;
            $t->setObject($this);
        }
    }

    /**
     * Remove the class that inherits from AbstractPersonalTranslation translations
     * In your implementation, the parameter is replaced by your own Translation class that inherits from AbstractPersonalTranslation
     * @param YourOwnTranslationClass $t
     */
    public function removeTranslation(YourOwnTranslationClass $t) {
        $this->translations->removeElement($t);
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


}