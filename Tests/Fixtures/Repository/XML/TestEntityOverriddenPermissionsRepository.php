<?php

namespace Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Fixtures\Repository\XML;

/**
 * TestEntityOverriddenPermissionsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TestEntityOverriddenPermissionsRepository extends \Doctrine\ORM\EntityRepository
{
    public function customMethod()
    {
        return $this->findAll();
    }
}
