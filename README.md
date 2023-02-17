<!--Title-->
# KSABikes
## Purpose
<!--Purpose of the project-->
This poject is a website dedicated for KSABikes, which is a website to advertise KSABikes.

<img src="https://github.com/AichaSidiya/KSABikes/blob/main/demoKSABikes.gif" />

P.S: This github is only a part of the entire website. I worked on this part while my collegues worked on the rest. Note that the data provided in the table is minimal and not accurate it is just for the sake of viewing the functionality of the project. As this website is still not fully working and its data is private.

<!--Header 3 front end-->
## FRONT-END
We have a total of 3 pages.

### Website Layout

#### Home
The home page displays all the bikes stored in the databse with the main info, it also includes a filter.

The home page uses two other php pages to display the data: 

* The first is the **allData.php** which displays all the data
* The second is **fetchData.php** which displays the data after the filter has been applied
* Upon clicking on **reset** the **allData.php** page is called

#### Listings
By clicking on any of the pictures of the bikes displayed in the home page the user is taken to a page displaying all the data and additinal pictures of the bike.

#### Terms & Conditions

## Back-END

We have 1 table in our database

### Bike
* Includes all the bike information and picture insterted manually.


## Files
### CSS

* reset.css
* style.css

### Javascript

* **dropdownFilter.js** : I wanted to display the models for a particular make, thus, I created thus javascript which configures this dependecy, by calling dependantDropdown.php page to select only the models that have the chosen make.
* **filter.js**: This javascrpt invokes the fetchData.php when the "Go" button is clicked to filter the data. When the "Reset" button is clicked the javascript invokes the allData.php page.
* scriptf.js

## Built With
* HTML
* CSS
* JavaScript
* PHP
* SQL
* Bootstrap

<!--Header 3 installation and launching the project-->
## Installation
* Clone the repository to your local machine:
```
git clone https://github.com/AichaSidiya/KSABikes.git
```
* Download [xampp](https://www.apachefriends.org/download.html)
* Import the ksabikes.sql file to [phpmydamin](localhost/phpmyadmin/)
* Update the databaseConnection.php file with your database credentials.
* Host the files on a web server and access the website using your preferred browser.

## Features
* View avalble bikes
* Filter 
* Get more detail on particular bike with more pictures.

## Authors
<!-- The contributors to the project-->
* [Aicha Sidiya](https://github.com/AichaSidiya)
* Sara Softa


## Acknowledgments
<!-- Insparation files, codes, and general refrences used in writing the code of the project-->
* [Readme Template](https://gist.github.com/DomPizzie/7a5ff55ffa9081f2de27c315f5018afc)
* [Readme Content Table](https://ecotrust-canada.github.io/markdown-toc/)
* [Product Filter](https://www.webslesson.info/2018/08/how-to-make-product-filter-in-php-using-ajax.html)
* [Dependant dropdown list](https://www.laravelcode.com/post/how-to-make-dependent-dropdown-list-using-jquery-ajax-in-php)
