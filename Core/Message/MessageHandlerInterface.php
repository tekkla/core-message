<?php
namespace Core\Message;

/**
 * MessageHandlerInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
interface MessageHandlerInterface extends \IteratorAggregate
{

    /**
     * Sets storage of messagehandler
     *
     * @param StorageInterface $storage
     */
    public function setStorage(StorageInterface &$storage);

    /**
     * Adds a value to the storage
     *
     * @param string $key
     *            Id key of the element
     * @param mixed $value
     *            The value to store
     */
    public function add(MessageInterface $msg);

    /**
     * Returns a value from storage searched by it' key
     *
     * @param string $key
     *            Id of element in storage
     */
    public function get($key);

    /**
     * Returns all elements in stored as array
     *
     * @return array of all stored elements
     */
    public function getAll();

    /**
     * Clears the the storage content
     */
    public function clear();
}

