<?php

namespace ContainerMQtR1mj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd9ead = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc573 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties756d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getConnection', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getMetadataFactory', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getExpressionBuilder', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'beginTransaction', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getCache', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'transactional', array('func' => $func), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'commit', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->commit();
    }

    public function rollback()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'rollback', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getClassMetadata', array('className' => $className), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'createQuery', array('dql' => $dql), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'createNamedQuery', array('name' => $name), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'createQueryBuilder', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'flush', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'clear', array('entityName' => $entityName), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->clear($entityName);
    }

    public function close()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'close', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->close();
    }

    public function persist($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'persist', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'remove', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'refresh', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'detach', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'merge', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'contains', array('entity' => $entity), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getEventManager', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getConfiguration', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'isOpen', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getUnitOfWork', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getProxyFactory', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'initializeObject', array('obj' => $obj), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'getFilters', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'isFiltersStateClean', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'hasFilters', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return $this->valueHolderd9ead->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializercc573 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd9ead) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9ead = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd9ead->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__get', ['name' => $name], $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        if (isset(self::$publicProperties756d2[$name])) {
            return $this->valueHolderd9ead->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ead;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9ead;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ead;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9ead;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__isset', array('name' => $name), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ead;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd9ead;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__unset', array('name' => $name), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9ead;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd9ead;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__clone', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        $this->valueHolderd9ead = clone $this->valueHolderd9ead;
    }

    public function __sleep()
    {
        $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, '__sleep', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;

        return array('valueHolderd9ead');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc573 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc573;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc573 && ($this->initializercc573->__invoke($valueHolderd9ead, $this, 'initializeProxy', array(), $this->initializercc573) || 1) && $this->valueHolderd9ead = $valueHolderd9ead;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9ead;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd9ead;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
