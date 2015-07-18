<?php

namespace ShopkeeperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;


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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var integer
     */
    private $supplier_id;

    /**
     * @var \DateTime
     */
    private $postedAt;

    /**
     * @var \DateTime
     */
    private $expire_at;

    /**
     * @var string
     */
    private $manyToOne;


    /**
     * Set name
     *
     * @param string $name
     * @return Project
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
     * @return Project
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
     * Set owner_id
     *
     * @param integer $ownerId
     * @return Project
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get owner_id
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Set supplier_id
     *
     * @param integer $supplierId
     * @return Project
     */
    public function setSupplierId($supplierId)
    {
        $this->supplier_id = $supplierId;

        return $this;
    }

    /**
     * Get supplier_id
     *
     * @return integer 
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     * @return Project
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime 
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * Set expire_at
     *
     * @param \DateTime $expireAt
     * @return Project
     */
    public function setExpireAt($expireAt)
    {
        $this->expire_at = $expireAt;

        return $this;
    }

    /**
     * Get expire_at
     *
     * @return \DateTime 
     */
    public function getExpireAt()
    {
        return $this->expire_at;
    }

    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return Project
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string 
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
}
