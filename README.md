<img src="https://s3-us-west-2.amazonaws.com/plugin-icons.craftcms/country-detect.svg?1533718264" width="100">

# Country Detect plugin for Craft CMS 3.x

Country detect plugin for Craft CMS 3.x. For Country Detect to work, your website must be going through Cloudflare. On your domain's settings screen go to Network and ensure IP Geolocation is turned on.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.
Your website must be going through Cloudflare.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require serieseight/country-detect

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Country Detect.

## Usage

`{{ craft.countryDetect.country }}`

Built by [Series Eight](https://serieseight.com/).

Based on [Country Detect](https://github.com/madebymutual/Country-Detect) by [Mutual](https://github.com/madebymutual).


---

<a href="https://serieseight.com" target="_blank"><img src="resources/img/plugin-logo.png" width="180"></a>
