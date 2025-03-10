if ($('#select-grid').length > 0) {
    $('#select-grid').select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
}
if ($('#select-Country').length > 0) {
    $('#select-Country').select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
}
if ($('#select-month').length > 0) {
    $('#select-month').select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
}
if ($('#select-year').length > 0) {
    $('#select-year').select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
}


//active navbar
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').
forEach(link => {
    if (link.href.includes(`${activePage}`)) {
        link.classList.add('active');
    }
})

// video open modal 

