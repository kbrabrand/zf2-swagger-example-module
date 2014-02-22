<?php

namespace SwaggerExample\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * @SWG\Resource(
 *     apiVersion="1.0",
 *     swaggerVersion="1.2",
 *     basePath="/api"
 * )
 */
class MessageController extends AbstractRestfulController {

    /**
     * @SWG\Api(
     *     description="Message operations",
     *     path="/messages",
     *     @SWG\Operation(
     *         method="GET",
     *         summary="Fetches a list of all the messages",
     *         type="array",
     *         @SWG\Items("Message"),
     *         @SWG\ResponseMessage(code=200, message="OK")
     *     )
     * )
     */
    public function getList() {
        return new JsonModel(array());
    }

    /**
     * @SWG\Api(
     *     path="/messages/{messageId}",
     *     @SWG\Operation(
     *         method="GET",
     *         summary="Fetch a message",
     *         notes="Fetches a specific message based on the message ID",
     *         type="Message",
     *         @SWG\Parameters(
     *             @SWG\Parameter(
     *                 name="messageId",
     *                 paramType="path",
     *                 description="ID of message to fetch",
     *                 required=true,
     *                 type="integer",
     *                 minimum="1.0"
     *             )
     *         ),
     *         @SWG\ResponseMessage(code=200, message="OK"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function get($id) {
        return new JsonModel(array());
    }

    /**
     * @SWG\Api(
     *     path="/messages",
     *     @SWG\Operation(
     *         method="POST",
     *         summary="Adds a new message",
     *         type="Message",
     *         @SWG\Parameter(
     *             name="message",
     *             paramType="body",
     *             description="The message to add",
     *             required=true,
     *             type="Message"
     *         ),
     *         @SWG\ResponseMessage(code=200, message="Message successfully created"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function create($data) {
        return new JsonModel(array());
    }

    /**
     * @SWG\Api(
     *     path="/message/{messageId}",
     *     @SWG\Operation(
     *         method="PATCH",
     *         summary="Updates a message",
     *         type="Message",
     *         @SWG\Parameters(
     *             @SWG\Parameter(
     *                 name="messageId",
     *                 paramType="path",
     *                 description="ID of message to fetch",
     *                 required=true,
     *                 type="integer",
     *                 minimum="1.0"
     *             ),
     *             @SWG\Parameter(
     *                 name="message",
     *                 paramType="body",
     *                 description="The updated message object",
     *                 required=true,
     *                 type="Message"
     *             )
     *         ),
     *         @SWG\ResponseMessage(code=200, message="Message successfully updated"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function update($id, $data) {
        return new JsonModel(array());
    }

    /**
     * @SWG\Api(
     *     path="/messages/{messageId}",
     *     @SWG\Operation(
     *         method="DELETE",
     *         summary="Deletes a message",
     *         notes="Deletes a message based on the message ID",
     *         @SWG\Parameter(
     *             name="messageId",
     *             paramType="path",
     *             description="ID of message to fetch",
     *             required=true,
     *             type="integer",
     *             minimum="1.0"
     *         ),
     *         @SWG\ResponseMessage(code=200, message="Message deleted"),
     *         @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     *         @SWG\ResponseMessage(code=404, message="Message not found"),
     *         @SWG\ResponseMessage(code=410, message="Message has been deleted")
     *     )
     * )
     */
    public function delete($id) {
        return new JsonModel(array());
    }
}