<?php

if (! function_exists('flashy')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @return \MercurySeries\Flashy\FlashNotifier
     */
    function flashy($message = null, $link = '#')
    {
        $notifier = app('flashy');

        if (! is_null($message)) {
            return $notifier->success($message, $link);
        }

        return $notifier;
    }
}
