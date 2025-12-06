<?php

require_once("functions.php");
echo '<!DOCTYPE html><html>';

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















<body>
    <div id="page">
        Pages:
        <ul>
            <li><a href="gyped/">Gyped</a></li>
            <li><a href="friends/">Friends</a></li>
            <li><a href="templates/">Templates</a></li>
        </ul>
        <br />
        My links:
        <ul>
            <li><a href="https://github.com/demagoh">Github</a></li>
            <li><a href="https://mas.to/@DemagohOfficial">Mastodon</a></li>
        </ul>
        <br />
        This website uses/runs on:
        <ul>
            <li><a href="https://ubuntu.com/">Ubuntu-based server</a></li>
            <li><a href="https://nginx.org/en/index.html">nginx</a></li>
            <li><a href="https://www.php.net/">PHP scripting language</a></li>
            <li><a href="https://www.cloudflare.com/en-gb/">Cloudflare</a></li>
        </ul>
    </div>
</body>















<?php

echo '</html>';

?>
