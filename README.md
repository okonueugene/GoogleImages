# Laravel Google Images

This project is a Laravel web crawler that runs on guzzle http and utilizes Google Search to get the most relevant pictures for a search term.

## Prerequisites

-   Composer
-   PHP (check composer.json for version)

## Installation

1. Clone the repository:

    git clone https://github.com/okonueugene/GoogleImages.git

    cd /GoogleImages

2. Install the dependencies:

    composer install

3. Generate the application key:

    php artisan key:generate

4. Clear the configuration and view caches:

    php artisan config:clear
    php artisan view:clear

5. Compile the assets:

    php artisan asset:publish

6. Run the application:
   php artisan serve

The application will be running on http://localhost:8000.

## Usage

To get the most relevant images for a particular search term, simply send a GET request to the following URL:

localhost:8000/api/search/q?

The request can be customized by adding the following query parameters:

-   `q`: The search query.
-   `page`: The page number.
-   `per_page`: The number of images items per page.

## Dependencies

This project depends on the following dependencies:

-   Laravel
-   Guzzle HTTP
-   Google Search API

## Documentation

The project does not have documentation yet.

I hope this helps!
