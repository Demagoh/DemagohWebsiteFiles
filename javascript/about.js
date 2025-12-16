const descriptions = document.getElementById("descriptions");
const links = document.getElementsByClassName("link");
let content = []
content["Ubuntu"] = '<b>Ubuntu</b> is a GNU/Linux distribution based on <a href="https://www.debian.org/" target="_blank">Debian</a>. Its desktop version is one of the most popular Linux distributions, while its server version makes it easy to set up and run services, like my website.<br /><br /><img class="tableImage" src="/media/UbuntuServerDownloadPage7_12_2025.png" alt="A screenshot of this software\'s website taken on the 7th of December, 2025." />';
content["nginx"] = '<b>nginx</b> (read as "engine x") is many different types of servers in one. It\'s what I use to serve HTML (or should I say PHP?), CSS, Javascript and other files to your browser for it to display them to you.<br />Another such server that I could have used is <a href="https://en.wikipedia.org/wiki/Apache_HTTP_Server" target="_blank">Apache</a>. Thankfully though, I don\'t hate myself enough to actually use it, so I went with the less resource intensive option :)<br /><br /><img class="tableImage" src="/media/nginxDocumentationPage7_12_2025.png" alt="A screenshot of this software\'s website taken on the 7th of December, 2025." />';
content["PHP"] = '<b>PHP</b> is a general-purpose scripting language aimed more towards web development than anything else. It\'s a so called "Hypertext Preprocessor" because it puts together an HTML file which can then later be sent to your browser and displayed on your screen. It is also the language behind <a href="https://wordpress.com/" target="_blank">Wordpress</a>, which as of December 2024 was being used by a little over 22% of the web\'s top 1 million websites (according to Wikipedia).<br /><br /><img class="tableImage" src="/media/PHPMainPage7_12_2025.png" alt="A screenshot of this software\'s website taken on the 7th of December, 2025." />';
content["Cloudflare"] = '<b>Cloudflare</b> is an American company which provides a few too many different internet servies for me to list here. For my website I use them for the domain name (I was lazy OK?), a reverse proxy to the server that hosts the website and a few other minor things.<br /><br /><img class="tableImage" src="/media/CloudflareMainPage7_12_2025.png" target="_blank" alt="A screenshot of this software\'s website taken on the 7th of December, 2025." />';
content["templates"] = "";
content["styles"] = "";

const revealDefinition = [
    { opacity: "0" },
    { opacity: "1" }
];

const concealDefinition = [
    { opacity: "1" },
    { opacity: "0" }
];

const timing = {
    duration: 200,
    iterations: 1,
    fill: "forwards",
    easing: "ease",
    delay: 100
};

let currentlyShowing = null;
let reversed = false;
let hidden = true;

let concealAnimationStart = new Date() / 1;

for (let link of links) {
    link.addEventListener("mouseover", function (e) {
        e.preventDefault();
        if (link.id === "templates" || link.id === "styles") {
            return;
        }
        for (let animation of document.getAnimations()) {
            animation.cancel();
        }
        currentlyShowing = link.id;
        descriptions.innerHTML = content[link.id];
        if (reversed) {
            timing.duration = 200;
            timing.delay = 100;
            reversed = false;
        }
        hidden = false;
        descriptions.animate(revealDefinition, timing).play();
    });

    link.addEventListener("mouseout", function (e) {
        e.preventDefault();
        if (currentlyShowing === link.id) {
            currentlyShowing = null;
            timing.duration = 1000;
            timing.delay = 6000;
            concealAnimationStart = new Date() / 1;
            descriptions.animate(concealDefinition, timing)
            reversed = true;
        }
    });
}

setInterval(function() {
    if (currentlyShowing === null && !hidden && (new Date()/1)-concealAnimationStart > timing.duration+timing.delay) {
        hidden = true;
        descriptions.innerHTML = "";
    }
}, 10);