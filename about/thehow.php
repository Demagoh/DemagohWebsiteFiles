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
            If you actually wanted to visit this page or if somebody else sent you here, welcome! On this page I'll show (well, kind of) how I created this website. I'm hoping for this to be more of a showcase of what has to be done when rather than exactly what you should do, because at the end of the day, everybody has different hardware, software and experience doing things like this and I really don't want to write an actual guide for every single kind of situation you could find yourself in.<br />
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
                <li>
                    <a href="#nginxSetupPt1">Setting up nginx (part 1)</a>
                    <ol class="level2OL">
                        <li><a href="#nginxSetupIntroduction">Introduction</a></li>
                        <li><a href="#nginxSetupInstallingnginx">Installing nginx</a></li>
                        <li>
                            <a href="#nginxSetupBasicPage">Putting together a basic page</a>
                            <ol class="level3OL">
                                <li><a href="#nginxSetupInstallingPHP">Installing PHP</a></li>
                                <li><a href="#nginxSetupCreatingAPHPFile">Creating a PHP file</a></li>
                            </ol>
                        </li>
                        <li><a href="#nginxSetupBasicHTTPConfiguration">Creating a basic HTTP configuration</a></li>
                    </ol>
                </li>
                <li><a href="#domain">Getting a domain</a></li>
                <li><a href="#CloudflareProxies">Setting up Cloudflare proxies</a></li>
                <li><a href="#SSLCertificate">Creating an SSL certificate</a></li>
                <li><a href="#nginxSetup2">Setting up nginx (part 2)</a></li>
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
            <br />
            For the USB flash drive, make sure that you use one that is at the very least 4GB in size. Back up anything you might have on it before you flash an ISO image on it.<br />
            <br />
            <h3 id="serverSetupInstallingOS">> Installing the OS</h3>
            Depending on what OS you chose to install on your server you should follow the appropriate instructions or tutorials for it. Since I do not use the Windows Server I will be unable to give you instructions for how to install this specific OS.<br />
            I will also not be sharing how to set up the Ubuntu Server because I don't remember what the proces is like, I don't feel like repeating it and if it changed I would have to update the instructions.<br />
            <br />
            With the OS installed you should also make sure that the OS is up to date, that the firewall (if you have one) is set up so that it allows HTTP and HTTPS traffic in and out of the server and so on.<br />
            <br />
            <br />
            <br />
            <h2 id="portForwarding">> Setting up port forwarding (for hosting at home)</h2>
            Since I'm hosting my website on my own hardware I had to enable port forwarding on the router that's connected to the internet on specific ports that <a href="https://developers.cloudflare.com/fundamentals/reference/network-ports/#network-ports-compatible-with-cloudflares-proxy" target="_blank">Cloudflare supports</a> for the HTTPS protocol. This is because it is generally a bad idea to port forward ports 80 (the default HTTP port) and 443 (the default HTTPS) port for security related reasons (you can always do your own research if you want).<br />
            If you're using a third party provider as the host for your website you don't have to do anything, but you might have some issues with following what I did later on if you do not have direct "administrative" access to the server which hosts your website (if you're using something like <a href="https://www.wix.com/" target="_blank">Wix</a>, <a href="https://www.squarespace.com/" target="_blank">Squarespace</a> and other such services commonly advertised on YouTube for example).<br />
            <br />
            However, if like me you're using your own hardware, either in a specific physical location or your residence, you'll have to go and see how to enable port forwarding on your outside, internet connected router, which your ISP provided when they hooked up your the internet connection. You will need direct access to the router itself, so if you do not have it you'll have to <i>find a legal/ethical way to get it</i>.<br />
            I recommend you also use a port that <a href="https://developers.cloudflare.com/fundamentals/reference/network-ports/#network-ports-compatible-with-cloudflares-proxy" target="_blank">Cloudflare supports</a>, as it will almost definitely work with every router you could have.
            <br />
            <br />
            <br />
            <h2 id="nginxSetupPt1">> Setting up nginx (part 1)</h2>
            <h3 id="nginxSetupIntroduction">> Introduction</h3>
            nginx is a web server (and many other things), that I use to serve PHP, CSS, JS and other files to your browser for it to display.<br />
            I won't go into too much detail on how exactly things in its configuration work, but we create an example of what you could use for you to more easily be able to tell what an nginx config could look like.<br />
            Without much further ado, here's everything we'll be going through in this part of the nginx setup:<br />
            <ul>
                <li>installing nginx</li>
                <li>putting together a basic page</li>
                <li>creating a basic HTTP configuration</li>
            </ul>
            <br />
            <h3 id="nginxSetupInstallingnginx">> Installing nginx</h3>
            Depending on the host (OS on the machine you're using for hosting the server) you'll have to follow specific instructions in order to install nginx.<br />
            For Debian-based Linux distributions it should go something like so:<br />
            <br />
            In a terminal type the following:<br />
            <div class="wideCode">
                sudo apt update<br />
                sudo apt upgrade<br />
                sudo apt install nginx
            </div>
            nginx should now be installed on your system. You can verify this by typing:<br />
            <div class="wideCode">
                systemctl status nginx.service
            </div>
            If the output you get is anything like the one I got down below...<br />
            <div class="wideCode"><pre>
     Loaded: loaded (/usr/lib/systemd/system/nginx.service; <span style="color: #12b812">enabled</span>; preset: <span style="color: #12b812">enabled</span>)
     Active: <span style="color: #12b812">active (running)</span> since Sat 2025-12-20 15:30:02 CET; 1h 10min ago
       Docs: man:nginx(8)
    Process: 30872 ExecStartPre=/usr/sbin/nginx -t -q -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
    Process: 30873 ExecStart=/usr/sbin/nginx -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
   Main PID: 30875 (nginx)
      Tasks: 5 (limit: 9412)
     Memory: 7.1M (peak: 8.0M)
        CPU: 408ms
     CGroup: /system.slice/nginx.service</pre>
            </div>
            ... then you're all good to go! Maybe also consider enabling the service so that it starts on system startup (if it isn't already):<br />
            <div class="wideCode">
                sudo systemctl enable nginx.service
            </div>
            <br />
            That's it for the Debian-based Linux distributions. If you're using a different Linux distribution you can still use the <code>systemctl</code> commands, just the installing part might not be the same.<br />
            <br />
            <h3 id="nginxSetupBasicPage">> Putting together a basic page</h3>
            Since I'm using PHP files instead of HTML files I had to install PHP on my server.<br />
            I'm going to assume that you're also planning on using PHP (trust me, you'll come to like it in no time) and just move on to its installation.<br />
            <br />
            <h4 id="nginxSetupInstallingPHP">Installing PHP</h4>
            You'll have to do the following to install PHP:<br />
            <br />
            We'll be installing a <code>PHP-FPM</code> package, make sure you <b>DO NOT</b> install the <code>PHP</code> package, as that will install Apache's HTTP server and its httpd service, which will conflict with nginx (pretty bad if you ask me).<br />
            In a terminal type the following command and install the PHP-FPM tool (make sure to check which version of PHP you want to install and replace the <code>8.3</code> in the package name below with the appropriate version):<br />
            <div class="wideCode">
                sudo apt install php8.3-fpm
            </div>
            Check if the package has been installed successfully by running (again replace the <code>8.3</code> in the service name with the appropriate version):<br />
            <div class="wideCode">
                systemctl status php8.3-fpm.service
            </div>
            If the output is anything like the one I got below...<br />
            <div class="wideCode"><pre>
     Loaded: loaded (/usr/lib/systemd/system/php8.3-fpm.service; <span style="color: #12b812">enabled</span>; preset: <span style="color: #12b812">enabled</span>)
     Active: <span style="color: #12b812">active (running)</span> since Sat 2025-12-20 11:29:58 CET; 5h 43min ago
       Docs: man:php-fpm8.3(8)
    Process: 27092 ExecStartPost=/usr/lib/php/php-fpm-socket-helper install /run/php/php-fpm.sock /etc/php/8.3/fpm/pool.d/www.conf 83 (code=exited, status=0/SUCCESS)
   Main PID: 27088 (php-fpm8.3)
     Status: "Processes active: 0, idle: 2, Requests: 204, slow: 0, Traffic: 0req/sec"
      Tasks: 3 (limit: 9412)
     Memory: 9.1M (peak: 9.4M)
        CPU: 1.135s
     CGroup: /system.slice/php8.3-fpm.service</pre></div>
            ... then you're all good to go!<br />
            <br />
            <h4 id="nginxSetupCreatingAPHPFile">Creating a PHP file</h4>
            With PHP installed we can move on to creating a basic page to display when we visit our website:<br />
            <br />
            First we'll create a directory on our server to put all our website's files (with the exception of the nginx configs which we'll create later).<br />
            On my server (which is Linux-based) I have all of these files stored in a new directory I created called <code>/data/www/</code>. To create it yourself, run the following commands (yes, you could do this more efficiently, leave me alone):<br />
            <div class="wideCode">
                cd /<br />
                mkdir data<br />
                cd data<br />
                mkdir www<br />
                cd /<br />
                chmod -R 770 data
            </div>
            With this we created the new directory and gave everybody except for guest users full permissions for everything inside it.<br />
            <br />
            Now create a file named <code>index.php</code> in the directory you just created. This will be the default page that nginx will serve to the visitors of our website.<br />
            Into it paste the following:
            <div class="wideCode pre"><pre><?php echo htmlentities('<!DOCTYPE html>
<html>
    <head>
        <title>My cool page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width: device-width, initial-scale: 1.0">
    </head>
    <body>
        Page content goes here :)
    </body>
</html>');?></pre></div>
            Save the file and continue on to creating a basic HTTP config.<br />
            <br />
            <h3 id="nginxSetupBasicHTTPConfiguration">> Creating a basic HTTP configuration</h3>
            To test if our nginx works we'll need to create a new nginx config, which is set up to work over HTTP.<br />
            On Linux nginx configs are saved in the <code>/etc/nginx/sites-available/</code> directory, while the actual enabled ones are linked to the <code>/etc/nginx/sites-enabled/</code> directory using symbolic links.<br />
            First we'll clear out both directories of any files (usually there's already a <code>default</code> config that's already enabled, we won't be needing it):<br />
            <div class="wideCode">
                cd /etc/nginx/sites-enabled/<br />
                sudo rm -f *<br />
                cd /etc/nginx/sites-available/<br />
                sudo rm -f *<br />
            </div>
            Then we'll create a new file without any extensions (name it whatever you want, you don't need any extensions):<br />
            <div class="wideCode">
                sudo nano mysite
            </div>
            Now that we have opened <code>nano</code> we can start writing the config. First we'll put in a <code>server</code> block:<br />
            <div class="wideCode"><pre>
server {
    
}</pre></div>
            We'll follow it up with two <code>listen</code> directives, the first for IPv4 and the second for IPv4 addresses:<br />
            <div class="wideCode"><pre>
server {
    listen 80 default_server;
    listen [::]:80 default_server;
}</pre></div>
            We'll follow it with a <code>root</code> directive, which will tell nginx where to go looking for the website files, and an <code>index</code> directive, which will tell the server how the default HTML and/or PHP files are named (it will open these by default when somebody visits our website):<br />
            <div class="wideCode"><pre>
server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /data/www; # Put the directory you used if you didn't create a /data/www/ directory

    index index.html index.php; # You can remove the index.html option if you only plan on using index.php files (and vice versa)
}</pre></div>
            Before we finish up this config we'll also add two <code>location</code> blocks. These will handle how nginx handles different URLs as visitors navigate to them:<br />
            <div class="wideCode"><pre>
