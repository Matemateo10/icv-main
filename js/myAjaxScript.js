document.addEventListener("DOMContentLoaded", function() {
    var loadMoreBtn = document.getElementById('load-more-btn');
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            var button = this;
            var currentPage = parseInt(button.getAttribute('data-current-page'));
            var totalPages = parseInt(button.getAttribute('data-total-pages'));
            var searchQuery = "<?php echo get_search_query(); ?>"; // PHP value passed to JS

            if (currentPage < totalPages) {
                // Show a loading spinner and disable the button
                button.textContent = 'Loading...';
                button.disabled = true;

                // Prepare the data for the AJAX request
                var formData = new FormData();
                formData.append('action', 'load_more_posts');
                formData.append('page', currentPage);
                formData.append('search_query', searchQuery);

                // Send the AJAX request using fetch API
                fetch('<?php echo admin_url(',admin-ajax.php,'); ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {
                    return response.text();
                })
                .then(function(response) {
                    // Append the new posts to the container
                    var searchResultsContainer = document.getElementById('search-results-container');
                    searchResultsContainer.insertAdjacentHTML('beforeend', response);

                    // Update the current page
                    button.setAttribute('data-current-page', currentPage + 1);

                    // Check if we've reached the last page
                    if (currentPage + 1 >= totalPages) {
                        button.remove(); // Remove the button if all posts are loaded
                    } else {
                        button.textContent = 'Učitaj više'; // Reset button text
                        button.disabled = false; // Enable the button again
                    }
                })
                .catch(function() {
                    button.textContent = 'Error loading posts';
                    button.disabled = false; // Re-enable the button if there's an error
                });
            }
        });
    }
});
