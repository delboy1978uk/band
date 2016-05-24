<?php

namespace DelTesting\Band\Entity;

use Codeception\TestCase\Test;
use Del\Factory\CountryFactory;
use Del\Band\Entity\Artist;
use Del\Person\Entity\Person;

class ArtistTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Artist
     */
    protected $artist;

    protected function _before()
    {
        $this->artist = new Artist();
    }

    protected function _after()
    {
        unset($this->artist);
    }

    public function testGetSetId()
    {
        $this->artist->setId(100);
        $this->assertEquals(100, $this->artist->getId());
    }

    public function testGetPerson()
    {
        $person = new Person();
        $this->artist->setPerson($person);
        $this->assertInstanceOf('Del\Person\Entity\Person', $this->artist->getPerson());
    }

    public function testGetSetStageName()
    {
        $this->artist->setStageName('Whatever');
        $this->assertEquals('Whatever', $this->artist->getStageName());
    }

    public function testGetSetPhoto()
    {
        $this->artist->setPhoto('Cheese');
        $this->assertEquals('Cheese', $this->artist->getPhoto());
    }

    public function testGetSetWebsite()
    {
        $this->artist->setWebsite('www.website.com');
        $this->assertEquals('www.website.com', $this->artist->getWebsite());
    }

    public function testGetSetEmail()
    {
        $this->artist->setEmail('singer@songwriter.com');
        $this->assertEquals('singer@songwriter.com', $this->artist->getEmail());
    }

    public function testGetSetPhoneNumber()
    {
        $this->artist->setPhoneNumber('+32497112233');
        $this->assertEquals('+32497112233', $this->artist->getPhoneNumber());
    }

    public function testGetSetLinks()
    {
        $links = [
            'facebook',
            'twitter',
            'soundcloud',
            'etc',
        ];
        $this->artist->setLinks($links);
        $this->assertContains('twitter', $this->artist->getLinks());
    }

    public function testGetSetBands()
    {
        $bands = [
            'iron maiden',
            'metallica',
            'led zeppelin',
            'the beatles',
        ];
        $this->artist->setBands($bands);
        $this->assertContains('the beatles', $this->artist->getBands());
    }

    public function testVisibility()
    {
        $this->assertFalse($this->artist->isVisible());
        $this->artist->setVisible(true);
        $this->assertTrue($this->artist->isVisible());
    }

    public function testGetSetTags()
    {
        $tags = [
            'guitar',
            'harmonica',
            'kazoo',
            'ukulele',
        ];
        $this->artist->setTags($tags);
        $this->assertContains('guitar', $this->artist->getTags());
    }

    public function testGetSetDescription()
    {
        $this->artist->setDescription('Ziggy played guitar');
        $this->assertEquals('Ziggy played guitar', $this->artist->getDescription());
    }
}
