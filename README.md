# Radialyse Website and  JSON API Documentation 

The website is split into three parts at the moment with varying levels of progress:

 1. Clients Website
 2. Admin Interface for users and Radialyse administrators with different levels of permissions for securing our data.
 3. The Radialyse JSON API (to be consumed by the mobile app)

**This document will be gradually updated to explain how each part functions and is used**

# JSON API
Our API has a number of endpoints each returning data in JSON format. At first the API will be open then I will build the security part into it.

**Endpoints and the data they return**

   ###################################################################
   
    https://radialyse.herokuapp.com/api/types/{API_KEY}
   The endpoint above returns a list of the types of tests we have in our database.

    [
        {
            'id'    :   1,
            'name'  :   'Analyse',
        },
        {
            'id'    :   2,
            'name'  :   'Imagerie'
        }
    ]
   Above is an example of the results returned when you make a GET request to the endpoint from Android or  JavaScript via JSON.
   
   ####################################################################

    https://radialyse.herokuapp.com/api/types/{TYPE_ID}/tests/{API_KEY}
    
   The endpoint above returns a list of the medical tests that are of the type of value TYPE_ID
   
    [
       {
           "id": 2,
           "medical_test_type_id": 2,
           "name": "test 1",
           "created_at": "2018-11-16 21:40:46",
           "updated_at": "2018-11-16 21:40:46"
       },
       {
           "id": 4,
           "medical_test_type_id": 2,
           "name": "test 3",
           "created_at": "2018-11-16 21:40:48",
           "updated_at": "2018-11-16 21:40:48"
       },
       {
           "id": 6,
           "medical_test_type_id": 2,
           "name": "test 5",
           "created_at": "2018-11-16 21:40:49",
           "updated_at": "2018-11-16 21:40:49"
       }
    ]
    
   Above is an example of the results returned by accessing the tests endpoint with a TYPE_ID of 2 with a GET request from Android or JS via JSON.
   
   ####################################################################
   
    https://radialyse.herokuapp.com/api/search/{TEST_ID}/{API_KEY}
   
  The endpoint above returns a list of the medical centers with the price of the test whose is id given as TEST_ID in the request
  
    [
       {
           "id": 1,
           "price": 671,
           "center_name": "Upton and Sons",
           "center_lat": 83.237153,
           "center_long": -146.772725,
           "center_address": "39083 Lonie Islands Apt. 637\nJairomouth, MO 21922-8372"
       },
       {
           "id": 5,
           "price": 734,
           "center_name": "Glover, Runolfsson and Erdman",
           "center_lat": 51.631271,
           "center_long": -93.549491,
           "center_address": "110 Alessia Lights\nAlvenaview, NM 85866"
       },
       {
           "id": 6,
           "price": 573,
           "center_name": "Sporer Group",
           "center_lat": 80.596534,
           "center_long": 3.38956,
           "center_address": "9851 Rippin Rapids Apt. 846\nLake Leilaland, VT 13454"
       },
       {
           "id": 7,
           "price": 1129,
           "center_name": "Glover PLC",
           "center_lat": 48.644572,
           "center_long": 176.779727,
           "center_address": "931 Nienow Pass\nCaseyside, VT 93187"
       },
       {
           "id": 8,
           "price": 1453,
           "center_name": "Swaniawski-Konopelski",
           "center_lat": 89.737655,
           "center_long": 132.44728,
           "center_address": "31938 Raynor Mission\nWest Danial, VT 09006"
       },
       {
           "id": 11,
           "price": 1549,
           "center_name": "Walker, Runte and McKenzie",
           "center_lat": -61.969697,
           "center_long": -113.479442,
           "center_address": "842 Bettie Island\nPrinceborough, IL 11441-2648"
       },
       {
           "id": 12,
           "price": 1167,
           "center_name": "Mitchell, Tromp and Dickens",
           "center_lat": -16.75132,
           "center_long": 43.702346,
           "center_address": "147 Napoleon Cove\nWaltonfurt, GA 19471-2349"
       },
       {
           "id": 15,
           "price": 1440,
           "center_name": "Beahan-Denesik",
           "center_lat": -18.225102,
           "center_long": -19.467267,
           "center_address": "824 Nettie Shores\nSouth Clinton, IA 43994-1587"
       },
       {
           "id": 17,
           "price": 1825,
           "center_name": "Cole-Leffler",
           "center_lat": -11.964176,
           "center_long": 73.227349,
           "center_address": "570 Johnson Springs Apt. 293\nEast Adriennefort, IN 77410-8504"
       },       
       {
           "id": 19,
           "price": 1840,
           "center_name": "D'Amore, Jast and Dickinson",
           "center_lat": -52.350477,
           "center_long": -36.600891,
           "center_address": "607 Eileen Pines Apt. 118\nStokeschester, WY 24508-0278"
       },
       {
           "id": 20,
           "price": 1252,
           "center_name": "Murphy, Quigley and Beer",
           "center_lat": 82.174563,
           "center_long": -81.098407,
           "center_address": "525 Carolyne Isle Apt. 022\nEast Kaydenchester, MN 23680-5814"
       }
    ]
   
  Above is an example of the results of accessing the endpoint with a TEST_ID of 2 
  
  ####################################################################
  
**To Be Continued......**
