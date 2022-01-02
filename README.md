## T-Bank Laravel v1.0.0

This is the backend logic for the T-Bank app. The app's repository is found [here](https://github.com/Agusioma/t-bank-app).

It consists of three models:

1. **Accounts:** - This contains the customer table fields
2. **Transactions** - This contains the transactions table fields
3. **Savings** - This contains the user's yearly savings table fields

It also has three controllers:

1. **AccountController** - This contains the user account controlling logic like updates, password changes etc
2. **LoginController** - As the name suggests, it's for handling the user's login processing. Most security filtering(regex, validations are done on the app's side)
3. **StatementsView** - This is for processing the user's statement requests
4. **SavingsController** - It processes the user's savings.

All the routes are stored in the **web.php** file.

> This was purely the backend. No **view** file was created. The UI is rendered using the android app.

> Also note this is the first version, so more features will be added later. You can openly contribute to this, customise it for your use etc.

The website following the same logic is found [here](https://sacco.terrence-aluda.com/). Kindly note that the website was written using pure PHP(Not so professional code😃). Its GitHub repository is found [here](https://github.com/Agusioma/php-sacco-management-system).

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>