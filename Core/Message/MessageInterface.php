<?php
namespace Core\Message;

/**
 * MessageInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
interface MessageInterface
{
    /**
     * Sets message content
     *
     * This can be any type of text or html code to be displayed as message text.
     *
     * @param string $message
     */
    public function setMessage(string $message);

    /**
     * Returns message content
     *
     * Will be an empty string when no messagecontent is set.
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Sets a message id
     *
     * @param string $id
     */
    public function setId(string $id);

    /**
     * Returns the set message id
     *
     * Returns empty string when no id is set.
     *
     * @return string
     */
    public function getId(): string;
}
