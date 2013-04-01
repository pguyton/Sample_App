<?php

namespace Application\Repository;

use Doctrine\ORM\EntityManager;

/**
 * Class CustomerRepository
 * @package Application\Repository
 */
class CustomerRepository
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    /**
     * Retrieve all customers in the database
     * @return array
     */
    public function getAll()
    {
        return $this->entityManager->getRepository('Application\Model\Customer')->findBy(
            array(),
            array('name' => 'asc')
        );
    }
}
