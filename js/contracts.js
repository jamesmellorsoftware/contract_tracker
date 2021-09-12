// Define contracts namespace
ContractTracker.contracts = {};

// Define controllers
ContractTracker.contracts.controllers = {};
ContractTracker.contracts.controllers.maincontroller = "includes/controllers/contracts_controller.php";

// Define contracts elements
ContractTracker.contracts.elements = {};
ContractTracker.contracts.elements.contract_client = document.getElementById("contract_client");
ContractTracker.contracts.elements.button = document.getElementById("add_contract");

// Define contracts methods
ContractTracker.contracts.addContract = () => {

    let button =  ContractTracker.contracts.elements.button;

    ContractTracker.addLoader(button);

    // Get name
    let client = ContractTracker.contracts.elements.contract_client.value;
    
    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.contracts.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action": "add_contract",
            "client" : contract_client
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
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.button,
    ContractTracker.contracts.addContract
);
