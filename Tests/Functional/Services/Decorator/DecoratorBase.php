<?php
declare(strict_types=1);

namespace Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Functional\Services\Decorator;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class DecoratorBase extends WebTestCase
{
    protected $em;

    /**
     * This method is run before each public test method
     */
    protected function setUp()
    {
        require_once __DIR__.'/../../../AppKernel.php';
        $kernel = new \AppKernel('test', true);
        $kernel->boot();
        static::$container = $kernel->getContainer();
        $this->em = static::$container->get('doctrine.orm.entity_manager');

        $repository_services = array(
      'repository.test_entity',
      'repository.test_entity_constructor_params',
      'repository.test_entity_abort_calls',
      'repository.test_entity_abort_save',
      'repository.test_entity_abort_delete',
    );
        foreach ($repository_services as $repository_service) {
            $this->deleteAllEntities($repository_service);
        }
    }

    protected function deleteAllEntities($repository_service)
    {
        $repositoryDecorator = static::$container->get($repository_service);
        $entityDecorators = $repositoryDecorator->findAll();
        foreach ($entityDecorators as $entityDecorator) {
            $entityDecorator->delete(false);
        }
        $repositoryDecorator->getEntityManager()->flush();
    }
}
