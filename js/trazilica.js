// Tražilica

document.addEventListener('DOMContentLoaded', function() {
    // Get the search icon, close icon, search form, and overlay elements
    const searchIconLink = document.getElementById('search-icon-link');
    const searchIcon = document.getElementById('search-icon');
    const closeIcon = document.getElementById('close-icon');
    const searchForm = document.getElementById('trazilica-forma');
    const overlay = document.querySelector('.overlay');

    // Function to show the search form
    function showSearchForm() {
        searchForm.classList.add('show');
        overlay.classList.add('show');
        searchIcon.style.display = 'none';
        closeIcon.style.display = 'block';
        // Disable scrolling while keeping the scrollbar visible
        const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
        document.body.style.overflow = 'hidden';
        document.body.style.paddingRight = `${scrollBarWidth}px`;
    }

    // Function to hide the search form
    function hideSearchForm() {
        searchForm.classList.remove('show');
        overlay.classList.remove('show');
        searchIcon.style.display = 'block';
        closeIcon.style.display = 'none';
        // Re-enable scrolling and remove padding
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
    }

    // Add event listeners to show/hide the search form
    searchIconLink.addEventListener('click', function() {
        if (searchForm.classList.contains('show')) {
            hideSearchForm();
        } else {
            showSearchForm();
        }
    });

    overlay.addEventListener('click', hideSearchForm);

    // Load more functionality
    const loadMoreBtn = document.querySelector('#load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            let button = this;
            let currentPage = parseInt(button.getAttribute('data-current-page'));
            let totalPages = parseInt(button.getAttribute('data-total-pages'));

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

                        button.setAttribute('data-current-page', nextPage);

                        if (nextPage >= totalPages) {
                            button.style.display = 'none';
                        }
                    });
            }
        });
    }
});



