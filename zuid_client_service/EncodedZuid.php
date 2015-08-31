<?php
/**what is this? name of encoded zuid, where to find it, what we expect provided by user*/

class EncodedZuid {
    private $cookie_string;

    function __construct($cookie_string)
    {
        $this->cookie_string = $cookie_string;
    }

    /**
     * @return mixed
     */
    public function getCookieString()
    {
        return $this->cookie_string;
    }


}