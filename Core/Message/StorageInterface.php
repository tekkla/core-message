<?php
namespace Core\Message;

/**
 * StorageInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
interface StorageInterface extends \IteratorAggregate
{

    /**
     * Sets reference to storage to use
     *
     * @param mixed $storage
     *            Reference to the storage wher ethe data will be hold
     */
    public function setStorage(array &$storage);

    /**
     * Adds a message to the storage
     *
     * @param string $key
     *            Id key of the element
     * @param mixed $value
     *            The value to store
     */
    public function add(MessageInterface $value);

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
