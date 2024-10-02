document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.news-tab');
    const tabContents = document.querySelectorAll('.news-tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(tc => tc.classList.remove('active'));

            document.getElementById(target).classList.add('active');
            this.classList.add('active');
        });
    });
});