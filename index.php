<?php

$messages = ["0@sn9sirppa@#?ia'jgtvryko1", "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj", "aopi?sgnirts@#?sedhtg+p9l!"];

function translation($params)
{
    foreach ($params as $param) {
        $length = strlen($param) / 2;
        $subString = substr($param, 5, $length);
        $newText = str_replace('@#?', ' ', $subString);
        echo strrev($newText) . " ";
    }
}

translation($messages);
