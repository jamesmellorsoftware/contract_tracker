// Define clients namespace
ContractTracker.clients = {};

// Define controllers
ContractTracker.clients.controllers = {};
ContractTracker.clients.controllers.maincontroller = "includes/controllers/clients_controller.php";

// Define clients elements
ContractTracker.clients.elements = {};
ContractTracker.clients.elements.name = document.getElementById("name");
ContractTracker.clients.elements.button = document.getElementById("add_client");

// Define clients methods
ContractTracker.clients.addClient = () => {

    let button =  ContractTracker.clients.elements.button;

    ContractTracker.addLoader(button);

    // Get name
    let name = ContractTracker.clients.elements.name.value;
    
    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.clients.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action": "add_client",
            "name"  : name
        },
        success: function(response){
            if (response.logout == true) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({name: response.name})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

// Add click handlers
ContractTracker.addClickListener(ContractTracker.clients.elements.button, ContractTracker.clients.addClient)
