<?php

$message = new SendMessageSmsDecorator(
    new SendMessageEmailDecorator(
        new SendMessageCNDecorator(
            new Message("text")
        )
    )
);