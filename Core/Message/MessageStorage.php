<?php
namespace Core\Message;

/**
 * MessageStorage.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class MessageStorage implements StorageInterface
{

    private $storage;

    /**
     *
     * {@inheritdoc}
     *
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new StorageIterator($this->storage);
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\StorageInterface::add()
     */
    public function add(MessageInterface $value)
    {
        if (empty($this->storage)) {
            $this->storage = [];
        }

        $this->storage[] = $value;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\StorageInterface::clear()
     */
    public function clear()
    {
        $this->storage = [];
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\StorageInterface::getAll()
     */
    public function getAll()
    {
        return $this->storage;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\StorageInterface::setStorage()
     */
    public function setStorage(array &$storage)
    {
        $this->storage = &$storage;
    }
}
