<?php
/**
 * Preview Technologies OAuth2 Resource Owner PHP class
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\Oauth2\Client;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

/**
 * Class ResourceOwner
 * @package Previewtechs\Oauth2\Client
 */
class ResourceOwner implements ResourceOwnerInterface
{

    /**
     * @var array
     */
    protected $response;

    /**
     * ResourceOwner constructor.
     * @param array $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }


    /**
     * @return null
     */
    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->response['email_address'] ?: null;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->response['profile']['first_name'] ?: null;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->response['profile']['last_name'] ?: null;
    }

    /**
     * @return null
     */
    public function getFullName()
    {
        return $this->response['profile']['full_name'] ?: null;
    }

    /**
     * @return null
     */
    public function getPicture()
    {
        return $this->response['profile']['picture'] ?: null;
    }

    /**
     * @return null
     */
    public function getGender()
    {
        return $this->response['profile']['gender'] ?: null;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
