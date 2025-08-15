# Laravel 12 Hello World App

A simple Laravel 12 application running in Docker with basic hello world endpoints.

## Screenshots



## Features

- Welcome page at the root URL
- JSON API endpoint returning hello world message with timestamp and version info
- Dockerized environment for easy setup and deployment

## Requirements

- Docker
- Docker Compose

## Installation & Setup

1. Clone this repository
```bash
git clone <your-repo-url>
cd <your-project-directory>
```

2. Build and start the Docker containers
```bash
docker-compose up -d
```

3. Install Laravel dependencies (if needed)
```bash
docker-compose exec app composer install
```

4. Generate application key (if needed)
```bash
docker-compose exec app php artisan key:generate
```

## Available Routes

### Web Routes

- **GET /** - Welcome page
  - Returns the default Laravel welcome view

- **GET /hello** - Hello World API endpoint
  - Returns JSON response with:
    - `message`: "Bismillah...Hello World from Laravel 12!"
    - `timestamp`: Current timestamp
    - `version`: Laravel version

## Usage Examples

### Access the welcome page
```bash
curl http://localhost:8000/
```

### Get hello world JSON response
```bash
curl http://localhost:8000/hello
```

Expected response:
```json
{
  "message": "Bismillah...Hello World from Laravel 12!",
  "timestamp": "2025-08-15T10:30:45.000000Z",
  "version": "12.x.x"
}
```

## Docker Commands

Start the application:
```bash
docker-compose up --build
```

## Project Structure

```
.
├── app/
├── routes/
│   └── web.php          # Contains the application routes
├── resources/views/
│   └── welcome.blade.php
├── docker-compose.yml   # Docker configuration
├── Dockerfile          # Application container setup
└── README.md
```