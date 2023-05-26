If you want to run our Laravel application, you must complete the following steps:

1. Import the Northwind database into MySQL: https://code.google.com/archive/p/northwindextended/downloads
2. Run cp .env.example .env
3. In .env file configure DB_DATABASE=northwind
4. Run composer install
5. Run php artisan key:generate
6. Run php artisan serve

Testing in Postman:

CREATE
POST-http://127.0.0.1:8000/api/customerdemographic
Body-raw->JSON->
{
"CustomerTypeID":3,
"CustomerDesc":"SomeDesc"
}

GET
GET-http://127.0.0.1:8000/api/customerdemographic
{
    "status": 1,
    "data": [
        {
            "CustomerTypeID": 2,
            "CustomerDesc": "sfdsgdfhgfdsaAS"
        },
        {
            "CustomerTypeID": 3,
            "CustomerDesc": "SomeDesc"
        }
    ]
}


UPDATE
PUT-http://127.0.0.1:8000/api/customerdemographic/3
Body->raw->JSON->
{
"CustomerTypeID": 3,
"CustomerDesc": "SomeSomeSomeDesc"
}

DELETE
DELETE-http://127.0.0.1:8000/api/customerdemographic/3
{
    "status": 1,
    "data": {
        "CustomerTypeID": 3,
        "CustomerDesc": "SomeSomeSomeDesc"
    },
    "msg": "Customer Demographic deleted successfully."
}


