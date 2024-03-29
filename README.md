<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Worldpay for Craft Commerce icon"></p>

<h1 align="center">Worldpay Business Gateway for Craft Commerce</h1>

This plugin provides a [Worldpay](https://www.worldpay.com/) Business Gateway integration for [Craft Commerce](https://craftcms.com/commerce).

## Requirements

This plugin requires Craft Commerce 2.0.0-alpha.5 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Worldpay Business Gateway for Craft Commerce”. Then click on the “Install” button in its modal window.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require dynam/commerce-worldpay-bg

# tell Craft to install the plugin
./craft install/plugin commerce-worldpay-bg
```

## Setup

To add a Worldpay payment gateway, go to Commerce → Settings → Gateways, create a new gateway, and set the gateway type to “Worldpay Business Gateway”.

> **Tip:** The Merchant ID, Service key, and Client key settings can be set to environment variables. See [Environmental Configuration](https://docs.craftcms.com/v3/config/environments.html) in the Craft docs to learn more about that.
