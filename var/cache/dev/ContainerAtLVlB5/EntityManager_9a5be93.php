<?php

namespace ContainerAtLVlB5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb99da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer54be8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc5d57 = [
        
    ];

    public function getConnection()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getConnection', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getMetadataFactory', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getExpressionBuilder', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'beginTransaction', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getCache', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'transactional', array('func' => $func), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'wrapInTransaction', array('func' => $func), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'commit', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->commit();
    }

    public function rollback()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'rollback', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getClassMetadata', array('className' => $className), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'createQuery', array('dql' => $dql), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'createNamedQuery', array('name' => $name), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'createQueryBuilder', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'flush', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'clear', array('entityName' => $entityName), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->clear($entityName);
    }

    public function close()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'close', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->close();
    }

    public function persist($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'persist', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'remove', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'refresh', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'detach', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'merge', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'contains', array('entity' => $entity), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getEventManager', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getConfiguration', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'isOpen', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getUnitOfWork', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getProxyFactory', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'initializeObject', array('obj' => $obj), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'getFilters', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'isFiltersStateClean', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'hasFilters', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return $this->valueHolderb99da->hasFilters();
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

        $instance->initializer54be8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb99da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb99da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb99da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__get', ['name' => $name], $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        if (isset(self::$publicPropertiesc5d57[$name])) {
            return $this->valueHolderb99da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99da;

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

        $targetObject = $this->valueHolderb99da;
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
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb99da;
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
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__isset', array('name' => $name), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb99da;
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
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__unset', array('name' => $name), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb99da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb99da;
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
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__clone', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        $this->valueHolderb99da = clone $this->valueHolderb99da;
    }

    public function __sleep()
    {
        $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, '__sleep', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;

        return array('valueHolderb99da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer54be8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer54be8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer54be8 && ($this->initializer54be8->__invoke($valueHolderb99da, $this, 'initializeProxy', array(), $this->initializer54be8) || 1) && $this->valueHolderb99da = $valueHolderb99da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb99da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb99da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
