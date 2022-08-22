<?php

class SendMessageEmailDecorator implements MessageInterface{

    protected $message;

    public function __constrict (MessageInterface $message)
    {
        $this->message = $message;
    }
    public function sendMessage($text)
    {
        send_email($text);
        $this->message->sendMessage($text);
    }
}