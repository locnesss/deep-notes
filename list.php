<?php

function ReadList() {
    $list = file_get_contents("./notes.json");
    $liste = json_decode($list);
    $i = 0;
    foreach ($liste as $punkt) {
        echo("<li><input type=\"checkbox\"> $punkt </li>");
    }
}

?>

<form action="checkbox" name="checkbox" value=''>
<ul>

<?php ReadList(); 

?>

</ul>

</form>