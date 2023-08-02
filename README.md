# Market REST API

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## General Description of the API

This API provides a backend system for managing a web application's user authentication, user profiles, product categories, products, and sales. 

It is designed to be used by both regular users and administrators with different levels of access and permissions.

* User registration and login functionality.
  
* Operations related to categories and products, including retrieving all categories and products available in the system, and creating new categories and products. However, creating categories and products is restricted to administrators only.
  
* Sales functionality is also provided, allowing authenticated users to view their own sales history and create new sales. Administrators, in addition to managing categories and products, can access a specialized endpoint to view all sales in the system.

Overall, this API serves as a foundation for developing a web application that involves user management, product cataloging, and sales tracking.

## Database Schema
![database schema](./images/schema-market-db.png)

## Endpoints

#### Register:
  * URL: POST /auth/register
  * Description: This endpoint allows a user to register an account in the system. Users can provide their required registration details like email, password, and other necessary information.

#### Login:
  * URL: POST /auth/login
  * Description: This endpoint enables users to log in to the system using their registered credentials. After successful login, the system will generate an authentication token (Sanctum token) that the user can use to access authenticated routes.

#### Get User Profile:
  * URL: GET /user/my-profile
  * Description: This endpoint retrieves the profile information of the authenticated user. The user must be authenticated using the Sanctum token to access this route.

#### Update User Profile:
  * URL: PUT /user
  * Description: This endpoint allows the authenticated user to update their profile information. The user must be authenticated using the Sanctum token to access and modify their own profile details.

#### Find All Categories:
  * URL: GET /category
  * Description: This endpoint fetches a list of all categories available in the system. No authentication is required to access this information.

#### Create Category:
  * URL: POST /category
  * Description: This endpoint allows an authenticated administrator to create a new category. Authentication is required using the Sanctum token, and the user must also have the "is-admin" role to create a category.

#### Find All Products:
  * URL: GET /product
  * Description: This endpoint retrieves a list of all products available in the system. No authentication is required to access this information.

#### Create Product:
  * URL: POST /product
  * Description: This endpoint enables an authenticated administrator to create a new product in the system. Authentication is required using the Sanctum token, and the user must also have the "is-admin" role to create a product.

#### Find Sales by User:
  * URL: GET /sale
  * Description: This endpoint allows an authenticated user to view their own sales. Users must provide a valid Sanctum token to access this route.

#### Create Sale:
  * URL: POST /sale
  * Description: This endpoint enables an authenticated user to create a new sale. Users must provide a valid Sanctum token to access this route.

#### Find All Sales (Admin):
  * URL: GET /admin/sale
  * Description: This endpoint is accessible only to authenticated administrators. It allows administrators to view all sales in the system. Authentication is required using the Sanctum token, and the user must have the "is-admin" role to access this route.

