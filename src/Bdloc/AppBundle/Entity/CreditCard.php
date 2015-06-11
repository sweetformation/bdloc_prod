<?php

namespace Bdloc\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CreditCard
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bdloc\AppBundle\Entity\CreditCardRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class CreditCard
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
     * @ORM\Column(name="paypalId", type="string", length=255)
     */
    private $paypalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validUntil", type="date")
     */
    private $validUntil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModified", type="datetime")
     */
    private $dateModified;

    /**
     *
     *@ORM\ManytoOne(targetEntity="User", inversedBy="creditCards")
     */
    private $user;

    // Propriétés non enregistrées en BDD
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez fournir un type de carte de crédit.")
     */
    private $creditCardType;
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez fournir un numéro de carte de crédit.")
     * @Assert\Regex(pattern= "#^[0-9]+$#", message="Format invalide")
     */
    private $creditCardNumber;
    /**
     * @var \DateTime
     * @Assert\NotBlank(message="Veuillez fournir une date d'expiration.")
     */
    private $expirationDate;
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez fournir le code CVC.")
     * @Assert\Regex(pattern= "#^[0-9]{3,3}$#", message="Format invalide")
     */
    private $codeCVC;
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez fournir le nom figurant sur la carte de crédit.")
     * @Assert\Regex(pattern= "#^[a-zA-Z\s-]+$#", message="Format invalide")
     */
    private $creditCardLastName;
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez fournir le prénom figurant sur la carte de crédit.")
     * @Assert\Regex(pattern= "#^[a-zA-Z\s-]+$#", message="Format invalide")
     */
    private $creditCardFirstName;


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
     * Set paypalId
     *
     * @param string $paypalId
     * @return CreditCard
     */
    public function setPaypalId($paypalId)
    {
        $this->paypalId = $paypalId;

        return $this;
    }

    /**
     * Get paypalId
     *
     * @return string 
     */
    public function getPaypalId()
    {
        return $this->paypalId;
    }

    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     * @return CreditCard
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime 
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return CreditCard
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return CreditCard
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set user
     *
     * @param \Bdloc\AppBundle\Entity\User $user
     * @return CreditCard
     */
    public function setUser(\Bdloc\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Bdloc\AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @ORM\PrePersist
     */
    public function beforeInsert() {
        $this->setDateCreated( new \DateTime() );
        $this->setDateModified( new \DateTime() );
    }

    /**
     * @ORM\PreUpdate
     */
    public function beforeEdit() {
        $this->setDateModified( new \DateTime() );
    }













    /**
     * Set creditCardType
     *
     * @param string $creditCardType
     * @return CreditCard
     */
    public function setCreditCardType($creditCardType)
    {
        $this->creditCardType = $creditCardType;

        return $this;
    }

    /**
     * Get creditCardType
     *
     * @return string 
     */
    public function getCreditCardType()
    {
        return $this->creditCardType;
    }

    /**
     * Set creditCardNumber
     *
     * @param string $creditCardNumber
     * @return CreditCard
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
    }

    /**
     * Get creditCardNumber
     *
     * @return string 
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return CreditCard
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime 
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set codeCVC
     *
     * @param string $codeCVC
     * @return CreditCard
     */
    public function setCodeCVC($codeCVC)
    {
        $this->codeCVC = $codeCVC;

        return $this;
    }

    /**
     * Get codeCVC
     *
     * @return string 
     */
    public function getCodeCVC()
    {
        return $this->codeCVC;
    }

    /**
     * Set creditCardLastName
     *
     * @param string $creditCardLastName
     * @return CreditCard
     */
    public function setCreditCardLastName($creditCardLastName)
    {
        $this->creditCardLastName = $creditCardLastName;

        return $this;
    }

    /**
     * Get creditCardLastName
     *
     * @return string 
     */
    public function getCreditCardLastName()
    {
        return $this->creditCardLastName;
    }

    /**
     * Set creditCardFirstName
     *
     * @param string $creditCardFirstName
     * @return CreditCard
     */
    public function setCreditCardFirstName($creditCardFirstName)
    {
        $this->creditCardFirstName = $creditCardFirstName;

        return $this;
    }

    /**
     * Get creditCardFirstName
     *
     * @return string 
     */
    public function getCreditCardFirstName()
    {
        return $this->creditCardFirstName;
    }

}
