<?php

namespace Symfony\Config\DoctrineMigrations;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TableStorageConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $tableStorage;
    private $_usedProperties = [];
    
    public function tableStorage(array $value = []): \Symfony\Config\DoctrineMigrations\Storage\TableStorageConfig
    {
        if (null === $this->tableStorage) {
            $this->_usedProperties['tableStorage'] = true;
            $this->tableStorage = new \Symfony\Config\DoctrineMigrations\Storage\TableStorageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "tableStorage()" has already been initialized. You cannot pass values the second time you call tableStorage().');
        }
    
        return $this->tableStorage;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('table_storage', $value)) {
            $this->_usedProperties['tableStorage'] = true;
            $this->tableStorage = new \Symfony\Config\DoctrineMigrations\Storage\TableStorageConfig($value['table_storage']);
            unset($value['table_storage']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tableStorage'])) {
            $output['table_storage'] = $this->tableStorage->toArray();
        }
    
        return $output;
    }

}
