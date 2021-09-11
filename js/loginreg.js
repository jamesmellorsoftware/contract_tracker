// Define loginreg namespace
ContractTracker.loginreg = {};

// Define loginreg elements
ContractTracker.loginreg.elements = {};
ContractTracker.loginreg.elements.username = document.getElementById("username");
ContractTracker.loginreg.elements.password = document.getElementById("password");
ContractTracker.loginreg.elements.button = document.getElementById("loginreg_submit");

// Add click handlers
ContractTracker.loginreg.elements.button.addEventListener('click', () => {
    ContractTracker.loginreg.login();
});

// Define loginreg methods
ContractTracker.loginreg.login = function() {
    ContractTracker.loginreg.elements.button.insertAdjacentHTML(
        "afterbegin",
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    );
}
