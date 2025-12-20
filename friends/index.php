<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "My friends",
    "icon" => "/media/friendsIcon.png",
    "stylesheet" => "/styles/friendsPageStyle.css",
    "keywords" => "friends",
    "description" => "A list of all my friends who are in possession of their own websites."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/friends/");

$friends = [
    [
        "name" => "DcruBro",
        "word" => "His",
        "website" => "https://dcrubro.com/",
        "domain" => "dcrubro.com",
        "description" => htmlentities(
"Since DcruBro didn't want to write his own description for my website (I'm really disappointed in him) I've been forced to write it by myself.

Since I'm not really a fan od doxxing people I won't really say much about what his actualy name is, what's his age, where he lives... You get it.

DcruBro is one of those programmer friends that when they are actively coding you can't really get to them, but as soon as YOU are doing something you're getting a new meme in the DM every 5-15 minutes.

He loves Pink Floyd, I'm still waiting for him to say he actually loves their album called The Division Bell.

Just like most of my IRL friends (and me) he'd probably be in a mental hospital by now if he did anything other than CS. The things he does have you questioning how he's not been diagnosed with some mental illness or something. He's pretty chill though, so I don't think he should go to a mental hospital.

If you get the chance to meet him make sure to tell him how much you like Pink Floyd, talk to him about Linux, servers, idk pretty much anything CS related and try to have as much fun while you still can.



Ah and also, don't forget his infamous quote: \"It's not a pride flag, it's a color spectrum.\""),
        "randomFact" => "He would probably die for <i>Shine On You Crazy Diamond (Pts. 1-9)</i> by Pink Floyd.

Edit: He has since confirmed this fact to be true.",
        "author" => "Demagoh",
        "date" => "20. 12. 2025"
    ],
    [
        "name" => "Domen Podgoršek",
        "word" => "His",
        "website" => "https://domen.podlipec.si/",
        "domain" => "domen.podlipec.si",
        "description" => htmlentities(
"Hi.

I'm still wating for Domen to send me the description he wrote for himself.

Best wishes,
Demagoh"),
        "randomFact" => "Domen's an Apache user",
        "author" => "Domen Podgoršek",
        "date" => "TBD"
    ]
];

shuffle($friends);

?>
    <body style="visibility: hidden">
        <div id="page">
            <h1>My friends</h1>
            Here's a randomly sorted list of all my friends that also have their own place on the internet!<br />
<?php

foreach ($friends as $friend) {
    $description = '            <div class="description">';
    $description .= '
                <table>
                    <caption>' .$friend["name"] .'</caption>
                    <tr>';
    $description .= '
                        <td>
                            <div>
                                <span class="underline">' .$friend["word"] .' website</span>: <a href="' .$friend["website"] .'" target="_blank">' .$friend["domain"] . '</a><br />
                                <span style="white-space: pre-wrap;"><span class="underline">Demagoh\'s random fact</span>: ' .$friend["randomFact"] .'</span><br />
                                <br />
                            </div>
                            <hr />
                            <div>
                                <br />
                                <span class="underline">Description written by</span>: ' .$friend["author"] .'<br />
                                <span class="underline">Date</span>: ' .$friend["date"] .'
                            </div>
                        </td>';
    $description .= '
                        <td style="border-left: clamp(0.15rem, 0.3vh, 0.3rem) solid white; white-space: pre-wrap;">
' .$friend["description"] .'
                        </td>';
    $description .= '
                    </tr>
                </table>
            </div>
';
    echo $description;
}

?>
            <a href="/">> Back to the home page <</a><br />
            <span style="white-space: pre;"> </span>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
