<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "About me",
    "icon" => "/media/DemagohPFP.png",
    "stylesheet" => "/styles/aboutmePageStyle.css",
    "keywords" => "aboutme",
    "description" => "Who am i?"
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/aboutme/");

?>















    <body style="visibility: hidden">
        <div id="page">
            <a href="/">> Back to the home page <</a>
        </div>
    </body>















<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
