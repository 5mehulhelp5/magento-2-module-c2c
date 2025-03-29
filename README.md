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

- Product-Level Configuration
  - c2c_script: Insert the C2C script at the product level.
  - Display on Product Detail Page: Set this to Yes or No to display the button on the product detail page.
  - Button Position: Choose from multiple button positions, such as:
  - Price (left/right/up/down)
  - Title (left/right/up/down)
  - Add to Cart Button (left/right/up/down)
  - Short Description (left-up/right-up/left-down/right-down)
  - Product Image (left-up/right-up/left-down/right-down)

- Global Configuration
    -Configure header and footer positions:
    - Top Header (left/center/right)
    - Main Header (left/center/right)
    - Main Footer (left/center/right)
    - Bottom Footer (left/center/right)

### Frontend Behavior
The button will appear dynamically on product detail pages, product list pages, and checkout pages, based on your configuration.
