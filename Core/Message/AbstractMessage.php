<?php
namespace Core\Message;

/**
 * AbstractMessage.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016-2017
 * @license MIT
 */
abstract class AbstractMessage implements MessageInterface
{

    /**
     *
     * @var string
     */
    private $message = '';

    /**
     *
     * @var string
     */
    private $id = '';

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\MessageInterface::setMessage()
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\MessageInterface::getMessage()
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\MessageInterface::getId()
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Message\MessageInterface::setId()
     */
    public function setId0(string $id)
    {
        $this->id = $id;
    }
}
