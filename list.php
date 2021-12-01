<?php

function ReadList() {
    $list = file_get_contents("./notes.json");
    $liste = json_decode($list);
    foreach ($liste as $punkt) {
        echo("<li> $punkt </li>");
    }

}



?>