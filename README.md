# Appraisal System Task For Istrotech Company

This Laravel project implements an Appraisal System for managing employee evaluations and half-yearly reviews. 

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)

## Introduction

This Appraisal System is designed to help companies manage the evaluation process of their employees on a half-yearly basis. Managers can submit evaluations for their subordinates, and HR can review and analyze the evaluations.

## Features

- Employee management
- Half-yearly periods
- Evaluation submission and review
- Reporting and analysis

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 9.0
- MySQL or other compatible database

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/appraisal-system.git
   ```

2. Navigate to the project directory:

   ```bash
   cd appraisal-system
   ```

3. Install the dependencies:

   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure your database settings.

5. Generate a new application key:

   ```bash
   php artisan key:generate
   ```

6. Run the database migrations and seeders:

   ```bash
   php artisan migrate --seed
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

## Usage

- Access the application in your web browser at `http://127.0.0.1/:8000`.
- Login with "admin@admin.com" "password : password"
- Create half-year periods, evaluate employees, and review evaluations.
- Use the reporting features to analyze employee performance.

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please [open an issue](https://github.com/yourusername/appraisal-system/issues) or submit a pull request.
