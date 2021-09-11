// Define namespace
window.ContractTracker = {};

// Define element classes
window.ContractTracker.class = {};
window.ContractTracker.class.loading = "spinner-border";

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

ContractTracker.displayErrors = function(elems) {
    for (target in elems) {
        // Display text errors
        let err_elems = document.getElementsByClassName(`error-${target}`);
        for (let i = 0; i < err_elems.length; i++) {
            if (elems[target].length) {
                err_elems[i].innerHTML = elems[target];
                err_elems[i].classList.remove("invisible");
            }
        }
        // Make field red
        if (elems[target].length) {
            document.getElementById(target).classList.add('is-invalid');
        }
    }
}

ContractTracker.removeLoaders = function(elem) {
    let el = elem.querySelector(`.${ContractTracker.class.loading}`);
    elem.removeChild(el);
    return true;
}
