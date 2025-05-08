# 🌱 AgriWeb - Smart Farming Platform

**AgriWeb** is an intelligent agricultural platform that empowers farmers with real-time crop insights, weather forecasts, and SMS alerts to optimize farming decisions and boost productivity.

## 🌟 Key Features

- **📚 Crop Database**  
  Detailed profiles of 50+ crops including planting seasons, growth stages, and ideal conditions.
  
- **🌦 Smart Weather Integration**  
  Hyper-local weather forecasts with 3-day predictions for better planning.

- **🔔 Proactive SMS Alerts**  
  Twilio-powered notifications for frost warnings, rainfall alerts, and optimal planting times.

- **🌱 Personalized Farming Advice**  
  Custom recommendations based on your location, soil type, and crop selection.

- **📊 Field Condition Dashboard**  
  Visual analytics for soil moisture, temperature trends, and crop health indicators.

## 🛠 Tech Stack

| Component       | Technology |
|-----------------|------------|
| Frontend        | HTML5, CSS3, JavaScript (ES6+) |
| Backend         | PHP 8.1, Apache |
| Database        | MySQL 8.0 |
| SMS Gateway     | Twilio API |
| Development     | XAMPP 8.2.4 |

## 🚀 Quick Setup

### Prerequisites
- XAMPP (Apache + MySQL + PHP)
- Composer (for PHP dependencies)
- Twilio Account (for SMS)

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/mrsumanth19/agriweb.git
   cd agriweb
   ```

2. Database setup:
   ```bash
   mysql -u root -p < database/agriweb.sql
   ```

3. Configure environment:
   ```bash
   cp config.example.php config.php
   # Edit config.php with your database and Twilio credentials
   ```

4. Install dependencies:
   ```bash
   composer install
   ```

5. Start XAMPP and access:
   ```
   http://localhost/agriweb
   ```

## 📱 SMS Integration Setup
1. Get Twilio credentials:
   - Account SID
   - Auth Token
   - Twilio phone number

2. Update in `config.php`:
   ```php
   define('TWILIO_SID', 'your_account_sid');
   define('TWILIO_TOKEN', 'your_auth_token');
   define('TWILIO_NUMBER', '+1234567890');
   ```

## 📂 Project Structure
```
agriweb/
├── assets/          # Static files
│   ├── css/         # Stylesheets
│   ├── js/          # JavaScript files
│   └── images/      # Media assets
├── config/          # Configuration files
├── database/        # SQL scripts
├── includes/        # PHP classes and functions
├── pages/           # Application views
└── api/             # API endpoints
```



## 📧 Contact
Sumanth M - [@mrsumanth19](https://github.com/mrsumanth19)  
Project Link: [https://github.com/mrsumanth19/agriweb](https://github.com/mrsumanth19/agriweb)
```

