<?php

require_once("../functions.php");
echo '<!DOCTYPE html><html>';

$headElementData = [
    "title" => "Gyped",
    "icon" => "../media/DemagohPFP.png",
    "stylesheet" => "../media/mainPageStyle.css",
    "keywords" => "Gyped",
    "description" => "A communication portal developed by Demagoh."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/gyped/redirect");

?>















<body>
    banananjam naš hroj, hvala bogu da je Erik pojedel banano
</body>















<?php

echo '</html>';

?>
