# Advanced PHP

In this series you will learn about some advanced concepts like classes, PHP data objects etc. Also, you will learn how to create your own custom framework. You will learn about good coding practices and in general how to organize large scale applications so it is easier to read and debug your code.

# View Tutorials

Advanced PHP – Part-1 – Introduction - https://youtu.be/q7klK1MWAJY

Advanced PHP - Part-2 - Folder Structure & Controller Check - https://youtu.be/s9Tgh1tbAXk

Advanced PHP - Part-3 - Base Controller & Base Model Class - https://youtu.be/-sOFRANzSIU

Advanced PHP - Part-4 - Views - https://youtu.be/nPJDPWtYckM

Advanced PHP - Part-5 - Registration - https://youtu.be/GzZ2jdOhqbM

Advanced PHP - Part-6 - Message Class & Registration Validation - https://youtu.be/zSpNgQWnfTk

Advanced PHP - Part-7 - Login - https://youtu.be/9zBXy7zzjnI

Advanced PHP - Part-8 - Questions Controller & Model - https://youtu.be/6guid8kS6fM

Advanced PHP - Part-9 - View Questions - https://youtu.be/4GH83lWA0OU

Advanced PHP - Part 10 - Adding Answers & Edit Questions - https://youtu.be/zbtMsKmlPUk

Advanced PHP - Part 11 - New Theme & Delete Questions - https://youtu.be/DtwZgMEAWjw

# Website Testing

Download the latest database.sql file.

Step 1: Create a database called question2answer and import everything from database.sql file. Next check your config.php file for database connection configuration. Also change ROOT_URL address if it is different.

```php
// Define Database Params
define("DB_HOST", "localhost");
define("DB_USER", "root"); // Write your mysql username here
define("DB_PASSWORD", ""); // Your database password
define("DB_NAME", "question2answer"); // Your database name

// Define Url
define("ROOT_PATH", "/");
define("ROOT_URL", "http://localhost/advanced-php/");
```

Step2: Now you login into 3 accounts with following details

```php
Email: test@test.com
Password: 123456

Email: test1@test.com
Password: 123456

Email: test2@test.com
Password: 123456

```
# Contact
Feel free to contact me through my website http://learningfromscratch.online/
>If you are following this tutorial series I would appreciate if you can subscribe and like my videos as it will keep me motivated to share my knowledge with you all!
