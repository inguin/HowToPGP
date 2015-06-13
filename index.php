<?php

include("./strings/strings-de.php");


 if($_GET["page"] == "description") {
    $content = file_get_contents("./templates/description.html");
} else if($_GET["page"] == "questions") {
    $content = file_get_contents("./templates/questions.html");
} else if($_GET["page"] == "impressum") {
    $content = file_get_contents("./templates/impressum.html");
} else if($_GET["page"] == "") {
    $content = file_get_contents("./templates/startpage.html");
} else {
    $content = file_get_contents("./templates/error404.html"); 
}




$main_page = file_get_contents("./templates/main_page.html");
$main_page = str_replace('{CONTENT}', $content, $main_page);


foreach($translations as $name => $value) {
    $main_page = str_replace('$(' . $name . ')', $value, $main_page);
}

echo $main_page;

?>