# Mini Project

This is my first Laravel project and part of a coding challenge for a job application.

## What is the project?

My idea was to build out a series of quizzes based off 

## Installation

This is a great question.

Will need to create your `.env` file from the `.env.example` file and then generate a key

```
cp .env.example .env
php artisan key:generate
```

For the database I used sqlite as it was simple to setup. That will require the php libraries for sqlite if you do not already have them installed

```
sudo apt-get install php7.4-sqlite
```

Then create an empty database file and run the migrations
```
touch database/database.sqlite
php artisan migrate
```

## Usage

```
php artisan serve
```
