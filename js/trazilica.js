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
});

// Tražilica Mob

document.addEventListener('DOMContentLoaded', function() {
    // Get the search icon, close icon, search form, and overlay elements
    const searchIconLink = document.getElementById('search-icon-link2');
    const searchIcon = document.getElementById('search-icon2');
    const closeIcon = document.getElementById('close-icon2');
    const searchForm = document.getElementById('trazilica-forma');
    const overlay = document.querySelector('.overlay');

    // Function to show the search form
    function showSearchForm2() {
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
    function hideSearchForm2() {
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
            hideSearchForm2();
        } else {
            showSearchForm2();
        }
    });

    overlay.addEventListener('click', hideSearchForm2);
});


