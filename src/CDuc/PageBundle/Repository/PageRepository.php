<?php

namespace CDuc\PageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PageRepository extends EntityRepository
{
    public function findByConcours($cid)
    {
        return $this->findBy(array('concours' => $cid));
    }
}