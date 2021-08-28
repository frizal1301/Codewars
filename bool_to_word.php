<?php
function boolToWord(bool $bool) : string{
    return $bool == true ? "True" : "False";
}

echo boolToWord(false);