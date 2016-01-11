<?php

namespace MercurySeries\Flashy;

interface SessionStore
{
    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flashy($name, $data);
}
