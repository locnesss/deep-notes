<?php

function onSave() {
    //print_r($_POST["note"]);
    saveToFile($_POST["note"]);
}

function saveToFile($note) {
    $notesArray = file_get_contents("./notes.json");
    //$notesArray = file("./notes.json");
    $arrayDecode = json_decode($notesArray);
    //print_r($arrayDecode);
    //$notesArray2[] = array_push($arrayDecode, $note);
    $arrayDecode[] = $note;
    //$notesArray2 = "$arrayDecode" . "$note";
    $jsonNotes = json_encode($arrayDecode);


    file_put_contents("./notes.json",$jsonNotes);
}

?>