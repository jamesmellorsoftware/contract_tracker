// Define loginreg namespace
ContractTracker.loginreg = {};

// Define controllers
ContractTracker.loginreg.controllers = {};
ContractTracker.loginreg.controllers.login = "includes/controllers/login_controller.php";

// Define loginreg elements
ContractTracker.loginreg.elements = {};
ContractTracker.loginreg.elements.username = document.getElementById("username");
ContractTracker.loginreg.elements.password = document.getElementById("password");
ContractTracker.loginreg.elements.button = document.getElementById("loginreg_submit");

// Define loginreg methods
ContractTracker.loginreg.login = () => {

    ContractTracker.addLoader(ContractTracker.loginreg.elements.button);

    // Get username & password
    let username = ContractTracker.loginreg.elements.username.value;
    let password = ContractTracker.loginreg.elements.password.value;

    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.loginreg.controllers.login,
        dataType: 'json',
        data: {
            "login"   : true,
            "username": username,
            "password": password
        },
        success: function(response){
            console.log(response);
            // if (response == true) {
            //     Timetracker.login.login();
            // } else {
            //     Timetracker.login.displayErrors(response);
            //     Timetracker.login.element.loading.hide();
            // }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

// Add click handlers
ContractTracker.addClickListener(ContractTracker.loginreg.elements.button, ContractTracker.loginreg.login)
