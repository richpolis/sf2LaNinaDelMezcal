<?php

namespace Richpolis\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Botellas
 *
 * @ORM\Table(name="botellas")
 * @ORM\Entity(repositoryClass="Richpolis\FrontendBundle\Repository\BotellasRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Botellas
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
     * @ORM\Column(name="botella", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $botella;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     * @Assert\NotBlank()
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255,nullable=true)
     */
    private $style;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     * @Assert\File(
     *   maxSize = "2048k",
     *   maxSizeMessage = "El archivo es muy grande ({{ size }}). Solo es permitido {{ limit }}"
     * )
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="link_shop_mexico", type="string", length=255, nullable=true)
     */
    private $linkShopMexico;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link_shop_usa", type="string", length=255, nullable=true)
     */
    private $linkShopUsa;

    /**
     * @ORM\OneToMany(targetEntity="Mensajes", mappedBy="botella")
     */
    private $mensajes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mensajes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isActive = true;
    }
    
    /*
     * Nombre de la botella
     */
    public function __toString() {
        return $this->getBotella();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set botella
     *
     * @param string $botella
     * @return Botellas
     */
    public function setBotella($botella)
    {
        $this->botella = $botella;
    
        return $this;
    }

    /**
     * Get botella
     *
     * @return string 
     */
    public function getBotella()
    {
        return $this->botella;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Botellas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return Botellas
     */
    public function setClase($clase)
    {
        $this->clase = $clase;
    
        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Botellas
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Botellas
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set linkShopMexico
     *
     * @param string $linkShopMexico
     * @return Botellas
     */
    public function setLinkShopMexico($linkShopMexico)
    {
        $this->linkShopMexico = $linkShopMexico;
    
        return $this;
    }

    /**
     * Get linkShopMexico
     *
     * @return string 
     */
    public function getLinkShopMexico()
    {
        return $this->linkShopMexico;
    }

    /**
     * Set linkShopUsa
     *
     * @param string $linkShopUsa
     * @return Botellas
     */
    public function setLinkShopUsa($linkShopUsa)
    {
        $this->linkShopUsa = $linkShopUsa;
    
        return $this;
    }

    /**
     * Get linkShopUsa
     *
     * @return string 
     */
    public function getLinkShopUsa()
    {
        return $this->linkShopUsa;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Botellas
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    /**
     * Set slug
     *
     * @param string $slug
     * @return Botellas
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Botellas
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Botellas
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Add mensajes
     *
     * @param \Richpolis\FrontendBundle\Entity\Mensajes $mensajes
     * @return Botellas
     */
    public function addMensaje(\Richpolis\FrontendBundle\Entity\Mensajes $mensajes)
    {
        $this->mensajes[] = $mensajes;
    
        return $this;
    }

    /**
     * Remove mensajes
     *
     * @param \Richpolis\FrontendBundle\Entity\Mensajes $mensajes
     */
    public function removeMensaje(\Richpolis\FrontendBundle\Entity\Mensajes $mensajes)
    {
        $this->mensajes->removeElement($mensajes);
    }

    /**
     * Get mensajes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMensajes()
    {
        return $this->mensajes;
    }
    
    /*
     * Slugable
     */
    
    /**
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function setSlugAtValue()
    {
        $this->slug = \Richpolis\BackendBundle\Utils\Richsys::slugify($this->getBotella());
    }
    
    
    /*
     * Timestable
     */
    
    /**
     ** @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
          $this->createdAt = new \DateTime();
        }
        if(!$this->getUpdatedAt())
        {
          $this->updatedAt = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
    
    /*** uploads ***/
    
    public $file;
    
    /**
    ** @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function preUpload()
    {
      if (null !== $this->file) {
        // do whatever you want to generate a unique name
        $this->imagen       =   uniqid().'.'.$this->file->guessExtension();
      }
    }

    /**
    * @ORM\PostPersist
    * @ORM\PostUpdate
    */
    public function upload()
    {
      if (null === $this->file) {
        return;
      }

      // if there is an error when moving the file, an exception will
      // be automatically thrown by move(). This will properly prevent
      // the entity from being persisted to the database on error
      $this->file->move($this->getUploadRootDir(), $this->imagen);

      unset($this->file);
    }

    /**
    * @ORM\PostRemove
    */
    public function removeUpload()
    {
      if ($file = $this->getAbsolutePath()) {
        if(file_exists($file)){
            unlink($file);
        }
      }
    }
    
    protected function getUploadDir()
    {
        return '/uploads/botellas';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web'.$this->getUploadDir();
    }
    
    public function getWebPath()
    {
       return null === $this->imagen ? null : $this->getUploadDir().'/'.$this->imagen;
    }
    
    public function getAbsolutePath()
    {
        return null === $this->imagen ? null : $this->getUploadRootDir().'/'.$this->imagen;
    }
}