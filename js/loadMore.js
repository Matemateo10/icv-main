const loadMoreBtn = document.querySelector('#load-more-btn');
if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function() {
        let button = this;
        let currentPage = parseInt(button.getAttribute('data-current-page'));
        let totalPages = parseInt(button.getAttribute('data-total-pages'));

        // Set the button text immediately to "Učitavam..."
        button.textContent = 'Učitavam...';

        // Disable the button to prevent multiple clicks
        button.disabled = true;

        if (currentPage < totalPages) {
            let nextPage = currentPage + 1;
            let query = new URLSearchParams(window.location.search);
            query.set('paged', nextPage);

            fetch(`${window.location.pathname}?${query.toString()}`)
                .then(response => response.text())
                .then(data => {
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(data, 'text/html');
                    let newPosts = doc.querySelectorAll('.trazilica-rezultati-link');
                    let resultsContainer = document.querySelector('#search-results-container');
                    let loadMoreContainer = document.querySelector('.load-more-container');
                    
                    newPosts.forEach(post => resultsContainer.insertBefore(post, loadMoreContainer));

                    // Update the current page number
                    button.setAttribute('data-current-page', nextPage);

                    // If we've reached the last page, hide the button
                    if (nextPage >= totalPages) {
                        button.style.display = 'none';
                    } else {
                        // Reset button text back to "Učitaj više"
                        button.textContent = 'Učitaj više';
                        button.disabled = false; // Re-enable the button
                    }

                    // Call the function to adjust height of new posts
                    if (typeof adjustHeight === "function") {
                        adjustHeight();
                    }
                })
                .catch(error => {
                    console.error('Error loading more posts:', error);
                    // Re-enable the button in case of failure
                    button.disabled = false;
                    button.textContent = 'Učitaj više'; // Reset button text in case of error
                });
        }
    });
}
