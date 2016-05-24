<?php

namespace Del\Band\Criteria;

use Del\Common\Criteria;
use Del\Person\Entity\Person;

class ArtistCriteria extends Criteria
{
    const ORDER_ID = 'id';
    const ORDER_PERSON_FIRSTNAME = 'p.firstName';
    const ORDER_STAGE_NAME = 'stageName';
    const ORDER_WEBSITE = 'website';
    const ORDER_EMAIL = 'email';
    const ORDER_PHONE_NUMBER = 'phoneNumber';

    /**
     * @var int $id
     */
    private $id;

    /**
     * @var Person $person
     */
    private $person;

    /**
     * @var string $stageName
     */
    private $stageName;

    /**
     * @var string $photo
     */
    private $photo;

    /**
     * @var string $website
     */
    private $website;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $phoneNumber
     */
    private $phoneNumber;

    /**
     * @var array $links
     */
    private $links;

    /**
     * @var array $bands
     */
    private $bands;

    /**
     * @var bool $visible
     */
    private $visible;

    /**
     * @var array $tags
     */
    private $tags;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ArtistCriteria
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return ArtistCriteria
     */
    public function setPerson($person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasPerson()
    {
        return $this->description !== null;
    }

    /**
     * @return string
     */
    public function getStageName()
    {
        return $this->stageName;
    }

    /**
     * @param string $stageName
     * @return ArtistCriteria
     */
    public function setStageName($stageName)
    {
        $this->stageName = $stageName;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasStageName()
    {
        return $this->stageName !== null;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return ArtistCriteria
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasPhoto()
    {
        return $this->photo !== null;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return ArtistCriteria
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasWebsite()
    {
        return $this->website !== null;
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
     * @return ArtistCriteria
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasEmail()
    {
        return $this->email !== null;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return ArtistCriteria
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasPhoneNumber()
    {
        return $this->phoneNumber !== null;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return ArtistCriteria
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasLinks()
    {
        return $this->links !== null;
    }

    /**
     * @return array
     */
    public function getBands()
    {
        return $this->bands;
    }

    /**
     * @param array $bands
     * @return ArtistCriteria
     */
    public function setBands($bands)
    {
        $this->bands = $bands;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasBands()
    {
        return $this->bands !== null;
    }

    /**
     * @return boolean
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param boolean $visible
     * @return ArtistCriteria
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasVisible()
    {
        return $this->visible !== null;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return ArtistCriteria
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasTags()
    {
        return $this->tags !== null;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ArtistCriteria
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasDescription()
    {
        return $this->description !== null;
    }


}