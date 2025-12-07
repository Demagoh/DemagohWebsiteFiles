let DOMReady = (cb) => {
    document.readyState === "interactive" || document.readyState === "complete" ? cb() : document.addEventListener("DOMContentLoaded", cb);
};

DOMReady(() => {
    document.body.style.visibility = "visible";
});