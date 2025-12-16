<?php

require_once("functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "Demagoh",
    "icon" => "/media/DemagohPFP.png",
    "stylesheet" => "/styles/mainPageStyle.css",
    "keywords" => "Demagoh",
    "description" => "Damn, I have a website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/");

?>
    <body style="visibility: hidden">
        <div id="page">
            Pages:
            <ul>
                <li><a href="gyped/">Gyped</a></li>
                <li><a href="friends/">Friends</a></li>
                <li><a href="aboutme/">About me</a></li>
                <li><a href="about/">About</a></li>
            </ul>
            <br />
            Links:
            <ul>
                <li><a href="https://mas.to/@DemagohOfficial" target="_blank">Mastodon</a></li>
                <li><a href="https://github.com/demagoh" target="_blank">Github</a></li>
                <li><a href="https://github.com/Demagoh/DemagohWebsiteFiles" target="_blank">Website's Github repo</a></li>
            </ul>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
