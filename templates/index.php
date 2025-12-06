<?php

require_once("../functions.php");
echo '<!DOCTYPE html><html>';

$headElementData = [
    "title" => "Page template",
    "icon" => "../media/pageTemplateIcon.png",
    "stylesheet" => "../media/pageTemplateStyle.css",
    "keywords" => "template",
    "description" => "This page was created from a template. Please change the values in the headElementData array to the appropriate ones."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/templates/");

?>















<body>
    <table>
        <tr>
            <td></td>
        </tr>
    </table>
</body>















<?php

echo '</html>';

?>
