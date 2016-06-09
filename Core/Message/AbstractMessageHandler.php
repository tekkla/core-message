<?php
namespace Core\Message;

/**
 * AbstractMessageHandler.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class AbstractMessageHandler implements \IteratorAggregate
{

    /**
     *
     * @var StorageInterface
     */
    private $storage;

    /**
     *
     * {@inheritdoc}
     *
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new \IteratorIterator($this->storage);
    }

    /**
     * Sets storage of messagehandler
     *
     * @param StorageInterface $storage
     */
    public function setStorage(StorageInterface &$storage)
    {
        $this->storage = &$storage;
    }

    /**
     * Adds a value to the storage
     *
     * @param string $key
     *            Id key of the element
     * @param mixed $value
     *            The value to store
     */
    public function add(MessageInterface $msg)
    {
        $this->storage->add($msg);
    }

    /**
     * Returns a value from storage searched by it' key
     *
     * @param string $key
     *            Id of element in storage
     */
    public function get($key)
    {
        return $this->storage->get($key);
    }

    /**
     * Returns all elements in stored as array
     *
     * @return array of all stored elements
     */
    public function getAll()
    {
        return $this->storage->getAll();
    }

    /**
     * Clears the the storage content
     */
    public function clear()
    {
        $this->storage->clear();
    }
}
