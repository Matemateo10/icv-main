document.addEventListener("DOMContentLoaded", function() {
    var iframes = document.querySelectorAll(".post-content iframe");
    iframes.forEach(function(iframe) {
        var src = iframe.getAttribute("src");
        if (src && src.includes("youtube.com")) {
            iframe.classList.add("youtube-embed");
        }
    });
});