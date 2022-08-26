<?php

$editCopyText = new CopyText($text);
$WordAction = new Word($editCopyText);

$remoteWordAction = new UndoEdit();
$remote->undo($WordAction);
