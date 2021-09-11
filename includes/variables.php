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

?>