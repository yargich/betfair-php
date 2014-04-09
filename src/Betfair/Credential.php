<?php
/**
 * This file is part of the Betfair library.
 *
 * (c) Daniele D'Angeli <dangeli88.daniele@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Betfair;

/**
 * Credentials class.
 *
 * @author Daniele D'Angeli <dangeli88.daniele@gmail.com>
 */
class Credential implements CredentialInterface
{
    /**
     * The application KEY.
     *
     * @var string
     */
    private $applicationKey;

    /**
     * The session token.
     *
     * @var string
     */
    private $sessionToken;

    protected $username;

    protected $password;


    /**
     * @param $applicationKey
     * @param $username
     * @param $password
     */
    public function __construct($applicationKey, $username, $password)
    {
        $this->applicationKey   = $applicationKey;
        $this->password         = $password;
        $this->username         = $username;
    }

    /**
     * @return string
     */
    public function getApplicationKey()
    {
        return $this->applicationKey;
    }

    /**
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    public function getUsername()
    {
       return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}