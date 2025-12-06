<?php

require_once("../functions.php");
echo '<!DOCTYPE html><html>';

$headElementData = [
    "title" => "Templates list",
    "icon" => "../media/pageTemplateIcon.png",
    "stylesheet" => "../styles/templatesPageStyle.css",
    "keywords" => "templates",
    "description" => "A page with links to the raw files of my page templates on my Github repo."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/templates/");

?>















<body>
    <div id="page">
        My page templates <span>(links to the raw files on my Github repo)</span>:
        <ul>
            <li><a class="link" href="https://raw.githubusercontent.com/Demagoh/DemagohWebsiteFiles/refs/heads/master/templates/pageTemplate.php">Page template</a></li>
            <li><a class="link" href="https://raw.githubusercontent.com/Demagoh/DemagohWebsiteFiles/refs/heads/master/templates/redirectPageTemplate.php">Redirect page template</a></li>
        </ul>
        <br />
        Demos of my page templates <span>(links to the files on the server)</span>:
        <ul>
            <li><a class="link" href="pageTemplate">Page template</a></li>
            <li><a class="link" href="redirectPageTemplate">Redirect page template</a></li>
        </ul>
        <br />
        <a href="/">Home</a>
    </div>
</body>















<?php

echo '</html>';

?>
