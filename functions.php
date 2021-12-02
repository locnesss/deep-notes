<?php

function onSave() {
    //print_r($_POST["note"]);
    saveToFile($_POST["note"]);
}

function saveToFile($note) {
    $notesArray = getFromFile();
    $notesArray[] = $note ;
    $jsonNotes = json_encode($notesArray);
    //$notesArray = file_get_contents("./notes.json"); det her er min egen version
    //$arrayDecode = json_decode($notesArray);
    //$arrayDecode[] = $note;
    //$jsonNotes = json_encode($arrayDecode);


    file_put_contents("./notes.json",$jsonNotes);
}

function getFromFile() {
    $jsonNotes = file_get_contents("./notes.json");
    $notesArray = json_decode($jsonNotes, true);
    //print_r($notesArray);
    return $notesArray;
}

function deleteFromFile() {
    $notesArray = getFromFile();
    $indexx = $_GET["i"];
    unset($notesArray[$indexx]);
    //return $notesArray;
    $jsonNotes = json_encode($notesArray);
    file_put_contents("./notes.json",$jsonNotes);

    getFromFile();

}



?>