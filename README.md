# CF-CR14-Aleksandar

-Make a CRUD (create/read/update/delete) for the touristic agency offers.

-Create a details file: when you click on any offer it will lead you to a new page that will show more information about the offer that was clicked on.

-On the details page, you need to use google maps API to show the location of the offer (remember that your database should have the columns longitude and latitude) 

-From the database that was built, create a display API. This API is supposed to return a JSON object with all information from all offers from the agency. A single PHP file displayAll.php is necessary for this task. There should be a link in the home page that would lead to the API. Please note that the data from the database must be converted to a JSON type which is raw data, therefore no formatting is required. 


 

Bonus points:

 A OR B, 

-Create a new HTML page called ajaxOffers and add the link to the navbar. On this page, there should be a button that on being clicked will load the result from the previously created displayAll API using AJAX. The data should be displayed on the screen. Be creative and make sure to have a beautiful design.

-Use the weather forecast API available in pre-work. Remember that the key is available there for you. There should be a button on the details page that would trigger an AJAX function that will show the weather for the exact location from the offer. Remember that the longitude and latitude were stored in the DB and already used in a previous task.
