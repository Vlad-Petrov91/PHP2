<?php

class SendMessageCNDecorator implements MessageInterface{

    protected $message;

    public function __constrict (MessageInterface $message, $number)
    {
        $this->message = $message;
    }
    public function sendMessage($text)
    {
        send_CN($text);
        $this->message->sendMessage($text);
    }
}