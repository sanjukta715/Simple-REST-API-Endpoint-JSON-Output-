# Simple REST API Endpoint (PHP + JSON)

## Description
This project provides a basic REST API endpoint using PHP. It fetches data from a MySQL database and outputs it as JSON using json_encode().

## API URL
- GET /api_posts.php  
  Returns a JSON list of posts.

## Features
- Returns JSON with proper Content-Type
- Fetches data from SQL table
- Easy to test using browser, Postman, or Insomnia

## Setup
1. Import database tables.
2. Update `db.php` with your MySQL credentials.
3. Place files in your localhost server (XAMPP/WAMP).
4. Open: http://localhost/rest-api/api_posts.php
