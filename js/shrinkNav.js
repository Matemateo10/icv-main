document.addEventListener("DOMContentLoaded", function() {
    let navbar = document.getElementById("navbar");
    let lastScrollTop = 0;
    let scrollThreshold = 60; /* Adjust as needed */

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
            // Scrolling down beyond the threshold, hide the navbar
            navbar.classList.add("invisible");

        } else {
            // Scrolling up or not beyond the threshold, show the navbar
            navbar.classList.remove("invisible");
          
           
        }

        lastScrollTop = scrollTop;
    });
});