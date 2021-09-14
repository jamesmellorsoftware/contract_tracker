// Define clients namespace
ContractTracker.clients = {};

// Define controllers
ContractTracker.clients.controllers = {};
ContractTracker.clients.controllers.maincontroller = "includes/controllers/clients_controller.php";

// Define clients elements
ContractTracker.clients.elements = {};
ContractTracker.clients.elements.name = document.getElementById("name");
ContractTracker.clients.elements.button = document.getElementById("add_client");
ContractTracker.clients.elements.table_row = document.getElementsByClassName("table_row");
// Edit modal
ContractTracker.clients.elements.open_edit_modal = document.getElementById("clients_edit_open");
ContractTracker.clients.elements.edit_modal = document.getElementById("clients_edit");
ContractTracker.clients.elements.edit_modal_button = document.getElementById("edit_client");
ContractTracker.clients.elements.edit_modal_id = document.getElementById("id_edit");
ContractTracker.clients.elements.edit_modal_name = document.getElementById("name_edit");
// Delete modal
ContractTracker.clients.elements.delete_client = document.getElementsByClassName("delete_client");
ContractTracker.clients.elements.delete_modal_button = document.getElementById("delete_client");
ContractTracker.clients.elements.open_delete_modal = document.getElementById("clients_delete_open");
ContractTracker.clients.elements.client_delete_id = document.getElementById("client_delete_id");
ContractTracker.clients.elements.client_delete_name = document.getElementById("client_delete_name");

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

// Order clients methods
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

ContractTracker.clients.checkDeleteClient = () => {

    let row = event.target.closest(".table_row");
    let client_id = row.getAttribute("href");
    let client_name = row.querySelector(".client_name").innerHTML.trim();
    
    // Populate edit modal
    ContractTracker.clients.elements.client_delete_id.innerHTML = client_id;
    ContractTracker.clients.elements.client_delete_name.innerHTML = client_name;

    // Open edit modal
    ContractTracker.clients.elements.open_delete_modal.click();
}

ContractTracker.clients.deleteClient = () => {

    let button =  ContractTracker.clients.elements.delete_client_button;
    ContractTracker.addLoader(button);

    // Get name and id
    let id = ContractTracker.clients.elements.client_delete_id.innerHTML;
    
    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.clients.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action": "delete_client",
            "id"    : id
        },
        success: function(response){
            console.log(response);
            if (response.logout == true) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({name_edit: response.name})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

ContractTracker.clients.editClient = () => {

    let button =  ContractTracker.clients.elements.edit_modal_button;
    ContractTracker.addLoader(button);

    // Get name and id
    let id = ContractTracker.clients.elements.edit_modal_id.value;
    let name = ContractTracker.clients.elements.edit_modal_name.value;
    
    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.clients.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action": "edit_client",
            "id"    : id,
            "name"  : name
        },
        success: function(response){
            console.log(response);
            if (response.logout == true) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({name_edit: response.name})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

ContractTracker.clients.startEditingClient = () => {

    if (event.target.classList.contains("no_click")) {
        return false;
    }

    let row = event.target.parentElement;
    let client_id = row.getAttribute("href");
    let client_name = row.querySelector(".client_name").innerHTML.trim();
    
    // Populate edit modal
    ContractTracker.clients.elements.edit_modal_id.value = client_id;
    ContractTracker.clients.elements.edit_modal_name.value = client_name;

    // Open edit modal
    ContractTracker.clients.elements.open_edit_modal.click();
}

// Add click handlers
ContractTracker.addClickListener(
    ContractTracker.clients.elements.button,
    ContractTracker.clients.addClient
);
ContractTracker.addClickListener(
    ContractTracker.clients.elements.delete_modal_button,
    ContractTracker.clients.deleteClient
);
ContractTracker.addClickListener(
    ContractTracker.clients.elements.edit_modal_button,
    ContractTracker.clients.editClient
);
Array.from(ContractTracker.clients.elements.table_row).forEach((element) => {
    ContractTracker.addClickListener(element, ContractTracker.clients.startEditingClient);
});
Array.from(ContractTracker.clients.elements.delete_client).forEach((element) => {
    ContractTracker.addClickListener(element, ContractTracker.clients.checkDeleteClient);
});
