<?php
/**
 * Created by PhpStorm.
 * User: rhsu
 * Date: 8/31/15
 * Time: 1:36 PM
 */

class EncodedCookieToZuid {
  public function convert(EncodedZuid $encodedZuid)
  {
      $url = sprintf('http://user-profile-service1.sv2.trulia.com/user_id/%s', $encodedZuid->getCookieString());
      $payload = file_get_contents($url);
      return $payload;
  }
}
