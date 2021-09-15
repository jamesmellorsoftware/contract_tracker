# Contract Tracker
> Contract Tracker is an application that allows you to add your clients to a database and then add contracts to those clients.

## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Setup](#setup)
* [Usage](#usage)
* [Project Status](#project-status)
* [Room for Improvement](#room-for-improvement)
* [Contact](#contact)


## General Information
- Contract Tracker is an application that allows you to add your clients to a database and then add contracts to those clients.
- It is intended to track the contracts you open with clients so you can easily see who your customers are and which contracts they have signed with you.
- This project was all 4 of these:
- 1: A hiring challenge 
- 2: A further attempt to use newly acquired object oriented PHP knowledge from Edwin Diaz's OOP course on Udemy
- 3: An attempt to use pure ES6 JS instead of resorting to jQuery (which I 90% achieved in this project)
- 4: An attempt to go from zero to a good-looking working web app in the space of just a few days


## Technologies Used
- PHP - version 7
- MySQL
- Bootstrap - version 5.1.1
- JavaScript - version ES6
- HTML5
- CSS3


## Setup
You will need:
- Some kind of PHP and SQL server. Personally during development I used XAMPP.
- Internet connection to load Bootstrap and jQuery from CDNs linked in <head>
- PHP 7+ installed on your machine
Then:
- Get code: either pull the code to your machine or download the .zip file so you can install it in htdocs on your XAMPP installation
- Import the SQL database to phpmyadmin or whatever SQL DB admin tool you are using
- Simply open the application in localhost or on your server and register a user


## Usage
- 1: Create a user via register
- 2: Create a client via clients.php
- 3: Create some contracts via contracts.php
You can then update and delete contracts and clients as you wish.


## Project Status
Project is: _in progress_


## Room for Improvement
To do:
- Don't allow numeric input in search fields, and basically disallow illegal inputs altogether via JavaScript
- Change SQL settings to auto-increment IDs per customer instead of everyone being able to see the primary keys
- Pass session ID to objects as opposed to declaring $session as a global
- Add more fields to contracts and clients sections e.g. "Contract Name" for a more useful application
- Enter key triggers action buttons (at the moment you have to manually click them)
- Clearing a modal should clear its data


## Contact
Created by [@jamesmellor.es](http://jamesmellor.es/) - feel free to contact me.
  
