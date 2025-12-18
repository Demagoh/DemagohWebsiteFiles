<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "The how",
    "icon" => "/media/hiddenPageIcon.png",
    "stylesheet" => "/styles/thehowPageStyle.css",
    "keywords" => "the how",
    "description" => "A somewhat accurate description of how I made my website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/about/thehow");

?>
    <body style="visibility: hidden">
        <div id="page">
            <a href="/about/">> Back to the about page <</a><br />
            <a href="/">> Back to the home page <</a>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
