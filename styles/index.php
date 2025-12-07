<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "Styles list",
    "icon" => "/media/hiddenPageIcon.png",
    "stylesheet" => "/styles/hiddenPageStyle.css",
    "keywords" => "styles",
    "description" => "A page with links to the important raw files of my page styles on my Github repo."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/styles/");

?>















    <body style="visibility: hidden">
        <div id="page">
            My page styles <span>(links to the important raw files on my Github repo)</span>:
            <ul>
                <li><a class="link" href="https://raw.githubusercontent.com/Demagoh/DemagohWebsiteFiles/refs/heads/master/styles/mainStyle.css">Main style</a></li>
                <li><a class="link" href="https://raw.githubusercontent.com/Demagoh/DemagohWebsiteFiles/refs/heads/master/styles/hiddenPageStyle.css">Hidden page style</a></li>
            </ul>
            <br />
            <a href="/">Home</a>
        </div>
    </body>















<?php

echo '
    <script src="/javascript/showBody.js"></script>
</html>';

?>
