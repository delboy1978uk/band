<?php

namespace DelTesting\Brewery\Entity;

use Codeception\TestCase\Test;
use Del\Factory\CountryFactory;
use Del\Band\Entity\Brewery;
use Del\Person\Entity\Person;

class BreweryTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Brewery
     */
    protected $venue;

    protected function _before()
    {
        $this->venue = new Brewery();
    }

    protected function _after()
    {
        unset($this->venue);
    }

    public function testGetSetId()
    {
        $this->venue->setId(100);
        $this->assertEquals(100, $this->venue->getId());
    }

    public function testGetSetBreweryName()
    {
        $this->venue->setBreweryName('The Shunned');
        $this->assertEquals('The Shunned', $this->venue->getBreweryName());
    }

    public function testGetSetPhoto()
    {
        $this->venue->setPhoto('Cheese');
        $this->assertEquals('Cheese', $this->venue->getPhoto());
    }

    public function testGetSetWebsite()
    {
        $this->venue->setWebsite('www.website.com');
        $this->assertEquals('www.website.com', $this->venue->getWebsite());
    }

    public function testGetSetEmail()
    {
        $this->venue->setEmail('venue@livevenues.com');
        $this->assertEquals('venue@livevenues.com', $this->venue->getEmail());
    }

    public function testGetSetPhoneNumber()
    {
        $this->venue->setPhoneNumber('+32497112233');
        $this->assertEquals('+32497112233', $this->venue->getPhoneNumber());
    }

    public function testGetSetVenues()
    {
        $venues = [
            'McSorleys',
            'Linen',
            'Fiere Margriet',
            'etc',
        ];
        $this->venue->setVenues($venues);
        $this->assertContains('Linen', $this->venue->getVenues());
    }

    public function testGetSetLinks()
    {
        $links = [
            'facebook',
            'twitter',
            'soundcloud',
            'etc',
        ];
        $this->venue->setLinks($links);
        $this->assertContains('twitter', $this->venue->getLinks());
    }

    public function testVisibility()
    {
        $this->assertFalse($this->venue->isVisible());
        $this->venue->setVisible(true);
        $this->assertTrue($this->venue->isVisible());
    }

    public function testGetSetTags()
    {
        $tags = [
            'rock',
            'metal',
            'glam',
            'viking',
        ];
        $this->venue->setTags($tags);
        $this->assertContains('viking', $this->venue->getTags());
    }

    public function testGetSetDescription()
    {
        $this->venue->setDescription('leather clad viking rockers');
        $this->assertEquals('leather clad viking rockers', $this->venue->getDescription());
    }

    public function testGetSetPerson()
    {
        $this->venue->setPerson(new Person());
        $this->assertInstanceOf('Del\Person\Entity\Person', $this->venue->getPerson());
    }
}