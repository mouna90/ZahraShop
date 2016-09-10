<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="disponible", type="string", length=255)
     */
    private $disponible;

    /**
     * @var int
     *
     * @ORM\Column(name="cayegory_id", type="integer")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="image_id", type="integer")
     */
    private $imageId;

    /**
     * @var int
     *
     * @ORM\Column(name="tva_id", type="integer")
     */
    private $tvaId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Produits
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param string $disponible
     *
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return string
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set cayegoryId
     *
     * @param integer $cayegoryId
     *
     * @return Produits
     */
    public function setCayegoryId($cayegoryId)
    {
        $this->cayegoryId = $cayegoryId;

        return $this;
    }

    /**
     * Get cayegoryId
     *
     * @return int
     */
    public function getCayegoryId()
    {
        return $this->cayegoryId;
    }

    /**
     * Set imageId
     *
     * @param integer $imageId
     *
     * @return Produits
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * Get imageId
     *
     * @return int
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set tvaId
     *
     * @param integer $tvaId
     *
     * @return Produits
     */
    public function setTvaId($tvaId)
    {
        $this->tvaId = $tvaId;

        return $this;
    }

    /**
     * Get tvaId
     *
     * @return int
     */
    public function getTvaId()
    {
        return $this->tvaId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Produits
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
