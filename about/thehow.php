<?php

require_once("../functions.php");
echo '<!DOCTYPE html>
<html>';

$headElementData = [
    "title" => "The how",
    "icon" => "/media/hiddenPageIcon.png",
    "stylesheet" => "/styles/thehowPageStyle.css",
    "keywords" => "the how",
    "description" => "A somewhat accurate description of how I made my website."
];

htmlPageHead($headElementData);

redirectToRemovePortNumberFromURL("/about/thehow");

?>
    <body style="visibility: hidden">
        <div id="page">
            <h1>The how behind this website</h1>
            <h2>> What is this page for?</h2>
            First of all, this is a stupid question to ask if you followed one of the links I put on one of the other pages on this website, because you had to <i>choose</i> to come to this page, I didn't force you to open it.<br />
            If you actually wanted to visit this page or if somebody else sent you here, welcome! On this page I'll show (well, kind of) how I created this website.<br />
            <br />
            <h2>> Chapters</h2>
            <ol class="level1OL">
                <li>
                    <a href="#serverSetup">Setting up the server</a>
                    <ol class="level2OL">
                        <li>
                            <a href="#serverSetupPrerequisites">Prerequisites</a>
                            <ol class="level3OL">
                                <li><a href="#serverSetupComputer">The computer</a></li>
                                <li><a href="#serverSetupInternetConnection">The internet connection</a></li>
                                <li><a href="#serverSetupUSBFlashDrive">The USB flash drive</a></li>
                            </ol>
                        </li>
                        <li><a href="#serverSetupInstallingOS">Installing the OS</a></li>
                    </ol>
                </li>
                <li><a href="#portForwarding">Setting up port forwarding (for hosting at home)</a></li>
                <li><a href="#nginxSetupPt1">Setting up nginx (part 1)</a></li>
                <li><a href="#domain">Getting a domain</a></li>
                <li><a href="#CloudflareProxies">Setting up Cloudflare proxies</a></li>
                <li><a href="#SSLCertificate">Creating an SSL certificate</a></li>
                <li><a href="#nginxSetup2">Setting up nginx (part 2)</a></li>
                <li><a href="#homePagePHPSetup">Setting up the home page PHP</a></li>
                <li><a href="#creatingPHPFunctions">Creating PHP functions for more "dynamic" or "modular" page creation</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
            </ol>
            <br />
            <br />
            <br />
            <h2 id="serverSetup">> Setting up the server</h2>
            <h3 id="serverSetupPrerequisites">> Prerequisites</h3>
            For the server I needed three things:
            <ul>
                <li>a computer, dedicated server or something similar</li>
                <li>an internet connection</li>
                <li>a USB flash drive that was set up with a server OS ISO image</li>
            </ul>
            <h4 id="serverSetupComputer">The computer</h3>
            For the host computer I use an old family computer that nobody needed anymore. In my case this was an old modified prebuilt from Medion with the following specs:<br />
            <ul>
                <li><b>CPU</b>: Intel i5-2400, clocked at 3.4 GHz</li>
                <li><b>RAM</b>: DDR3 8GB</li>
                <li><b>Motherboard</b>: MSI MS-7680</li>
            </ul>
            You can use pretty much anything you can get your hands on, from laptops and old prebuilts to Raspberry Pis and dedicated servers.<br />
            One thing you should note is the power consumption of the system, because if you want the server to run for long periods of time at once it could consume more power than you might expect, depending on the hardware used and the load that's put on the system. I am no expert when it comes to this specific thing, so I'd advise you to do your own research if you'd like to be mindful of your power consumption.<br />
            <br />
            <h4 id="serverSetupInternetConnection">The internet connection</h3>
            I use a normal (if you know what I mean) RJ-45 terminated Ethernet cable to connect my server to the rest of my network and to the router that's connected to the internet.<br />
            You can use either a physical Ethernet connection using a copper RJ-45 terminated Ethernet cable, a fiber-optic cable or just a standard Wi-Fi connection. Note that a physical connection will in most cases not only be faster, but also more reliable and easier to set up.<br />
            If you want to use Wi-Fi as your main way to connect the server to the internet I'd advise that you do your own research on how exactly you should go about setting it up, as based on your environment, hardware limitations and other possible factors you might want to consider using a physical connection instead.<br />
            <br />
            <h4 id="serverSetupUSBFlashDrive">The USB flash drive</h3>
            I used a normal USB 8GB flash drive that I flashed with an ISO image of <a href="https://ubuntu.com/server" target="_blank">Ubuntu</a>.<br />
            To flash the drive I used <a href="https://rufus.ie/en/" target="_blank">Rufus</a>, a Windows program for flashing ISO images onto USB flash drives, as at the time I was still on Windows.<br />
            You could also use <a href="https://www.ventoy.net/en/index.html" target="_blank">Ventoy</a> to be able to have multiple different ISOs on the flash drive without needing to flash the ISOs (do your own research if you're curious).<br />
            For the USB flash drive, make sure that you use one that is at the very least 4GB in size. Back up anything you might have on it before you flash an ISO image on it.<br />
            <br />
            <h3 id="serverSetupInstallingOS">> Installing the OS</h3>
            Depending on what OS you chose to install on your server you should follow the appropriate instructions or tutorials for it. Since I do not use the Windows Server I will be unable to give you instructions for how to install this specific OS.<br />
            I will also not be sharing how to set up the Ubuntu Server because I don't remember what the proces is like, I don't feel like repeating it and if it changed I would have to update the instructions.<br />
            With the OS installed you should also make sure that the OS is up to date, that the firewall (if you have one) is set up so that it allows HTTP and HTTPS traffic in and out of the server and so on.<br />
            <br />
            <br />
            <br />
            <h2 id="portForwarding">> Setting up port forwarding (for hosting at home)</h2>
            <br />
            <br />
            <br />
            <h2 id="nginxSetupPt1">> Setting up nginx (part 1)</h2>
            <br />
            <br />
            <br />
            <h2 id="domain">> Getting a domain</h2>
            <br />
            <br />
            <br />
            <h2 id="CloudflareProxies">> Setting up Cloudflare proxies</h2>
            <br />
            <br />
            <br />
            <h2 id="SSLCertificate">> Creating an SSL certificate</h2>
            <br />
            <br />
            <br />
            <h2 id="nginxSetup2">> Setting up nginx (part 2)</h2>
            <br />
            <br />
            <br />
            <h2 id="homePagePHPSetup">> Setting up the home page PHP</h2>
            <br />
            <br />
            <br />
            <h2 id="creatingPHPFunctions">> Creating PHP functions for more "dynamic" or "modular" page creation</h2>
            <br />
            <br />
            <br />
            <h2 id="conclusion">> Conclusion</h2>
            <br />
            <br />
            <br />
            <br />
            <br />
            <a href="/about/">> Back to the about page <</a><br />
            <a href="/">> Back to the home page <</a>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
