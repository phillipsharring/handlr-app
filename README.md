# Handlr App Skeleton

App Skeleton for Handlr, a lightweight PHP middleware style framework.

Documentation forthcoming.

## Installation

### Using the Handlr Installer (recommended)
```bash
# Install Handlr Installer globally via Composer
composer global require phillipsharring/handlr-installer:dev-main --prefer-stable
# Make sure to place the composer's system-wide vendor bin directory in your PATH.

# Create a new Handlr project
handlr new my-project
# where my-project is the name of your project directory
```

### Using Composer
```bash
composer create-project phillipsharring/handlr-app my-project
# where my-project is the name of your project directory
```

### Cloning the repository
```bash
git clone git@github.com:phillipsharring/handlr-app.git my-project

cd my-project

rm -rf .git
composer install

# optional, if you want to start a new git repository
git init
```

## Local Development Server
To start a local development server using `php -S`, run:
```
composer run dev
```
Modify the `dev` script in `composer.json` to change the host and port if needed.
