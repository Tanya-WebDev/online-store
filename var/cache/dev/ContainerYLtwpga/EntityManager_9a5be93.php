<?php

namespace ContainerYLtwpga;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f032 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85fbd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75ae5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getConnection', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getMetadataFactory', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getExpressionBuilder', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'beginTransaction', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getCache', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'transactional', array('func' => $func), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'commit', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->commit();
    }

    public function rollback()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'rollback', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getClassMetadata', array('className' => $className), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'createQuery', array('dql' => $dql), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'createNamedQuery', array('name' => $name), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'createQueryBuilder', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'flush', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'clear', array('entityName' => $entityName), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->clear($entityName);
    }

    public function close()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'close', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->close();
    }

    public function persist($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'persist', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'remove', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'refresh', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'detach', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'merge', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'contains', array('entity' => $entity), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getEventManager', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getConfiguration', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'isOpen', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getUnitOfWork', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getProxyFactory', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'initializeObject', array('obj' => $obj), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'getFilters', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'isFiltersStateClean', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'hasFilters', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return $this->valueHolder5f032->hasFilters();
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

        $instance->initializer85fbd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5f032) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f032 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f032->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__get', ['name' => $name], $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        if (isset(self::$publicProperties75ae5[$name])) {
            return $this->valueHolder5f032->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f032;

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

        $targetObject = $this->valueHolder5f032;
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
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f032;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f032;
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
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__isset', array('name' => $name), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f032;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f032;
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
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__unset', array('name' => $name), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f032;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f032;
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
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__clone', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        $this->valueHolder5f032 = clone $this->valueHolder5f032;
    }

    public function __sleep()
    {
        $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, '__sleep', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;

        return array('valueHolder5f032');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85fbd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85fbd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85fbd && ($this->initializer85fbd->__invoke($valueHolder5f032, $this, 'initializeProxy', array(), $this->initializer85fbd) || 1) && $this->valueHolder5f032 = $valueHolder5f032;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f032;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f032;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
