// Dodaje klasu .highlight svakom drugom <tr> elementu za tablice koje imaju id #myTable


document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('#mytable tbody tr');
    rows.forEach((row, index) => {
        if (index % 2 === 1) {
            row.classList.add('highlight');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const adContainers = document.querySelectorAll('.oglas-izmedu');
    
    adContainers.forEach(adContainer => {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                    const img = adContainer.querySelector('img');
                    if (img) {
                        img.onload = function() {
                            adContainer.style.height = img.height + 'px';
                        };
                        // If image is already loaded
                        if (img.complete) {
                            adContainer.style.height = img.height + 'px';
                        }
                    }
                }
            });
        });

        observer.observe(adContainer, { childList: true, subtree: true });
    });
});



//document.addEventListener('DOMContentLoaded', function() {
//window.addEventListener('load', function () {

  //  document.querySelector('.loader').style.display = 'none';
    
//})});