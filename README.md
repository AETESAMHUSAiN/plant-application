# Plant Ordering System
How To Install -
---------

1. Create Database Plant.
2. Run plant.sql script provided in sql folder.
3. Go to login.php and try out our application. Sample user credentials can be found in users & wallet_details table.

# Required
Required software and technology -
---------

1. WAMP/XAMP php compliler.
2. PHP, MySQL.

Note -
---------
1. This is not ready for PRODUCTION.
2. The username and password of sample users are stored in table `users`.
3. Only Customers with "Verified" status can place orders using "Cash on Delivery" option.
4. By default a new customer gets 2000 coins in Wallet on signing up, and a fake Credit card number & CVV number is generated and stored in SQL Table "wallet_details" with corresponding new customer's ID.
5. Use that Card Number & CVV while placing an order, else order won't be successful or use "Cash on delivery" option.
6. What's lacking? Dynamic payment(real payment system) and error reporting lacks in this project. And also one might wish for showing corresponding Plant item's photo and all that stuff.

# start login page
localhost/login.php

# User Details
Please find Below user added list:
----------
Role: Administrator
Username: Minakshi

Login Details::
user: admin
password: admin

=============================

Role: Administrator
Username: Shubhangi

Login Details::
user: admin1
password: admin

=============================

Role: Customer
Username: Customer 2

Login Details::
user: user2
password: pass2

=============================

Role: Customer
Username: Customer 3

Login Details::
user: user3
password: pass3

=============================

Role: Customer
Username: Customer 4

Login Details::
user: user4
password: pass4