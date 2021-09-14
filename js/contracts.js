// Define contracts namespace
ContractTracker.contracts = {};

// Define controllers
ContractTracker.contracts.controllers = {};
ContractTracker.contracts.controllers.maincontroller = "includes/controllers/contracts_controller.php";

// Define contracts elements
ContractTracker.contracts.elements = {};
ContractTracker.contracts.elements.contract_client = document.getElementById("client_id");
ContractTracker.contracts.elements.button = document.getElementById("add_contract");
// Edit modal
ContractTracker.contracts.elements.open_edit_modal = document.getElementById("contracts_edit_open");
ContractTracker.contracts.elements.edit_modal = document.getElementById("contracts_edit");
ContractTracker.contracts.elements.edit_modal_button = document.getElementById("edit_contract");
ContractTracker.contracts.elements.edit_modal_contract_id = document.getElementById("contract_id_edit");
ContractTracker.contracts.elements.edit_modal_client_id = document.getElementById("client_id_edit");
ContractTracker.contracts.elements.table_row = document.getElementsByClassName("table_row");
// Delete modal
ContractTracker.contracts.elements.delete_contract = document.getElementsByClassName("delete_contract");
ContractTracker.contracts.elements.delete_modal_button = document.getElementById("delete_contract");
ContractTracker.contracts.elements.open_delete_modal = document.getElementById("contracts_delete_open");
ContractTracker.contracts.elements.contract_delete_id = document.getElementById("contract_delete_id");
ContractTracker.contracts.elements.contract_delete_client_id = document.getElementById("contract_delete_client_id");
ContractTracker.contracts.elements.contract_delete_client_name = document.getElementById("contract_delete_client_name");
// Search modal
ContractTracker.contracts.elements.search_client = document.getElementById("contracts_search");
ContractTracker.contracts.elements.search_modal_button = document.getElementById("search_contract");
ContractTracker.contracts.elements.search_modal_clear = document.getElementById("clear_search");
ContractTracker.contracts.elements.search_modal_id = document.getElementById("contracts_search_id");
ContractTracker.contracts.elements.search_modal_client_id = document.getElementById("contracts_search_client_id");
ContractTracker.contracts.elements.search_modal_client_name = document.getElementById("contracts_search_client_name");

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
            "action"    : "add_contract",
            "client_id" : client
        },
        success: function(response){
            // if (response.logout == true) {
            if (response.logout == 1) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({client_id: response.client_id})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

ContractTracker.contracts.checkDeleteContract = () => {

    let row = event.target.closest(".table_row");
    let contract_id = row.getAttribute("href");
    let client_id = row.getAttribute("href2");
    let client_name = row.querySelector(".contract_client_name").innerHTML.trim();
    
    // Populate edit modal
    ContractTracker.contracts.elements.contract_delete_id.innerHTML = contract_id;
    ContractTracker.contracts.elements.contract_delete_client_id.innerHTML = client_id;
    ContractTracker.contracts.elements.contract_delete_client_name.innerHTML = client_name;

    // Open edit modal
    ContractTracker.contracts.elements.open_delete_modal.click();
}

ContractTracker.contracts.clearSearch = () => {
    let button =  ContractTracker.contracts.elements.search_modal_clear;
    ContractTracker.addLoader(button);

    let url = location.protocol + "//" + location.hostname + location.pathname;

    window.location = url;
}

ContractTracker.contracts.deleteContract = () => {

    let button =  ContractTracker.contracts.elements.delete_modal_button;
    ContractTracker.addLoader(button);

    // Get contract and client IDs
    let contract = ContractTracker.contracts.elements.contract_delete_id.innerHTML;
    let client = ContractTracker.contracts.elements.contract_delete_client_id.innerHTML;

    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.contracts.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action"      : "delete_contract",
            "client_id"   : client,
            "contract_id" : contract
        },
        success: function(response) {
            if (response.logout == true) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({client_id_edit: response.client_id})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

ContractTracker.contracts.editContract = () => {

    let button =  ContractTracker.contracts.elements.edit_modal_button;
    ContractTracker.addLoader(button);

    // Get contract and client IDs
    let contract = ContractTracker.contracts.elements.edit_modal_contract_id.value;
    let client = ContractTracker.contracts.elements.edit_modal_client_id.value;

    // Pass to server to check
    $.ajax({
        type: 'post',
        url: ContractTracker.contracts.controllers.maincontroller,
        dataType: 'json',
        data: {
            "action"      : "edit_contract",
            "client_id"   : client,
            "contract_id" : contract
        },
        success: function(response) {
            // if (response.logout == true) {
            if (response.logout == 1) {
                ContractTracker.logout();
            } else if (response == true) {
                location.reload();
            } else {
                ContractTracker.removeLoaders(button);
                ContractTracker.displayErrors({client_id_edit: response.client_id})
            }
        },
        error: function(error) {
            console.debug('AJAX Error:');
            console.debug(error);
        }
    });
}

ContractTracker.contracts.searchContracts = () => {

    let button =  ContractTracker.contracts.elements.search_modal_button;
    ContractTracker.addLoader(button);

    // Get id, client id, and client name
    let id = ContractTracker.contracts.elements.search_modal_id.value;
    let client_id = ContractTracker.contracts.elements.search_modal_client_id.value;
    let client_name = ContractTracker.contracts.elements.search_modal_client_name.value;

    let url = location.protocol + "//" + location.hostname + location.pathname;

    if (id.length || name.length) {
        url += "?search=active"
    }
    if (id.length) {
        url += `&id=${id}`;
    }
    if (client_id.length) {
        url += `&client_id=${client_id}`;
    }
    if (client_name.length) {
        url += `&client_name=${client_name}`;
    }

    window.location = url;
}

ContractTracker.contracts.startEditingContract = () => {
    if (event.target.classList.contains("no_click")) {
        return false;
    }
    
    let row = event.target.parentElement;
    let contract_id = row.getAttribute("href");
    let client_id = row.getAttribute("href2");
    
    // Populate edit modal
    ContractTracker.contracts.elements.edit_modal_contract_id.value = contract_id;
    ContractTracker.contracts.elements.edit_modal_client_id.value = client_id;

    // Open edit modal
    ContractTracker.contracts.elements.open_edit_modal.click();
}

// Add click handlers
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.button,
    ContractTracker.contracts.addContract
);
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.search_modal_clear,
    ContractTracker.contracts.clearSearch
);
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.delete_modal_button,
    ContractTracker.contracts.deleteContract
);
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.edit_modal_button,
    ContractTracker.contracts.editContract
);
ContractTracker.addClickListener(
    ContractTracker.contracts.elements.search_modal_button,
    ContractTracker.contracts.searchContracts
);
Array.from(ContractTracker.contracts.elements.table_row).forEach((element) => {
    ContractTracker.addClickListener(element, ContractTracker.contracts.startEditingContract);
});
Array.from(ContractTracker.contracts.elements.delete_contract).forEach((element) => {
    ContractTracker.addClickListener(element, ContractTracker.contracts.checkDeleteContract);
});