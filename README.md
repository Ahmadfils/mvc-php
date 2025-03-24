# Action Humanitaire pour le développement et la lutte contre le chômage

## Description
This project is a PHP-based web application designed to provide information and services related to humanitarian action and unemployment reduction. It follows the MVC (Model-View-Controller) architecture to separate concerns and enhance maintainability.

## Features
- Home page with a banner and service quality sections.
- About page providing information about the organization.
- News page displaying the latest articles and updates.
- Areas of Intervention page detailing the various sectors of focus.
- Services page outlining the services offered.
- Contact page for user inquiries and feedback.

## Directory Structure
```
projet-ahdlc
├── config
│   └── database.php
├── controllers
│   ├── HomeController.php
│   ├── AboutController.php
│   ├── NewsController.php
│   ├── InterventionController.php
│   ├── ServicesController.php
│   └── ContactController.php
├── core
│   ├── Application.php
│   ├── Controller.php
│   ├── Database.php
│   ├── Model.php
│   ├── Request.php
│   └── Response.php
├── models
│   ├── News.php
│   ├── Service.php
│   └── Contact.php
├── routes
│   └── web.php
├── views
│   ├── layouts
│   │   └── main.php
│   ├── home
│   │   └── index.php
│   ├── about
│   │   └── index.php
│   ├── news
│   │   └── index.php
│   ├── intervention
│   │   └── index.php
│   ├── services
│   │   └── index.php
│   └── contact
│       └── index.php
├── public
│   ├── css
│   │   └── style.css
│   ├── js
│   │   └── main.js
│   └── index.php
└── README.md
```

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Configure the database settings in `config/database.php`.
4. Set up a web server (e.g., Apache) to serve the `public` directory.
5. Access the application through your web browser.

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- JavaScript

## License
This project is licensed under the MIT License.