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
* Main activities that the club provide. 
* Joining or logging in.
* Contact the club. 

##### Listings
* Clicking on the join us button will lead the user to a form where she will fill her personal information including her name, id, email password...

##### Terms & Conditions
* Clicking on the log in button will lead the user to a form where she will fill her id and password and the website will check if it matches tha data in the databse then it will welcome the user.

## Back-END

We have 1 table in our database

### Bike
* Includes all the bike information and picture insterted manually.


## Files
### CSS

* reset.css
* style.css

### Javascript

* dropdownFilter.js
* filter.js
* scriptf.js


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
* [BootStrap used](https://startbootstrap.com/previews/agency)
* [JavaScript guide](https://www.w3schools.com/js/default.asp)
* [JavaScript form Validation](https://www.javatpoint.com/confirm-password-validation-in-javascript)
* [JavaScript password Validation](https://www.javatpoint.com/javascript-form-validation)
* [JavaScript form Validation2](https://www.geeksforgeeks.org/form-validation-using-html-javascript/)
* [CSS grid style](https://stackoverflow.com/questions/47587892/how-does-css-grid-layout-works)
* [Readme Template](https://gist.github.com/DomPizzie/7a5ff55ffa9081f2de27c315f5018afc)
* [Readme Content Table](https://ecotrust-canada.github.io/markdown-toc/)
