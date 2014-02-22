<?php
namespace SwaggerExample\Models;

/**
 * @SWG\Model(id="Message",required="recipientId, senderId, title, message")
 */
class Message {

    /**
     * @SWG\Property(name="id",type="integer",format="int64",description="Unique identifier for the Message",minimum="0.0",maximum="100.0")
     */
    public $id;

    /**
     * @SWG\Property(name="recipientId",type="integer",description="User ID identifying the recipient")
     */
    public $recipientId;

    /**
     * @SWG\Property(name="senderId",type="integer",description="User ID identifying the sender")
     */
    public $senderId;

    /**
     * @SWG\Property(name="visibility",type="string",enum="['public', 'private']",description="Tags assigned to this pet")
     */
    public $visibility;

    /**
     * @SWG\Property(name="title",type="string",description="Image URLs")
     */
    public $title;

    /**
     * @SWG\Property(name="tags",type="array",@SWG\Items("string"),description="Tags describing the message")
     */
    public $tags;

    /**
     * @SWG\Property(name="message",type="string",description="The message")
     */
    public $message;

}