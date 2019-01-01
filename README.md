[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/)

# DEPRECATED

This Craft CMS 2.x plugin is no longer supported, but it is fully functional, and you may continue to use it as you see fit. The license also allows you to fork it and make changes as needed for legacy support reasons.

# EntityDecode plugin for Craft CMS

Decodes HTML Entities

## Installation

To install EntityDecode, follow these steps:

1. Download & unzip the file and place the `entitydecode` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/nystudio107/entitydecode.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `entitydecode` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

EntityDecode works on Craft 2.4.x and Craft 2.5.x.

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

## EntityDecode Changelog

### 1.0.0 -- 2016.01.24

* Initial release

Brought to you by [nystudio107](http://nystudio107.com)
