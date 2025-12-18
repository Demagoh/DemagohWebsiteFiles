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
            <h1><img id="titleImage" src="/media/DemagohPFP.png" alt="Demagoh's PFP">Demagoh<span>.com</span></h1>
            <h2>> Who am I?</h2>
            I often times describe myself as "just another guy".<br />
            My hobbies include:
            <ul>
                <li>game development</li>
                <li>editing videos</li>
                <li>making bad websites</li>
                <li>trying to make music</li>
                <li>occasional CAD design</li>
                <li>overthinking (I love this one)</li>
            </ul>
            <br />
            <h2>> What do I do?</h2>
            At the moment I'm mostly focusing on finishing up some "unfinished business" that I cannot just skip, in my free time I also try to focus on my personal coding projects (none of which I'm willing to share at the moment), making a few top secret coding-related videos and trying to figure out how music musics.<br />
            You can read more about me on <a href="/aboutme/">this page</a>.<br />
            <br />
            <h2>> Where can you find me?</h2>
            I have quite a few social media accounts/pages, of which as of right now I'm willing to share the following:
            <ul>
                <li><a href="https://mas.to/@DemagohOfficial" target="_blank">Mastodon</a></li>
                <li><a href="https://github.com/demagoh" target="_blank">Github</a></li>
                <li><a href="https://www.reddit.com/user/Demagoh/" target="_blank">Reddit</a></li>
            </ul>
            <br />
            <br />
            <br />
            <br />
            <br />
            <h2>> About this website</h2>
            In my humble opinion, home pages are either very boring or way too cluttered.<br />
            Because of this I have decided to split my website into subpages (which I will call <a href="/pages/">pages</a> because I have free will or something like that).<br />
            If you'd like to know how I made this website you can visit the <a href="/about/">About page</a> for more info.<br />
            <br />
            <h2>> Which pages does this website have?</h2>
            This website has quite a few pages, of which the only actually visitable ones are:
            <ul>
                <li><a href="/gyped/">Gyped</a> (WIP)</li>
                <li><a href="/friends/">Friends</a> (WIP)</li>
                <li><a href="/pages/">Pages</a></li>
                <li><a href="/aboutme/">About me</a> (WIP)</li>
                <li><a href="/about/">About</a> (WIP)</li>
            </ul>
            <span style="white-space: pre;"> </span>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