server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /data/www; # Put the directory you used if you didn't create a /data/www/ directory

    index index.html index.php; # You can remove the index.html option if you only plan on using index.php files (and vice versa)

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ { # This block handles PHP files, you SHOULD be able to remove it if you're not using PHP
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock; # Make sure to replace the 8.3 in the package name with the appropriate version
    }
}</pre></div>
            And finally we'll add the <code>server_name</code> directive. The name of the server is not really all that important, if you want to can always look up why you'd want to put a specific name here.<br />
            <div class="wideCode"><pre>
server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /data/www; # Put the directory you used if you didn't create a /data/www/ directory

    index index.html index.php; # You can remove the index.html option if you only plan on using index.php files (and vice versa)

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ { # This block handles PHP files, you SHOULD be able to remove it if you're not using PHP
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock; # Make sure to replace the 8.3 in the package name with the appropriate version
    }

    server_name _; # Put whatever you want here
}</pre></div>
            With that our first basic nginx config is finished. Save it by pressing <code>CTRL + S</code> and exit <code>nano</code> by pressing <code>CTRL + X</code>.<br />
            Now we'll link the config file to the <code>/etc/nginx/sites-enabled/</code> directory using a symbolic link. Make sure to replace the name of the config in the command below with whatever you named your config:<br />
            <div class="wideCode">
                sudo ln -s /etc/nginx/sites-available/mysite /etc/nginx/sites-enabled/mysite
            </div>
            <b>It is important that you specify the full path to the nginx config, as otherwise the link could be created incorrectly and not work as it should.</b><br />
            <br />
            With the config created and linked to the <code>/etc/nginx/sites-enabled/</code> directory we can move on to getting nginx to actually display the page we created in the <code>/data/www/</code> directory.<br />
            To do this we'll run the following command to reload nginx:<br />
            <div class="wideCode">
                sudo nginx -s reload
            </div>
            If you don't get any errors the reload should've worked. Note that you could also either restart the server or restart the nginx service using one of these two commands:<br />
            <div class="wideCode">
                sudo reboot<br />
                sudo systemctl restart nginx.service
            </div>
            You can also make sure that nginx is still active by running the following command:<br />
            <div class="wideCode">
                systemctl status nginx.service
            </div>
            If you get a similar output to the one you got when checking if nginx was installed correctly then you're all good to go!<br />
            Now you can go to your browser and type in the local IP of your server (if you don't know how to find it go look it up, I don't feel like explaining this as well).<br />
            If you don't get any error codes in your browser and the page displays as it should then you have successfully set up nginx (for now). Once you set up a domain poeple you'll make it so that people outside your local network will be able to access your website without needing to know your public IP address via the HTTP protocol!<br />
            Don't worry, in the next time we're going to be doing something involving nginx configs we'll make it so that your website will be accessible only through the HTTPS protocol.<br />
            <br />
            <br />
            <br />
            <h2 id="domain">> Getting a domain</h2>
            I registered my domain with Cloudflare. I could've used another domain provider if I wanted but chose not to.<br />
            If you already bought a domain or are planning to buy one from a domain provider that's not Cloudflare you'll have to look up how to add your domain to your Cloudflare account in order to be able to then set up proxies in Cloudflare's DNS.<br />
            If you already bought a domain or are planning to buy one from Cloudflare then you won't need to do anything do add the domain to your Cloudflare account as it will already be linked to it.<br />
            <br />
            <br />
            <br />
            <h2 id="CloudflareProxies">> Setting up Cloudflare proxies</h2>
            Once you have your domain added to your Cloudflare account open it and then proceed to <code>DNS > Records</code>.<br />
            Here you'll add an <code>A</code> record with your domain name as its name, the public IP address of the network to which you have connected your server (you can check this IP by googling "what's my ip" when you're on the same network as the server) and you'll enable the proxy.<br />
            I personally have added another <code>A</code> record with my domain name (demagoh.com) with the <code>www</code> subdomain (so the full domain is now <code>www.demagoh.com</code>), which is also proxied.<br />
            If you have a dynamic public IP you're going to want to set up a script on your server to automatically update the Cloudflare DNS records to the new public IP your internet service provider (ISP) provided you with. Since I'm too lazy to go into detail on how this works I'll just ask you to follow <a href="https://linuxconfig.org/automate-dynamic-ip-updates-for-your-domain-with-cloudflare-and-bash-script" target="_blank">this guide</a> to make this script. I think it explains it pretty well.<br />
            <br />
            Once you're done messing around with your DNS records you can also create an <code>Origin Rule</code> in <code>Rules > Overview</code> which will redirect all the traffic to your domain to the port on your outside router that you set in the <a href="#portForwarding">Setting up port forwarding (for hosting at home)</a> chapter. Note that you won't have to do this if you successfully port forwarded ports 80 and/or 443 without your router complaining (like my ISP provided one did).<br />
            <br />
            Another thing that would be useful to do at this stage is to check if your router needs any exceptions for its <code>DNS Rebind Protection</code>. If it does make sure you add your domain to the list of exceptions (you only need to add the domain itself and none of its combinations with a subdomain).<br />
            This way you'll be able to have the Cloudflare DNS records updating to your new dynamically allocated public IP without your router complaining. Don't ask me how I figured this out.<br />
            <br />
            <br />
            <br />
            <h2 id="SSLCertificate">> Creating an SSL certificate</h2>
            Since I barely understood how exactly this works I'd rather not go explaining how exactly you can get and use an SSL certificate in order to get your website to work over HTTPS.<br />
            Instead I'll link you to the exact article on <a href="https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-20-04" target="_blank">DigitalOcean</a> that I followed and wish you luck.<br />
            You might have to play around with the firewall a little bit, try turning it off completely first before you try to troubleshoot anything else (don't ask me how I know).<br />
            And you will have to change the port number in the nginx <listen> directive to the number of the port you port forwarded.<br />
            <br />
            <br />
            <br />
            <h2 id="nginxSetup2">> Setting up nginx (part 2)</h2>
            Depending on what you want to do on your website you might want to add a few <code>add_header</code> directives to your nginx config.<br />
            Here's one example of this directive you could use to allow JavaScript files on the client to call PHP files on the server to do things (it goes in the <code>location</code> blocks):<br />
            <div class="wideCode"><pre>if ($http_origin ~* "^https:?://(your.domain|www.your.domain)$") { # this supports a normal domain and a subdomain at the same time (your browser will complain if you provide both options in the same header)
    add_header 'Access-Control-Allow-Origin' '$http_origin' always;
}</pre></div>
            <br />
            <br />
            <br />
            <h2 id="conclusion">> Conclusion</h2>
            To conclude, I've not only shown what almost everything I've done to make this website, I've also given an example for some things so you can see how you could do them too.<br />
            I do not plan to update this because it was a pain to write, nor do I want to ever have to go fix issues I made because I didn't triple check some command I wrote.<br />
            If you are still curious or you want to learn more I politely ask you to go do your own research. You'll probably learn more that way (and by just trying things until something works) than you would trying to understand whatever I wrote here.<br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <a href="/about/">> Back to the about page <</a><br />
            <a href="/">> Back to the home page <</a><br />
            <span style="white-space: pre;"> </span>
        </div>
    </body>
<?php

insertScript("/javascript/showBody.js");
echo '
</html>';

?>
