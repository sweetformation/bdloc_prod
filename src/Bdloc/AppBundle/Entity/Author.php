<?php
namespace Bdloc\AppBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Author
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aka;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deathDate;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", length=11, nullable=true)
     */
    private $idbel;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateModified;

    /**
     * @ORM\OneToMany(targetEntity="Bdloc\AppBundle\Entity\Book", mappedBy="illustrator")
     */
    private $books_illustrated;

    /**
     * @ORM\OneToMany(targetEntity="Bdloc\AppBundle\Entity\Book", mappedBy="scenarist")
     */
    private $books_scenarized;

    /**
     * @ORM\OneToMany(targetEntity="Bdloc\AppBundle\Entity\Book", mappedBy="colorist")
     */
    private $books_colored;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->books_illustrated = new \Doctrine\Common\Collections\ArrayCollection();
        $this->books_scenarized = new \Doctrine\Common\Collections\ArrayCollection();
        $this->books_colored = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Author
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set firstName
     *
     * @param string $firstName
     * @return Author
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Author
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set aka
     *
     * @param string $aka
     * @return Author
     */
    public function setAka($aka)
    {
        $this->aka = $aka;

        return $this;
    }

    /**
     * Get aka
     *
     * @return string 
     */
    public function getAka()
    {
        return $this->aka;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Author
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set deathDate
     *
     * @param \DateTime $deathDate
     * @return Author
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get deathDate
     *
     * @return \DateTime 
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Author
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Author
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set idbel
     *
     * @param integer $idbel
     * @return Author
     */
    public function setIdbel($idbel)
    {
        $this->idbel = $idbel;

        return $this;
    }

    /**
     * Get idbel
     *
     * @return integer 
     */
    public function getIdbel()
    {
        return $this->idbel;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Author
     */
    public function setDateCreated(\DateTime $dateCreated)
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
     * @return Author
     */
    public function setDateModified(\DateTime $dateModified)
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
     * Add books_illustrated
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksIllustrated
     * @return Author
     */
    public function addBooksIllustrated(\Bdloc\AppBundle\Entity\Book $booksIllustrated)
    {
        $this->books_illustrated[] = $booksIllustrated;

        return $this;
    }

    /**
     * Remove books_illustrated
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksIllustrated
     */
    public function removeBooksIllustrated(\Bdloc\AppBundle\Entity\Book $booksIllustrated)
    {
        $this->books_illustrated->removeElement($booksIllustrated);
    }

    /**
     * Get books_illustrated
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooksIllustrated()
    {
        return $this->books_illustrated;
    }

    /**
     * Add books_scenarized
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksScenarized
     * @return Author
     */
    public function addBooksScenarized(\Bdloc\AppBundle\Entity\Book $booksScenarized)
    {
        $this->books_scenarized[] = $booksScenarized;

        return $this;
    }

    /**
     * Remove books_scenarized
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksScenarized
     */
    public function removeBooksScenarized(\Bdloc\AppBundle\Entity\Book $booksScenarized)
    {
        $this->books_scenarized->removeElement($booksScenarized);
    }

    /**
     * Get books_scenarized
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooksScenarized()
    {
        return $this->books_scenarized;
    }

    /**
     * Add books_colored
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksColored
     * @return Author
     */
    public function addBooksColored(\Bdloc\AppBundle\Entity\Book $booksColored)
    {
        $this->books_colored[] = $booksColored;

        return $this;
    }

    /**
     * Remove books_colored
     *
     * @param \Bdloc\AppBundle\Entity\Book $booksColored
     */
    public function removeBooksColored(\Bdloc\AppBundle\Entity\Book $booksColored)
    {
        $this->books_colored->removeElement($booksColored);
    }

    /**
     * Get books_colored
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooksColored()
    {
        return $this->books_colored;
    }
}
