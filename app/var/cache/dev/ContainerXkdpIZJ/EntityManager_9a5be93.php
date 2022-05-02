<?php

namespace ContainerXkdpIZJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc9ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer19b98 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5dc0b = [
        
    ];

    public function getConnection()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getConnection', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getMetadataFactory', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getExpressionBuilder', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'beginTransaction', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getCache', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'transactional', array('func' => $func), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'commit', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->commit();
    }

    public function rollback()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'rollback', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getClassMetadata', array('className' => $className), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'createQuery', array('dql' => $dql), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'createNamedQuery', array('name' => $name), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'createQueryBuilder', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'flush', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'clear', array('entityName' => $entityName), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->clear($entityName);
    }

    public function close()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'close', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->close();
    }

    public function persist($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'persist', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'remove', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'refresh', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'detach', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'merge', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'contains', array('entity' => $entity), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getEventManager', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getConfiguration', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'isOpen', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getUnitOfWork', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getProxyFactory', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'initializeObject', array('obj' => $obj), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'getFilters', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'isFiltersStateClean', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'hasFilters', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return $this->valueHoldercc9ab->hasFilters();
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

        $instance->initializer19b98 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercc9ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc9ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc9ab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__get', ['name' => $name], $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        if (isset(self::$publicProperties5dc0b[$name])) {
            return $this->valueHoldercc9ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9ab;

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

        $targetObject = $this->valueHoldercc9ab;
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
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc9ab;
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
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__isset', array('name' => $name), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc9ab;
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
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__unset', array('name' => $name), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc9ab;
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
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__clone', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        $this->valueHoldercc9ab = clone $this->valueHoldercc9ab;
    }

    public function __sleep()
    {
        $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, '__sleep', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;

        return array('valueHoldercc9ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer19b98 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer19b98;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer19b98 && ($this->initializer19b98->__invoke($valueHoldercc9ab, $this, 'initializeProxy', array(), $this->initializer19b98) || 1) && $this->valueHoldercc9ab = $valueHoldercc9ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc9ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc9ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
