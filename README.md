# ContextToCall Magento 2 Module

## Overview

The **ContextToCall_C2C** module integrates a call/email button through the C2C script into your Adobe Commerce (Magento) store. This module allows merchants to add a dynamic button on product pages, list pages, and during checkout based on specific configurations. The module offers flexibility in button placement, supporting both customer engagement via phone or email.

**Version**: 1.1.2  
**Compatibility**: Adobe Commerce 2.4.7 EE and CE

---

## Features

- Add a dynamic call/email button on the product detail page, product listing page, and checkout page.
- Customizable button placement for different areas (e.g., price, title, add-to-cart button, etc.).
- Global configuration for header and footer positioning.
- CSV import/export for bulk configuration management.

---

## Installation Guide

### Step 1: Install the Module Using Composer

Run the following command to install the **ContextToCall_C2C** module:

```bash
composer require contexttocall/magento-2-module-c2c

```

### Step 2: Update Magento
After installation, run the following Magento commands to complete the installation process:

```bash
Copy
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush

```

### Step 3: Verify Installation

After the installation is complete, navigate to the Stores > Configuration section in the Magento Admin Panel and ensure that ContextToCall_C2C appears under the General section.


## User Guide

Users can configure the C2C Script and button placement both globally and at the product level. Please note that product-level configurations take precedence over global/store settings.

## Product-Level Configuration
- C2C Code: Add the C2C script at the product level.
- Display on Detail Page: Set to "Yes" or "No" to display the button on the product detail page.
- Display on List Page: Set to "Yes" or "No" to display the button on the product list page.
- Button Position on Detail Page: Choose the position to display the button on the detail page from the available options.
- Button Position on List Page: Choose the position to display the button on the list page from the available options.

## Global Configuration 

  ### Global Settings: Configuration for header and footer buttons
  -  Enable Header Button: Set to "Yes" or "No" to show or hide the button in the header.
  -  Header Script: Add the C2C script for the header.
  -  Header Position: Select the desired position for the button in the header from the available options.
  -  Enable Footer Button: Set to "Yes" or "No" to show or hide the button in the footer.
  - Footer Script: Add the C2C script for the footer.
  - Footer Position: Choose the desired position for the button in the footer from the available options.


### Product Settings
  - Display on Detail Page: Enable or disable button display on the product detail page.
  - Display on List Page: Enable or disable button display on the product list page.
  - Button Position on Detail Page: Choose the button position on the product detail page.
  - Button Position on List Page: Choose the button position on the product list page.

### Design Settings
  - Custom CSS: Apply custom CSS for design adjustments.


### Frontend Behavior
The button will appear dynamically on product detail pages, product list pages, and checkout pages, based on your configuration.
