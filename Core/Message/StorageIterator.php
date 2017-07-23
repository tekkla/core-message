<?php
namespace Core\Message;

/**
 * StorageIterator.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016-2017
 * @license MIT
 */
class StorageIterator implements \Iterator
{

    private $var;

    /**
     * Constructor
     *
     * @param array $array
     *            The array to iterate
     */
    public function __construct(array $array)
    {
        $this->var = $array;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Iterator::rewind()
     */
    public function rewind()
    {
        reset($this->var);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Iterator::current()
     */
    public function current()
    {
        $var = current($this->var);
        
        return $var;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Iterator::key()
     */
    public function key()
    {
        $var = key($this->var);
        
        return $var;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Iterator::next()
     */
    public function next()
    {
        $var = next($this->var);
        
        return $var;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Iterator::valid()
     */
    public function valid()
    {
        $var = $this->current() !== false;
        
        return $var;
    }
}
