<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class MessageAttachment extends \Entity
{
    /**
     * @return \Entity\Repository\MessageAttachmentRepository
     */
     public static function repository(){
        return \Entity\Repository\MessageAttachmentRepository::instance();
    }

    /**
     * @return \Entity\MessageAttachment
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $path
     */
    protected $path;

    /**
     * @var text $comment
     */
    protected $comment;

    /**
     * @var integer $size
     */
    protected $size;

    /**
     * @var integer $message_id
     */
    protected $message_id;

    /**
     * @var string $filename
     */
    protected $filename;


    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $value
     * @return MessageAttachment
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Set comment
     *
     * @param text $value
     * @return MessageAttachment
     */
    public function set_comment($value)
    {
        $this->comment = $value;
        return $this;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function get_comment()
    {
        return $this->comment;
    }

    /**
     * Set size
     *
     * @param integer $value
     * @return MessageAttachment
     */
    public function set_size($value)
    {
        $this->size = $value;
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function get_size()
    {
        return $this->size;
    }

    /**
     * Set message_id
     *
     * @param integer $value
     * @return MessageAttachment
     */
    public function set_message_id($value)
    {
        $this->message_id = $value;
        return $this;
    }

    /**
     * Get message_id
     *
     * @return integer 
     */
    public function get_message_id()
    {
        return $this->message_id;
    }

    /**
     * Set filename
     *
     * @param string $value
     * @return MessageAttachment
     */
    public function set_filename($value)
    {
        $this->filename = $value;
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function get_filename()
    {
        return $this->filename;
    }
}