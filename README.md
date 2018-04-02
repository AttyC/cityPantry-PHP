### Technical Challenge for citypantry

### Set up

Clone this repository:  
```
git clone https://github.com/AttyC/cityPantry-PHP.git
```
* [Install Composer](https://getcomposer.org/download/)  
* [Download PHPunit via Composer](https://coderwall.com/p/mklvdw/install-phpunit-with-composer)
* Configure PHPUnit  
https://medium.com/@peter.lafferty/setting-up-a-php-project-for-git-composer-phpunit-php-codesniffer-and-php-mess-detector-84f8caf27d62

### My approach
I diagrammed the workflow and considered class responsibilities.  I intended to quickly get up to speed with some PHP syntax and PHPUnit testing, in order to build the code.  I would like a Menu class, Vendor class, Item class, as follows:

#### Menu Class contains methods:
  __parseFile__   
    Parsing the vendors.txt file.  
    Depends on Vendor class and Item class.

  __search__  
    Depends on Vendor class and Item class.  
    Takes inputs and searches through __Vendors__ array for postcode, then __Items__ sub-arrays using __withinTime__ method

#### Vendor Class contains methods:
  __createVendor__  
    Takes from menu->parseFile a file line that has been identified as a Vendor, creates a __Vendor__ object and pushes it to the __Vendors__ array.

#### Item Class contains methods:
  __createItem($vendor)__  
    Takes from menu->parseFile a file line that has been identified as an Item, creates __Item__ object and pushes it to the __Items__ array, linked to a __Vendor__ object.

  __withinTime__  
    Calculates delivery time based on the difference between the search time and allowable order time.

  __maxCovers__  
    Calculates whether item is available based on number of covers required vs. maximum covers permitted.

## Challenges
#### The biggest challenges I have faced so far are:  

* Using the PHP console - I can't seem to require files without generating 'unexpected Class' errors and then use the associated Class methods. It has taken me a long time to get this far.  

I have been testing my code in the console by copy and pasting from the Class file, but without using the class declaration.

This is affecting my ability to run the code at all and making it difficult to follow the flow.

* Parsing the text file properly - I used a more specific postcode regexp.

## What I also considered
* Adding the data to a database via MySQL in order to make it easier to query.  I would either do this by parsing the file -> adding data to an array -> adding array data to a SQL table.  

This would involve two tables - Vendors and Items (with a vendor id) and setting up a database, so I decided to continue with using arrays only to hold the data.  

I also considered manually adding the data to a database, but this was not the point of the challenge.

* Writing the code in a different language to demonstrate that I can create the functionality and tests required.
