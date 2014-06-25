<?php
namespace CDuc\PageBundle\Manager;
use Doctrine\ORM\EntityManager;
use CDuc\PageBundle\Entity\Page;

class PageManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function save(Page $page)
    {
        $this->persistAndFlush($page);
    }

    public function getRepository()
    {
        return $this->em->getRepository('CDucPageBundle:Page');
    }

    public function remove(Page $page)
    {
        $this->removeAndFlush($page);
    }
    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
    public function load($id) {
        return $this->getRepository()
                ->findOneBy(array('id' => $id));
    }
    public function removeAndFlush($entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}