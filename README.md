# Radialyse Website and  JSON API Documentation 

The website is split into three parts at the moment with varying levels of progress:

 1. Clients Website
 2. Admin Interface for users and Radialyse administrators with different levels of permissions for securing our data.
 3. The Radialyse JSON API (to be consumed by the mobile app)

**This document will be gradually updated to explain how each part functions and is used**

# JSON API
Our API has a number of endpoints each returning data in JSON format. At first the API will be open then I will build the security part into it.

**Endpoints and the data they return**

    /api/types
   The endpoint above returns a list of the types of tests we have in our database.

    
    {[
	  {
	    'id'   : 1,
		'name'	:	'Imagerie'
	  },
	  {
		'id'   : 2,
		'name'	: 'Analyse'
	  }
    ]}
   Above is an example of the results returned when you make a GET request to the endpoint from Android or  JavaScript via JSON



**To Be Continued......**

 


