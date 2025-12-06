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
    empty for now lol
</body>















<?php

echo '</html>';

?>
