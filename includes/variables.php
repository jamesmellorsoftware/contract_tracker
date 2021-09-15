<?php

require_once("config.php");

// Application-wide
defined("PAGE_TITLE") ? null : define("PAGE_TITLE", "Contract Tracker");
defined("LOGOUT_BUTTON") ? null : define("LOGOUT_BUTTON", "Log out");

// Loginreg
defined("LOGINREG_BUTTON_LOGIN") ? null : define("LOGINREG_BUTTON_LOGIN", "Log In");
defined("LOGINREG_BUTTON_REGISTER") ? null : define("LOGINREG_BUTTON_REGISTER", "Register");
defined("LOGINREG_CHANGE_LOGIN") ? null : define("LOGINREG_CHANGE_LOGIN", "Already have an account? Log in");
defined("LOGINREG_CHANGE_REGISTER") ? null : define("LOGINREG_CHANGE_REGISTER", "Don't have an account yet? Register");
defined("LOGINREG_PLACEHOLDER_USERNAME") ? null : define("LOGINREG_PLACEHOLDER_USERNAME", "Username");
defined("LOGINREG_PLACEHOLDER_PASSWORD") ? null : define("LOGINREG_PLACEHOLDER_PASSWORD", "Password");

// Form errors
// Loginreg
defined("LOGINREG_ERROR_GENERAL") ? null : define("LOGINREG_ERROR_GENERAL", "Error creating user");
defined("LOGINREG_ERROR_PASSWORD_EMPTY") ? null : define("LOGINREG_ERROR_PASSWORD_EMPTY", "Password cannot be empty");
defined("LOGINREG_ERROR_PASSWORD_INCORRECT") ? null : define("LOGINREG_ERROR_PASSWORD_INCORRECT", "Incorrect password");
defined("LOGINREG_ERROR_PASSWORD_LENGTH") ? null : define("LOGINREG_ERROR_PASSWORD_LENGTH", "Username must be no longer than" . LIMIT_PASSWORD . " characters");
defined("LOGINREG_ERROR_USER_NOT_FOUND") ? null : define("LOGINREG_ERROR_USER_NOT_FOUND", "User doesn't exist");
defined("LOGINREG_ERROR_USERNAME_EMPTY") ? null : define("LOGINREG_ERROR_USERNAME_EMPTY", "Username cannot be empty");
defined("LOGINREG_ERROR_USERNAME_IN_USE") ? null : define("LOGINREG_ERROR_USERNAME_IN_USE", "Username already exists");
defined("LOGINREG_ERROR_USERNAME_LENGTH") ? null : define("LOGINREG_ERROR_USERNAME_LENGTH", "Username must be no longer than" . LIMIT_USERNAME . " characters");
defined("LOGINREG_LABEL_USERNAME") ? null : define("LOGINREG_LABEL_USERNAME", "Username");
defined("LOGINREG_LABEL_PASSWORD") ? null : define("LOGINREG_LABEL_PASSWORD", "Password");

