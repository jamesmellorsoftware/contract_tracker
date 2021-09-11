// Define namespace
window.ContractTracker = {};

// Define methods
ContractTracker.addClickListener = function(elem, clickFunc) {
    elem.addEventListener('click', () => {
        clickFunc();
    });
}

ContractTracker.addLoader = function(elem) {
    elem.insertAdjacentHTML(
        "afterbegin",
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    );
    return true;
}
