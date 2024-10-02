document.addEventListener("DOMContentLoaded", function() {
    function setAdTypeCookie() {
        var width = window.innerWidth;
        var adType;

        if (width > 1199) {
            adType = 'desktop-ad';
        } else {
            adType = 'mobile-ad';
        }

        document.cookie = "adType=" + adType + "; path=/";
    }

    function checkAdTypeAndReload() {
        var width = window.innerWidth;
        var adType;

        if (width > 1199) {
            adType = 'desktop-ad';
        } else {
            adType = 'mobile-ad';
        }

        var currentAdType = document.cookie.replace(/(?:(?:^|.*;\s*)adType\s*=\s*([^;]*).*$)|^.*$/, "$1");

        if (currentAdType !== adType) {
            document.cookie = "adType=" + adType + "; path=/";
            location.reload();
        }
    }

    // Set the cookie initially
    setAdTypeCookie();

    // Listen for window resize events
    window.addEventListener('resize', checkAdTypeAndReload);
});