// Clients
defined("CLIENTS_BUTTON_ADD") ? null : define("CLIENTS_BUTTON_ADD", "Add");
defined("CLIENTS_BUTTON_CLEAR_SEARCH") ? null : define("CLIENTS_BUTTON_CLEAR_SEARCH", "Clear");
defined("CLIENTS_BUTTON_DELETE") ? null : define("CLIENTS_BUTTON_DELETE", "Yes, Confirm Delete");
defined("CLIENTS_BUTTON_EDIT") ? null : define("CLIENTS_BUTTON_EDIT", "Edit");
defined("CLIENTS_BUTTON_SEARCH") ? null : define("CLIENTS_BUTTON_SEARCH", "Search");
defined("CLIENTS_ERROR_NAME_EMPTY") ? null : define("CLIENTS_ERROR_NAME_EMPTY", "Client name cannot be empty");
defined("CLIENTS_ERROR_NAME_LENGTH") ? null : define("CLIENTS_ERROR_NAME_LENGTH", "Client name must be no longer than" . LIMIT_CLIENT_NAME . " characters");
defined("CLIENTS_ERROR_NAME_SYMBOLS") ? null : define("CLIENTS_ERROR_NAME_SYMBOLS", "Client name can only contain numbers and letters");
defined("CLIENTS_LABEL_ADDNEW") ? null : define("CLIENTS_LABEL_ADDNEW", "Add New Client");
defined("CLIENTS_LABEL_CHECKDELETE") ? null : define("CLIENTS_LABEL_CHECKDELETE", "Are you sure you want to delete the following client?");
defined("CLIENTS_LABEL_DELETE") ? null : define("CLIENTS_LABEL_DELETE", "Delete Client");
defined("CLIENTS_LABEL_EDIT") ? null : define("CLIENTS_LABEL_EDIT", "Edit Client");
defined("CLIENTS_LABEL_CLIENT_NAME") ? null : define("CLIENTS_LABEL_CLIENT_NAME", "Client Name");
defined("CLIENTS_LABEL_CLIENT_SEARCH") ? null : define("CLIENTS_LABEL_CLIENT_SEARCH", "Search Clients");
defined("CLIENTS_NORESULTS") ? null : define("CLIENTS_NORESULTS", "No clients found.");
defined("CLIENTS_TABLETITLE_CLIENT_ID") ? null : define("CLIENTS_TABLETITLE_CLIENT_ID", "Client ID");
defined("CLIENTS_TABLETITLE_CLIENT_NAME") ? null : define("CLIENTS_TABLETITLE_CLIENT_NAME", "Client Name");

// Contracts
defined("CONTRACTS_BUTTON_ADD") ? null : define("CONTRACTS_BUTTON_ADD", "Add Contract");
defined("CONTRACTS_BUTTON_CLEAR_SEARCH") ? null : define("CONTRACTS_BUTTON_CLEAR_SEARCH", "Clear");
defined("CONTRACTS_BUTTON_DELETE") ? null : define("CONTRACTS_BUTTON_DELETE", "Yes, Confirm Delete");
defined("CONTRACTS_BUTTON_EDIT") ? null : define("CONTRACTS_BUTTON_EDIT", "Edit");
defined("CONTRACTS_BUTTON_SEARCH") ? null : define("CONTRACTS_BUTTON_SEARCH", "Search");
defined("CONTRACTS_ERROR_NOCLIENT") ? null : define("CONTRACTS_ERROR_NOCLIENT", "Please select a client");
defined("CONTRACTS_LABEL_ADDNEW") ? null : define("CONTRACTS_LABEL_ADDNEW", "Add New Client");
defined("CONTRACTS_LABEL_CHECKDELETE") ? null : define("CONTRACTS_LABEL_CHECKDELETE", "Are you sure you want to delete the following contract?");
defined("CONTRACTS_LABEL_CLIENT_NAME") ? null : define("CONTRACTS_LABEL_CLIENT_NAME", "Client");
defined("CONTRACTS_LABEL_CLIENT_SEARCH") ? null : define("CONTRACTS_LABEL_CLIENT_SEARCH", "Search Contracts");
defined("CONTRACTS_LABEL_CLIENT_SELECT") ? null : define("CONTRACTS_LABEL_CLIENT_SELECT", "Select a client");
defined("CONTRACTS_LABEL_CONTRACT") ? null : define("CONTRACTS_LABEL_CONTRACT", "Contract");
defined("CONTRACTS_LABEL_CONTRACT_OWNER") ? null : define("CONTRACTS_LABEL_CONTRACT_OWNER", "Contract Owner");
defined("CONTRACTS_LABEL_DELETE") ? null : define("CONTRACTS_LABEL_DELETE", "Delete Contract");
defined("CONTRACTS_LABEL_EDIT") ? null : define("CONTRACTS_LABEL_EDIT", "Edit Contract");
defined("CONTRACTS_NORESULTS") ? null : define("CONTRACTS_NORESULTS", "No contracts found.");
defined("CONTRACTS_TABLETITLE_CONTRACT_ID") ? null : define("CONTRACTS_TABLETITLE_CONTRACT_ID", "Contract ID");
defined("CONTRACTS_TABLETITLE_CLIENT_ID") ? null : define("CONTRACTS_TABLETITLE_CLIENT_ID", "Client ID");
defined("CONTRACTS_TABLETITLE_CLIENT_NAME") ? null : define("CONTRACTS_TABLETITLE_CLIENT_NAME", "Client Name");
?>