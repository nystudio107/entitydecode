# EntityDecode plugin for Craft CMS

Decodes HTML Entities

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-RC1 or later.

## Installation

1. Install with Composer via `composer require nystudio107/entitydecode` from your project directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

You can also install EntityDecode via the **Plugin Store** in the Craft AdminCP.

## EntityDecode Overview

If you have data coming in from an external source that is already HTML Entity encoded, and you need it decoded to raw HTML, EntityDecode lets you decode it.

## Using EntityDecode

Both of these methods accomplish the same thing:

	{# Output the html_entity_decode()'d text using the 'unescape' function #}
    {{ unescape( TEXT ) |raw }}

	{# Output the html_entity_decode()'d text using the 'unescape' filter #}
    {{ TEXT | unescape() |raw }}

Twig by default encodes output from `{{}}` tags so we use the `|raw` to ensure that the output will be raw HTML; if that's not what you want, remove it.

Under the hood, it just calls the PHP function `html_entity_decode()` and returns the resulting data.

Brought to you by [nystudio107](http://nystudio107.com)
