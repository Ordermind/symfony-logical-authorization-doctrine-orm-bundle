<?php

namespace Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Fixtures\Repository\Misc;

/**
 * TestEntityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TestEntityRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByField1($value)
    {
        return $this->findBy(array('field1' => $value));
    }
    public function findOneByField1($value)
    {
        return $this->findOneBy(array('field1' => $value));
    }
}
