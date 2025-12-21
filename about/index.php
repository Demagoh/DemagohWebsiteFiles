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
            <h1>About this website <span>(helo :o)</span></h1>
            <div id="lists">
                <h2>> Source files</h2>
                The source files for this website (with the exception of the nginx config and a few specific pages) can be found on this website's <a href="https://github.com/Demagoh/DemagohWebsiteFiles" target="_blank">Github repo</a>.<br />
                You can also directly access the two page templates and the only (currently noteworthy) two style files here:<br />
                <ul>
                    <li><a class="link" id="templates" href="/templates/">Templates</a></li>
                    <li><a class="link" id="styles" href="/styles/">Styles</a></li>
                    <li><a class="link" id="pages" href="/pages/">Pages</a></li>
                </ul>
                <br />
                <h2>> Software and services used to create/run this website</h2>
                For this website I used everything that's listed below. You can hover over the links (only on PC, on other platforms I don't know what will happen) to the websites to see what I have to say about each one.<br />
                <ul>
                    <li><a class="link" id="Ubuntu" href="https://ubuntu.com/" target="_blank">Ubuntu-based server</a></li>
                    <li><a class="link" id="nginx" href="https://nginx.org/en/index.html" target="_blank">nginx</a></li>
                    <li><a class="link" id="PHP" href="https://www.php.net/" target="_blank">PHP scripting language</a></li>
                    <li><a class="link" id="Cloudflare" href="https://www.cloudflare.com/" target="_blank">Cloudflare</a></li>
                </ul>
                <br />
                <h2>> How I made this website</h2>
                You can read about how I made this website on the <a href="/about/thehow">The how</a> page.<br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <a href="/">> Back to the home page <</a>
            </div>
            <div>
                <div id="descriptions"></div>
            </div>
        </div>
    </body>
<?php

insertScript("/javascript/about.js");
insertScript("/javascript/showBody.js");
echo '
</html>';

?>
