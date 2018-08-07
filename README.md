# Country Detect plugin for Craft CMS 3.x

Country detect plugin for Craft CMS 3.x. For Country Detect to work, your website must be going through Cloudflare. On your domain's settings screen go to Network and ensure IP Geolocation is turned on.

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require serieseight/country-detect

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Country Detect.

## Usage

`{{ craft.countryDetect.country }}`

Brought to you by [Series Eight](https://serieseight.com/)
