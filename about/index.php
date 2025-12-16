<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "About this website",
    "icon" => "/media/hiddenPageIcon.png",
    "stylesheet" => "/styles/aboutPageStyle.css",
    "keywords" => "about",
    "description" => "About this website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/about/");

?>















    <body style="visibility: hidden">
        <div id="page">
            <h1>About this website</h1>
            <div id="pageContent">
                <div id="lists">
                    Templates and main styles used to make this website "look good":
                    <ul>
                        <li><a class="link" id="templates" href="/templates/">Templates</a></li>
                        <li><a class="link" id="styles" href="/styles/">Styles</a></li>
                    </ul>
                    <br />
                    This website uses/runs on:
                    <ul>
                        <li><a class="link" id="Ubuntu" href="https://ubuntu.com/" target="_blank">Ubuntu-based server</a></li>
                        <li><a class="link" id="nginx" href="https://nginx.org/en/index.html" target="_blank">nginx</a></li>
                        <li><a class="link" id="PHP" href="https://www.php.net/" target="_blank">PHP scripting language</a></li>
                        <li><a class="link" id="Cloudflare" href="https://www.cloudflare.com/" target="_blank">Cloudflare</a></li>
                    </ul>
                    <a href="/">> Back to the home page <</a>
                </div>
                <div>
                    <div id="descriptions"></div>
                </div>
            </div>
        </div>
    </body>















<?php

insertScript("/javascript/about.js");
insertScript("/javascript/showBody.js");
echo '
</html>';

?>
