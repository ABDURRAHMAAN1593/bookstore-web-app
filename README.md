# iBookstore - Online Book Shopping Platform

A web-based bookstore application that allows users to browse, shop, and manage their book purchases online. The platform features a user-friendly interface with genre-based book categorization and a shopping cart system.

## Features

- User Authentication (Register/Login)
- Genre-based Book Browsing
- Book Details View
- Shopping Cart Functionality
- Direct Purchase Option
- Responsive Design

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP

## Prerequisites

- XAMPP (or similar local server stack)
- Web Browser
- MySQL Server

## Installation

1. **Install XAMPP**
   - Download and install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Start Apache and MySQL services

2. **Clone the Repository**
   ```bash
   git clone https://github.com/ABDURRAHMAAN1593/bookstore-web-app.git
   ```
   - Place the cloned files in your XAMPP's htdocs directory

3. **Database Setup**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named "BookStore"
   - Import the following SQL schema:
   ```sql
   CREATE TABLE registration (
       Email VARCHAR(255) PRIMARY KEY,
       Password VARCHAR(255) NOT NULL
   );
   ```

4. **Access the Application**
   - Open your web browser
   - Navigate to `http://localhost/[your-folder-name]`

## Project Structure

```
├── home.html              # Landing page
├── login.html            # Login page
├── register.html         # Registration page
├── login.php            # Login processing
├── register.php         # Registration processing
├── catalogue.html       # Main book catalogue
├── comedy.html          # Comedy genre books
├── thriller.html        # Thriller genre books
├── horror.html          # Horror genre books
├── drama.html           # Drama genre books
├── cart.html            # Shopping cart
├── buynow.html          # Purchase page
├── aboutus.html         # About page
├── HTML IMAGES/         # Image assets
└── CATALOGUE/           # Book images
```

## Usage

1. Register a new account or login with existing credentials
2. Browse books by genre from the catalogue
3. View book details and add to cart or buy directly
4. Manage your shopping cart
5. Complete your purchase

## Contributing

Feel free to fork this repository and submit pull requests for any improvements.

## License

This project is open source and available under the MIT License.

## Contact

For any queries or support, please open an issue in the repository. 
