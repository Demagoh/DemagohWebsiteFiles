<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "About me",
    "icon" => "/media/DemagohPFP.png",
    "stylesheet" => "/styles/aboutmePageStyle.css",
    "keywords" => "aboutme",
    "description" => "Who am i?"
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/aboutme/");

?>
    <body style="visibility: hidden">
        <div id="page">
            <h1>About me</h1>
            Hi, I'm <b>Demagoh</b>!<br />
            Since I'm not praticularly good at talking about myself (it's probably a combination of me not wanting too much about myself and being more introverted than a fridge) I don't really know how to do this kind of thing, so I'll just throw things out and hope they make sense.<br />
            <br />
            I often describe myself as <i>"just another guy"</i>. I don't like to think too highly of myself because I am very much aware that there are many better, smarter and more pleasant to be around people roaming this planet.<br />
            If you know me enough from interacting with me 1 on 1 you know that I don't really like sharing too much about myself. I like privacy and keeping people out of the loop whenever I can.<br />
            <br />
            I've always been an <b>introvert</b> and always will be. While I've been working on being more social when I'm around people I still get pretty tired pretty quickly.<br />
            Often times people that do know me tell me that something I've done "is really cool", "very good" and maybe even "genius" and I find it really hard to believe them. In my life I've always suffered from <b>impostorism</b> and (at least a form of) maladaptive <b>perfectionism</b>, which paired with always trying to compare my own accomplishments with other people's accomplishments always leads to me thinking that my work is "nothing out of the ordinary" and "not special at all". <span style="color: #222">Now that I think about it, I might have OCPD as well.</span><br />
            I also like to think that people tell me that what I've created is "great" just to make me not feel bad because they actually think it's pretty bad or not noteworthy at all.<br />
            <br />
            Throughout my life I've found that I like doing quite a few things:<br />
            <ul>
                <li>
                    <b>Game development and programming in general</b> have always been the closest to my heart.<br />
                    I've always been a pretty big fan of <b>Minecraft</b>, I've actually been playing this game for most of my life, ever since I was 6 years old, and without getting into too much detail it was the very thing that got the idea of being a programmer into my head.<br />
                    My parents signed me up for IRL programming courses at which I seem to have excelled from the very beginning considering I was always way ahead of the rest of the group, but I like to think that that was nothing more than just luck.<br />
                    <br />
                    Game development has always been the thing I've preferred over just normal programming. I find that getting the opportunity to make games I myself would play, getting to learn new things throughout the process and the immense feeling of accomplishment I get from finishing a game tickle my dopamine receptors just the right way, while normal programming doesn't.<br />
                    This is why I invited 4 of my friends to work on a game together for the GMTK 2025 game jam. We started our own group called <a href="https://sierrafive.net/" target="_blank">SierraFive</a> where two of my friends are now working on a game engine.<br />
                    <br />
                </li>
                <li>
                    <b>Editing videos</b> (and also recording and planning them) is something I like to do in my free time. While editing images and just overall design are also things I like to do, expressing things with motion and giving people the option to not have to read as much are definitely my passion alongside the almost inhumane need I have to be a helpful person.<br />
                    While I do prefer to work on videos (and pretty much everything I do) completely on my own because I don't like relying on people if I don't have to, I do still like to work on things I didn't help to plan out if I'm given an actual plan for what the end product should look like.<br />
                    <br />
                    Before anyone asks, unless you're a really good friend of mine I'm most probably not going to want to help you out with creating your video(s), so I'd advise that you don't waste neither my nor your time and just try to find somebody else to help out. There are many other fish in the pond, if you can't get this one you'll surely be able to get some other one.<br />
                    <br />
                </li>
                <li>
                    <b>Making bad websites</b> is something I adore more than I'd like to admit.<br />
                    The process of trying to write HTML, CSS and JavaScript that work together in the worst possible way while still being somewhat usable is just the thing I need when I don't feel like working on anything else.<br />
                    If it weren't for this love for making (in my opinion) websites worse than most websites from the year 2003 I probably wouldn't have even gone and made this website that I'm writing this on right now!<br />
                    <br />
                </li>
                <li>
                    Lately I've been <b>trying to make my own music</b>. I don't really know why, I don't really know how I even came to have this idea.<br />
                    While I haven't made anything I'd want to share quite yet, I believe that <i>eventually</i> I will have something I'd be willing to share.<br />
                    <br />
                </li>
                <li>
                    Occasionally I also dabble in <b>CAD designing</b>. It's something I learned way back when I was starting out with game development with creating my own 3D models for things and that has since progressed into more technical designing of different 3D printed mechanisms.<br />
                    <br />
                </li>
                <li>
                    I love <b>overthinking</b> so much you can't even imagine (that's because I can hardly imagine, and I'd say my imagination isn't half bad).<br />
                    There's just something that seems so <i>right</i> about spending ungodly amounts of time thinking about life, people, the world and other things. And the best thing is that I'm <b>never wrong</b>!<br />
                    <br />
                </li>
                <li>
                    There are still many more different things I like to do that I haven't listed here for privacy-related reasons.<br />
                    <br />
                </li>
            </ul>
            At the time of writing this I consider myself an agnostic (atheist). I'm saying this because you never know when life will <b>make</b> you change your beliefs about something or someone. I'm just trying to be cautious.<br />
            <br /> 
            I don't think I'm comfortable with sharing any more at this time, so I'll only list the socials that I have that I'm willing to share right now and that will be it:<br />
            <ul>
                <li><a rel="me" href="https://mas.to/@DemagohOfficial" target="_blank">Mastodon</a></li>
                <li><a href="https://github.com/demagoh" target="_blank">Github</a></li>
                <li><a href="https://www.reddit.com/user/Demagoh/" target="_blank">Reddit</a></li>
            </ul>
            <br />
            Written by Demagoh<br />
            on 21. 12. 2025
            <br />
            <br />
            <a href="/">> Back to the home page <</a>
            <br /><span style="white-space: pre;"> </span>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
