function adjustHeight() {
    var classes = [".featured-postdiv", ".slagerx2-postdiv", ".slagerx3-postdiv", ".slagerx4-postdiv", ".slagerx4-postdiv-all", ".featured-post-pic", ".slagerx2-post-pic", ".slagerx3-post-pic", ".slagerx4-post-pic" , ".slagerx4-post-pic-all", ".post-pic-single", ".single-mainpic", ".trazilica-pic-container", ".trazilica-pic"];
    var selector = classes.join(", ");
    var picContainers = document.querySelectorAll(selector);

    picContainers.forEach(function(container) {
        var width = container.offsetWidth; // Get the current width of this element
        var height = width / (3 / 2); // Calculate the height based on the width

        if (window.innerWidth <= 1199) {
            container.style.height = height + 'px'; // Set the new height
        } else {
            container.style.height = ""; // Reset height for wider screens, if needed
        }
    });
}

// Run the function to adjust the height initially when DOM content is loaded
document.addEventListener("DOMContentLoaded", function() {
    adjustHeight();
});

// Adjust the height whenever the window is resized
window.onresize = adjustHeight;
