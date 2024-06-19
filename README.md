# Real Estate Property Listing and Offer System

## Overview

This project is a demo web application built with Laravel and Vue, utilizing email verification to verify accounts, that allows a listing agent to list properties and users to make offers on those properties. The system includes a notification feature to inform listing agents of new offers and users of accepted or rejected offers.

## Features

- **Property Listing**: Realtors can list properties with details such as price, location, description, and images.
- **Offer Management**: Users can make offers on listed properties (select interest rate and monthly payments). Realtors can view, accept, or reject offers.
- **User Authentication**: Secure authentication system for realtors and users.
- **Notifications**: Real-time notifications to keep users and realtors informed about new offers and offer statuses.
- **Admin Dashboard**: Manage users, properties, and offers through an administrative interface.

## Technologies Used

- **PHP**
- **Laravel**: v11.
- **Tailwind CSS**.
- **Vue.js**.
- **Inertia.js**.

## Installation


1. **Install dependencies**

    ```sh
    composer install
    npm install
    ```

2. **Set up environment variables**

    Copy the `.env.example` file to `.env` and update the necessary settings (e.g., database credentials, SMTP creds).

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

3. **Set up the database**

    Create a database and update the `.env` file with your database credentials. Then run the migrations and seed the database.

    ```sh
    php artisan migrate --seed
    ```

4. **Run the development server**

    ```sh
    php artisan serve
    npm run dev
    ```

## Usage

1. **Register as a realtor or user**: Sign up and log in to access the features.
2. **List a property**: Realtors can list new properties with all necessary details.
3. **Make an offer**: Users can browse listed properties, select the interest rate, duration, which accordingly calculates the due amount, and submit their offers.
4. **Manage offers**: Realtors can view offers on their properties, and accept or reject them.
5. **Receive notifications**: Users and realtors receive notifications about offers and offer statuses.


## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contact

For any inquiries or questions, please contact [osmarrod18@gmail.com](mailto:osmarrod18@gmail.com).

