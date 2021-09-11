// Define loginreg namespace
ContractTracker.loginreg = {};

// Define controllers
ContractTracker.loginreg.controllers = {};
ContractTracker.loginreg.controllers.login = "includes/controllers/login_controller.php";
ContractTracker.loginreg.controllers.register = "includes/controllers/register_controller.php";

// Define loginreg elements
ContractTracker.loginreg.elements = {};
ContractTracker.loginreg.elements.username = document.getElementById("username");
ContractTracker.loginreg.elements.password = document.getElementById("password");
ContractTracker.loginreg.elements.button = document.getElementById("loginreg_submit");

// Define loginreg methods
ContractTracker.loginreg.loginreg = () => {

    let button =  ContractTracker.loginreg.elements.button;

    ContractTracker.addLoader(button);

    // Get username & password
    let username = ContractTracker.loginreg.elements.username.value;
    let password = ContractTracker.loginreg.elements.password.value;

    if (button.classList.contains("register")) {
        var action = "register";
        var controller = ContractTracker.loginreg.controllers.register;
    } else if (button.classList.contains("login")) {
        var action = "login";
        var controller = ContractTracker.loginreg.controllers.login;
    }
    
    // Pass to server to check
    $.ajax({
        type: 'post',
        url: controller,
        dataType: 'json',
        data: {
            "action"  : action,
            "username": username,
            "password": password
        },
        success: function(response){
            if (response == true) {
                window.location = "index.php";
            } else {
                // display errors
                console.log(response);
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors(
                    {
                        username: response.username,
                        password: response.password
                    }
                )
                // Timetracker.login.displayErrors(response);
                // Timetracker.login.element.loading.hide();
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

// Add click handlers
ContractTracker.addClickListener(ContractTracker.loginreg.elements.button, ContractTracker.loginreg.loginreg)
