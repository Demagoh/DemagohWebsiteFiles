<?php

function metaRedirectToPage($page) {
    echo '<meta http-equiv="refresh" content="0; url=https://' .(str_contains($_SERVER["HTTP_HOST"], $_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : str_replace("www.", "", $_SERVER["SERVER_NAME"])) .$page .'">';
}

function redirectToRemovePortNumberFromURL($page) {
    if (str_contains($_SERVER["HTTP_HOST"], $_SERVER["SERVER_PORT"])) {
        header("Location: https://". (str_contains($_SERVER["HTTP_HOST"], $_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : str_replace("www.", "", $_SERVER["SERVER_NAME"])) .$page);
    }
}

function htmlPageHead($headElementData) {
    echo '<head>
        <title>' .$headElementData["title"] .'</title>
        <link rel="icon" type="image/x-icon" href="' .$headElementData["icon"] .'">
        <link rel="stylesheet" href="' .$headElementData["stylesheet"] .'">
        <meta charset="UTF-8">
        <meta name="keywords" content="' .$headElementData["keywords"] .'">
        <meta name="description" content="' .$headElementData["description"] .'">
        <meta name="author" conent="Demagoh">
        <meta name="viewport" content="width: device-width, initial-scale: 1.0">
    </head>';
}

function htmlRedirectHead($destinationName, $destinationPage) {
    echo '<head>
        <title>Redirecting to ' .$destinationName .'...</title>
        <meta name="author" conent="Demagoh">
        <meta name="viewport" content="width: device-width, initial-scale: 1.0">
        ' .metaRedirectToPage($destinationPage) .'
        <style>
            body {
                background-color: #000;
            }
        </style>
    </head>';
}

if (str_replace("/", "", $_SERVER["PHP_SELF"]) == "functions.php") {
    htmlRedirectHead("the home page", "/");
}

?>
