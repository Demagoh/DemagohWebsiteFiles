const delay = ms => new Promise(res => setTimeout(res, ms));

let DOMReady = (cb) => {
    document.readyState === "interactive" || document.readyState === "complete" ? cb() : document.addEventListener("DOMContentLoaded", cb);
};

let startTime = new Date() / 1;

DOMReady(() => {
    document.body.style.visibility = "visible";
});

setInterval(function() {
    if ((new Date()/1)-startTime > 500) {
        document.body.style.overflow = "visible";
        document.getElementsByTagName("html")[0].style.overflow = "visible";
    }
}, 10);