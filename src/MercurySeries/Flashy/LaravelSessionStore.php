<?php

namespace MercurySeries\Flashy;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore
{

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flashy($name, $data)
    {
        $this->session->flash($name, $data);
    }
}
