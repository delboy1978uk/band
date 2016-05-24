<?php
/**
 * User: delboy1978uk
 * Date: 24/05/16
 * Time: 21:02
 */

namespace Del\Band\Collection;

use Del\Band\Entity\Artist;
use Doctrine\Common\Collections\ArrayCollection;
use LogicException;

class ArtistCollection extends ArrayCollection
{
    /**
     * @param Artist $artist
     * @return $this
     */
    public function update(Artist $artist)
    {
        $key = $this->findKey($artist);
        if($key) {

            $this->offsetSet($key,$artist);
            return $this;

        }
        throw new LogicException('Artist was not in the collection.');
    }

    /**
     * @param Artist $artist
     */
    public function append(Artist $artist)
    {
        $this->add($artist);
    }

    /**
     * @return Artist|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @param Artist $artist
     * @return bool|int
     */
    public function findKey(Artist $artist)
    {
        $it = $this->getIterator();
        $it->rewind();
        while($it->valid()) {
            if($it->current()->getId() == $artist->getId()) {
                return $it->key();
            }
            $it->next();
        }
        return false;
    }



    public function findById($id)
    {
        $it = $this->getIterator();
        $it->rewind();
        while($it->valid()) {
            if($it->current()->getId() == $id) {
                return $it->current();
            }
            $it->next();
        }

        return false;
    }

}