<?php

namespace Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Fixtures\Entity\Annotation;

use Doctrine\ORM\Mapping as ORM;
use Ordermind\LogicalAuthorizationDoctrineORMBundle\Annotation\Doctrine\Permissions;
use Ordermind\LogicalAuthorizationBundle\Interfaces\UserInterface;
use Ordermind\LogicalAuthorizationBundle\Interfaces\ModelInterface;

/**
 * TestEntityOverriddenPermissions
 *
 * @ORM\Table(name="testentities_overridden_permissions_annotation")
 * @ORM\Entity(repositoryClass="Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Fixtures\Repository\Annotation\TestEntityOverriddenPermissionsRepository")
 * @Permissions({
 *   "create": FALSE,
 *   "read": FALSE,
 *   "update": FALSE,
 *   "delete": FALSE
 * })
 */
class TestEntityOverriddenPermissions implements ModelInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="field1", type="string", length=255)
     * @Permissions({
     *   "get": FALSE,
     *   "set": FALSE
     * })
     */
    private $field1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="field2", type="string", length=255)
     */
    private $field2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="field3", type="string", length=255)
     */
    private $field3 = '';

    /**
     * @var \Ordermind\LogicalAuthorizationBundle\Interfaces\UserInterface
     * @ORM\ManyToOne(targetEntity="Ordermind\LogicalAuthorizationDoctrineORMBundle\Tests\Fixtures\Entity\User\TestUser")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set field1
     *
     * @param string $field1
     *
     * @return TestEntityOverriddenPermissions
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get field1
     *
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set field2
     *
     * @param string $field2
     *
     * @return TestEntityOverriddenPermissions
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Get field2
     *
     * @return string
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set field3
     *
     * @param string $field3
     *
     * @return TestEntityOverriddenPermissions
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Get field3
     *
     * @return string
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set author
     *
     * @param \Ordermind\LogicalAuthorizationBundle\Interfaces\UserInterface $author
     *
     * @return entity implementing ModelInterface
     */
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return \Ordermind\LogicalAuthorizationBundle\Interfaces\UserInterface
     */
    public function getAuthor(): ?UserInterface {
        return $this->author;
    }

}

