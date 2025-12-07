<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "Page template",
    "icon" => "/media/pageTemplateIcon.png",
    "stylesheet" => "/styles/pageTemplateStyle.css",
    "keywords" => "template",
    "description" => "This page was created from a template. Please change the values in the headElementData array to the appropriate ones."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/templates/pageTemplate");

?>















    <body style="visibility: hidden">
        <div id="page">
            empty for now lol
        </div>
    </body>















<?php

echo '
    <script src="/javascript/showBody.js"></script>
</html>';

?>
