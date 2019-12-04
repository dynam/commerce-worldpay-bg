<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Worldpay for Craft Commerce icon"></p>

<h1 align="center">Worldpay Business Gateway for Craft Commerce</h1>

This plugin provides a [Worldpay](https://www.worldpay.com/) Business Gateway integration for [Craft Commerce](https://craftcms.com/commerce).

## Requirements

This plugin requires Craft Commerce 2.0.0-alpha.5 or later.

## Installation

Clone this repo into the existing or newly created /plugins folder. Add the below to composer.json

```bash
  "repositories": [
    {
      "type": "path",
      "url": "plugins/commerce-worldpay-bg"
    }
  ]
```

```bash
# tell Composer to load the plugin
composer require dynam/commerce-worldpay-bg
```

## Setup

To add a Worldpay payment gateway, go to Commerce → Settings → Gateways, create a new gateway, and set the gateway type to “Worldpay Business Gateway”.
