<?php

namespace ContainerByCRYth;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder71c43 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere77e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4837 = [
        
    ];

    public function getConnection()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getConnection', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getMetadataFactory', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getExpressionBuilder', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'beginTransaction', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getCache', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getCache();
    }

    public function transactional($func)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'transactional', array('func' => $func), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->transactional($func);
    }

    public function commit()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'commit', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->commit();
    }

    public function rollback()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'rollback', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getClassMetadata', array('className' => $className), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'createQuery', array('dql' => $dql), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'createNamedQuery', array('name' => $name), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'createQueryBuilder', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'flush', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'clear', array('entityName' => $entityName), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->clear($entityName);
    }

    public function close()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'close', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->close();
    }

    public function persist($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'persist', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'remove', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'refresh', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'detach', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'merge', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getRepository', array('entityName' => $entityName), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'contains', array('entity' => $entity), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getEventManager', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getConfiguration', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'isOpen', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getUnitOfWork', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getProxyFactory', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'initializeObject', array('obj' => $obj), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'getFilters', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'isFiltersStateClean', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'hasFilters', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return $this->valueHolder71c43->hasFilters();
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

        $instance->initializere77e0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder71c43) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder71c43 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder71c43->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__get', ['name' => $name], $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        if (isset(self::$publicPropertiesd4837[$name])) {
            return $this->valueHolder71c43->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71c43;

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

        $targetObject = $this->valueHolder71c43;
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
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71c43;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder71c43;
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
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__isset', array('name' => $name), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71c43;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder71c43;
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
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__unset', array('name' => $name), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71c43;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder71c43;
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
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__clone', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        $this->valueHolder71c43 = clone $this->valueHolder71c43;
    }

    public function __sleep()
    {
        $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, '__sleep', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;

        return array('valueHolder71c43');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere77e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere77e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere77e0 && ($this->initializere77e0->__invoke($valueHolder71c43, $this, 'initializeProxy', array(), $this->initializere77e0) || 1) && $this->valueHolder71c43 = $valueHolder71c43;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71c43;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71c43;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
