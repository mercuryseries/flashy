<?php

namespace MercurySeries\Flashy;

class FlashyNotifier
{

    /**
     * The session writer.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new flash notifier instance.
     *
     * @param SessionStore $session
     */
    function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     * @param string $link
     */
    public function info($message, $link = '#')
    {
        $this->message($message, $link, 'info');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function success($message, $link = '#')
    {
        $this->message($message, $link, 'success');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function error($message, $link = '#')
    {
        $this->message($message, $link, 'error');

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function warning($message, $link = '#')
    {
        $this->message($message, $link, 'warning');

        return $this;
    }

    /**
     * Flash a primary message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function primary($message, $link = '#')
    {
        $this->message($message, $link, 'primary');

        return $this;
    }

    /**
     * Flash a primary dark message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function primaryDark($message, $link = '#')
    {
        $this->message($message, $link, 'primary-dark');

        return $this;
    }

    /**
     * Flash a muted message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function muted($message, $link = '#')
    {
        $this->message($message, $link, 'muted');

        return $this;
    }

    /**
     * Flash a muted dark message.
     *
     * @param  string $message
     * @param  string $link
     * @return $this
     */
    public function mutedDark($message, $link = '#')
    {
        $this->message($message, $link, 'muted-dark');

        return $this;
    }

    /**
     * Flash a general message.
     *
     * @param  string $message
     * @param  string $link
     * @param  string $type
     * @return $this
     */
    public function message($message, $link = '#', $type = 'success')
    {
        $this->session->flashy('flashy_notification.message', $message);
        $this->session->flashy('flashy_notification.link', $link);
        $this->session->flashy('flashy_notification.type', $type);

        return $this;
    }
}
