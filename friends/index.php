<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "My friends",
    "icon" => "/media/friendsIcon.png",
    "stylesheet" => "/styles/friendsPageStyle.css",
    "keywords" => "friends",
    "description" => "A list of all my friends that agreed to be featured on my website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/friends/");

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
