<?php
/**
 * Created by PhpStorm.
 * User: rhsu
 * Date: 8/31/15
 * Time: 11:45 AM
 */

class EncryptedZuid {
    private $encrypted_zuid;

    function __construct($encrypted_zuid)
    {
        $this->encrypted_zuid = $encrypted_zuid;
    }

    /**
     * @return mixed
     */
    public function getEncryptedZuid()
    {
        return $this->encrypted_zuid;
    }



}