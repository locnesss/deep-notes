<?php

if (isset($_POST["note"])) {
    onSave();
}

if (isset($_GET["i"])) {
    deleteFromFile();
}

?>