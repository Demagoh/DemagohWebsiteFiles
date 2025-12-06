<?php

require_once("../functions.php");
echo '<!DOCTYPE html><html>';

$headElementData = [
    "title" => "Page template",
    "icon" => "../media/pageTemplateIcon.png",
    "stylesheet" => "../styles/pageTemplateStyle.css",
    "keywords" => "template",
    "description" => "This page was created from a template. Please change the values in the headElementData array to the appropriate ones."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/templates/pageTemplate");

?>















<body>
    empty for now lol
</body>















<?php

echo '</html>';

?>
