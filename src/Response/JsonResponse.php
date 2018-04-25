<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 10.04.2018
 * Time: 9:53
 */

namespace EncryptServer\Response;

/**
 * @brief JSON Response from server. Wrapper.
 */
class JsonResponse extends Response
{
    /**
     * @brief make JsonResponse object from Response
     * @param Response $response
     * @return JsonResponse
     */
    public static function fromResponse(Response $response)
    {
        return new self(
            $response->getStatus(),
            $response->getResponse(),
            $response->getDescription()
        );
    }

    /**
     * @brief Send json response to client
     */
    public function send()
    {
        $json=json_encode([
            "status" => $this->getStatus(),
            "response" => $this->getResponse(),
            "description" => $this->getDescription()
        ],JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json');
        die($json);
    }
}