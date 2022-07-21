<!--Title-->
# KSABikes
<!--Content Table-->

## Content 

- [KSABikes](#KSABikes)
  * [Purpose](#purpose)
  * [Description](#description)
  * [FRONT-END](#front-end)
    + [Website Layout](#website-layout)
      - [Home](#home)
        * [Listings](#Listings)
        * [Terms & Conditions](#Terms-&-Conditions)
          
  * [Back-END](#back-end)
    + [Bike](#Bike)
  * [Files](#files)
    + [CSS](#css)
    + [Javascript](#javascript)
  * [Getting Started](#getting-started)
    + [Dependencies](#dependencies)
    + [Installing](#installing)
    + [Viewing the Website](#viewing-the-website)
      - [How to view the website](#how-to-view-the-website)
      - [How to view the database](#how-to-view-the-database)
    + [Help](#help)
  * [Authors](#authors)
  * [Acknowledgments](#acknowledgments)


## Purpose
<!--Purpose of the project-->
This poject is a website dedicated for KSABikes, which is a website to advertise KSABikes.


P.S: This github is only a part of the entire website. I worked on this part while my collegues worked on the rest. Note that the data provided in the table is minimal and not accurate it is just for the sake of viewing the functionality of the project. As this website is still not fully working and its data is private.

<!--Header 2 description of the project-->
## Description
<!--Header 3 front end-->
## FRONT-END
We have a total of 3 pages.

### Website Layout

#### Home
The home page displays all the bikes stored in the databse with the main info, it also includes a filter.

The home page uses two other php pages to display the data: 

* The first is the allData.php which displays all the data
* The second is fetchData.php which displays the data after the filter has been applied
* Upon clicking on reset the allData.php page is called

##### Listings
By clicking on any of the pictures of the bikes displayed in the home page the user is taken to a page displaying all the data and additinal pictures of the bike.

##### Terms & Conditions
By clicking on the terms and condition in the footer a static terms and condition page is displayed.

## Back-END

We have 1 table in our database

### Bike
* Includes all the bike information and picture insterted manually.


## Files
### CSS

* reset.css
* style.css

### Javascript

* dropdownFilter.js : I wanted to display the models for a particular make, thus, I created thus javascript which configures this dependecy, by calling dependantDropdown.php page to select only the models that have the chosen make.
* filter.js: This javascrpt invokes the fetchData.php when the "Go" button is clicked to filter the data. When the "Reset" button is clicked the javascript invokes the allData.php page.
* scriptf.js: this script is from a bootstrap and is used to animate the carosell. 


<!--Header 3 installation and launching the project-->
## Getting Started

### Dependencies

<!--Link to install the latest version of g++-->
* This project is hosted on xampp and phpmyadmin. You will need to download xxamp to see it. a link is provided.
* [xampp](https://www.apachefriends.org/download.html)

### Installing
<!--Steps of Installation-->
* Download the xampp and install it. 
* Download the zip file and create a folder for it.

### Viewing the Website
<!--Steps for running the program-->
#### How to view the website
* Look for Xampp Control Panel in your search bar

![1](https://user-images.githubusercontent.com/91727165/147794092-3998f103-99bd-4560-835b-bfe9f7154c9c.png)

* Start Apache and MySQL

<img width="500" alt="2" src="https://user-images.githubusercontent.com/91727165/147794319-03138add-f182-4889-8fde-ab9adc36610a.PNG">

* Search in your browser for:
```
localhost/index.php 
``` 
and then start browsing the website

#### How to view the database
* Search for:
```
localhost/dashboard/
``` 

* Then search for phpMyAdmin

![3](https://user-images.githubusercontent.com/91727165/147794096-fd8bc2ed-3721-4794-abfc-d10dfbce0831.png)

* To check the database create a new database in phpmyadmin named ksaBikes then upload the given sql to the newly created database, by clicking on import and import the provided bike sql.


### Help
If the changes in the website does not appear try using another browser or click on Fn + F5

## Authors
<!-- The contributors to the project-->
* [Aicha Sidiya](https://github.com/AichaSidiya)


## Acknowledgments
<!-- Insparation files, codes, and general refrences used in writing the code of the project-->
* [Readme Template](https://gist.github.com/DomPizzie/7a5ff55ffa9081f2de27c315f5018afc)
* [Readme Content Table](https://ecotrust-canada.github.io/markdown-toc/)
* [Product Filter](https://www.webslesson.info/2018/08/how-to-make-product-filter-in-php-using-ajax.html)
* [Dependant dropdown list](https://www.laravelcode.com/post/how-to-make-dependent-dropdown-list-using-jquery-ajax-in-php)
