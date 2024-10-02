document.addEventListener("DOMContentLoaded", function () {
    const prozorArrowa = document.getElementById("prozor-arrowa");

    function toggleArrowVisibility() {
        const currentScrollPosition = window.scrollY;

        if (currentScrollPosition > 200) {
            prozorArrowa.style.opacity = 1;
        } else {
            prozorArrowa.style.opacity = 0;
        }

    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    window.addEventListener("scroll", toggleArrowVisibility);
    prozorArrowa.addEventListener("click", scrollToTop);

    // Initial visibility check
    toggleArrowVisibility();
});
