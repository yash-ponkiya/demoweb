# ThemeDekho - Technical Assignment Submission

This repository contains the complete WordPress project for the ThemeDekho Developer Technical Assignment.

## Live Preview
A static front-end export of the homepage is available for quick visual review here:
👉 **[Live Preview (GitHub Pages)](https://yash-ponkiya.github.io/demoweb/docs/)**

## Local WordPress Setup Instructions (For HR / Technical Evaluators)
Because GitHub Pages does not support PHP/MySQL, the fully functional WordPress backend (including page builders, plugin configurations, and login redirects) is stored in this repository to be run locally.

### Prerequisites
- A local server environment (XAMPP, WAMP, Local by Flywheel, etc.)
- PHP 7.4+ and MySQL

### Installation Steps
1. **Clone the Repository**: Clone or download this repository into your local server's web directory (e.g., `htdocs/demoweb`).
2. **Database Setup**: 
   - Create a new MySQL database named `demoweb`.
   - Import the included `demoweb_database.sql` file into this new database.
3. **Configuration**:
   - The `wp-config.php` is already configured for a local `root` user with no password. Adjust these credentials in `wp-config.php` if your local MySQL environment requires a password.
4. **Access the Site**:
   - Navigate to the local URL (e.g., `http://localhost/demoweb/`).

### Test Accounts
You can test the role-based login redirection rules (configured via LoginWP) using the following credentials at `/login/`:

**Admin Account** (Redirects to Dashboard):
- **User:** `admin`
- **Pass:** `password123`

**Subscriber Account** (Redirects to Frontend):
- **User:** `testuser`
- **Pass:** `testuser123`

## Role-based access

The site includes a theme-independent WordPress must-use plugin at `wp-content/mu-plugins/role-access.php`, so no manual plugin activation is required after importing the database.

- Visitors see one clear **Login** control on the website.
- Administrators sign in to the WordPress dashboard.
- Learners sign in to a responsive front-end learning portal, where they can update their name and email address.
- Learner accounts are kept out of `/wp-admin/` while AJAX requests remain compatible with WordPress plugins.

---
*Developed by Yash Ponkiya using Astra, native Gutenberg blocks, and WordPress core tools to strictly adhere to the "no custom coding" requirement.*
