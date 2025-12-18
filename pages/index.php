<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "Pages",
    "icon" => "/media/DemagohPFP.png",
    "stylesheet" => "/styles/mainStyle.css",
    "keywords" => "pages",
    "description" => "The definition of what a page is on my website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/pages/");

?>
    <body style="visibility: hidden">
        <div id="page">
            <h1>Pages</h1>
            <h2>> What do I define as a page?</h2>
            A page (or a subpage <i>if you really want to call it that</i>) is just another set of HTML and CSS documents inside a seperate directory on this website.<br />
            Let's take the URL for this specific page for example. It is made by combining:<br />
            <ol>
                <li>the website's URL (which can be either <code>demagoh.com</code> or <code>www.demagoh.com</code>, doesn't really matter)</li>
                <li>the name of the directory, which in this case is <code>pages</code><br />
                    (yes, it is an actual directory, you can visit <a href="https://github.com/Demagoh/DemagohWebsiteFiles/tree/master/pages" target="_blank">this link</a> to the Github repo for this website if you don't believe me)</li>
            </ol>
            A page can <i>in theory *wink wink*</i> also be a file inside a directory, but I wouldn't tell you if a page like that existed, right? :P<br />
            <br />
            <h2>> Why do I define pages this way?</h2>
            Why not?<br />
            In my eyes, this "works", so I'm not complaining.<br />
            <br />
            <h2>> How does this navigation work behind the scenes and how can I make mine work this way too?</h2>
            Look, you can look this up, it's not some obscure thing you have to scour the entire web to find.<br />
            You can also just check exactly how I made this website <a href="/about/thehow">here</a>.<br />
            If you really want to know <i>this instant</i>, I just configured my nginx config to enable me to not need to specify an <code>index.html</code> or <code>index.php</code> file in the URL.<br />
            No, I'm not giving you my nginx config.<br />
            <br />
            <h2>> How did you make this website?</h2>
            I won't really go into too much detail on this specific page, but I have provided more insight on <a href="/about/thehow">this page</a>.<br />
            I have made the <a href="https://github.com/Demagoh/DemagohWebsiteFiles" target="_blank">Github repo</a> for this website public for those of you who want to see the PHP files that make up this website. It has almost* all of the files for this website on it.<br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <a href="/about/">> Back to the about page <</a><br />
            <a href="/">> Back to the home page <</a><br />
            <br />
            *I excluded a few directories and/or files which are listed in the <a href="https://github.com/Demagoh/DemagohWebsiteFiles/blob/master/.gitignore" target="_blank">.gitignore</a>, with the additional exception of the nginx configs, which <b>I will not share</b>.<br />
            <span style="white-space: pre;"> </span>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
