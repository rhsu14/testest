<?php
/**
 * Created by PhpStorm.
 * User: rhsu
 * Date: 8/31/15
 * Time: 11:46 AM
 */

class GetZuid {
    private $encryptedToZuid;
    private $encodedToZuid;
    private $EncodedCookieToZuid;

    function __construct()//$encryptedToZuid, $encodedToZuid)
    {
        //$this->encryptedToZuid = $encryptedToZuid;
        //$this->encodedToZuid = $encodedToZuid;
        $this->EncodedCookieToZuid = new EncodedCookieToZuid();
    }


    public function fromEncrypted(EncryptedZuid $encryptedZuid)
    {
        //hit encryptedZuid endpoint
    }

    public function fromEncoded(EncodedZuid $encodedZuid)
    {
      return $this->EncodedCookieToZuid->convert($encodedZuid);
    }

}
