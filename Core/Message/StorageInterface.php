<?php
namespace Core\Message;

/**
 * StorageInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016-2017
 * @license MIT
 */
interface StorageInterface extends \IteratorAggregate
{

    /**
     * Sets reference to storage to use
     *
     * @param array $storage
     *            Reference to the storage where the data will be hold
     */
    public function setStorage(array &$storage);

    /**
     * Adds a message to the storage
     *
     * @param MessageInterface $message
     *            The message to store
     */
    public function add(MessageInterface $message);

    /**
     * Returns all elements in stored as array
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Clears the the storage content
     */
    public function clear();
}
