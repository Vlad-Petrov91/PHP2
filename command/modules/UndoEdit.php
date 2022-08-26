<?php

include "../interfaces/ICommand.php";

class UndoEdit
{

    public function undo(ICommand $command)
    {
        $command->execute();
    }
}
