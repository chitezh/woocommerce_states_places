# States, Cities, and Places for Woocommerce

Wordpress plugin that shows dropdowns for State and City Select for woocomerce.

This WooCommerce plugin transforms the text input for states, the city or town. With this plugin you can provide a list of states and cities to be shown as a select dropdown.

This will be shown in checkout pages, edit addresses pages, shipping calculator, etc.

## Supported Countries
 * Algeria
 * Brasil
 * Chile
 * Guatemala
 * Nicaragua
 * Nigeria
 * Panama
 * Russia
 * Spain
 * Tunisia
 * Venezuela

## Requirements
* WordPress 4.0  or greater
* Woocommerce 2.2 or greater
* PHP version 5.2.4 or greater
* MySQL version 5.0 or greater

## Installation
### Automatic
Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't need to leave your web browser.

To do an automatic install of WooCommerce, log in to your WordPress dashboard, navigate to the Plugins menu and click `Add New`.

Search for `States, Cities, and Places for Woocommerce`, install and activate.

### Manual
[See wordpress codex](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation)


## Updating

Automatic updates should work like a charm; as is the best practice, back up should be undertaken before updates.

If on the off-chance you do encounter issues with the shop/category pages after an update you simply need to flush the permalinks by going to WordPress > Settings > Permalinks and hitting 'save'. That should return things to normal.


## Frequently Asked Questions
### How do I report bugs?
Kindly create an issue stating the bug and how you caught it [chitezh/woocommerce_states_places](https://github.com/chitezh/woocommerce_states_places/issues/new)

### Can I suggest a new place or location?
Yes, you can always suggest or request new locations by creating an issue in [chitezh/woocommerce_states_places](https://github.com/chitezh/woocommerce_states_places/issues/new). Please refer to the [Country Codes](https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php) using by WooCommerce.

### How do I contribute to the project?
You extend the plugin to cover countries, states and places. we accept pull requests.

Fork the repo and make changes to /trunk. Consider reading [Wordpress F.A.Q.](https://wordpress.org/plugins/about/faq/) to further understand wordpress svn file structure.

	Pull Requests

	Document any change in behaviour - Make sure the README.md and any other relevant documentation are kept up-to-date.

	Consider our release cycle - We try to follow SemVer v2.0.0. Randomly breaking public APIs is not an option.

	Create feature branches - Don't ask us to pull from your master branch.

	One pull request per feature - If you want to do more than one thing, send multiple pull requests.

	Send coherent history - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

## Screenshots
1. States dropdown.
  	[![Screen 1](https://github.com/chitezh/woocommerce_states_places/blob/master/assets/screenshot-1.png)]()

2. States dropdown on search.
 	[![Screen 2](https://github.com/chitezh/woocommerce_states_places/blob/master/assets/screenshot-2.png)]()

3. Cities dropdown on search
	[![Screen 3](https://github.com/chitezh/woocommerce_states_places/blob/master/assets/screenshot-3.png)]()

4. Selected state and city.
 	[![Screen 4](https://github.com/chitezh/woocommerce_states_places/blob/master/assets/screenshot-4.png)]()

## Contributors
- Kingsley Ochu - [chitezh](https://github.com/chitezh)
- Luis Sebastian Urrutia Fuentes - [LuisUrrutia](https://github.com/LuisUrrutia)
- Yordan Soares - [YordanSoares](https://github.com/YordanSoares)

## Changelog
* 1.2.2 - March 22, 2020
  * Added six new countries:
    * Algeria (DZ): Departments (Wilaya) and Municipalities (Baladiyahs) (thanks to [Walid Yacine MAZED](https://github.com/w-mazed))
    * Brazil (BR): States and Municipalities ([country request](https://github.com/chitezh/woocommerce_states_places/issues/35) - issue #35)
    * Nicaragua (NI): Departments and Cities (thanks to [ahc505](https://github.com/ahc505))
    * Russia (RU): States and Cities (thanks to [Sarge Madovsky](https://github.com/SargeMadovsky))
    * Spain (ES): Provinces and Municipalities (thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/))
    * Tunisia (TN): Governorates (thanks to [Anouar Ben Saad](https://github.com/anouarbensaad))
  * Updated 2 countries:  
    * Chile (CL): states codes (thanks to [Luis Urrutia](https://github.com/LuisUrrutia))
    * Guatemala (GT): missing municipalities (thanks to [macnomo](https://github.com/macnomo))    
  * Added localization to "State" and "City" field labels
  * Tested up to WooCommerce 4.0.1
* 1.2.1 - March 18, 2020
  * Added two new countries: 
    * Panama (PA): Provinces, Districts and Corregimientos
    * Venezuela (VE): States and Municipalities (with their capitals)
  * Invert the order of State and City fields to have more sense with the steps of form.
  * Fix text domain in plugin header comment (states-cities-and-places-for-woocommerce).
  * Fix some typos and strings without translation functions.
* 1.2.0 - February 07, 2019
  * Added a new country: Guatemala (GT)
* 1.1.1 - August 28, 2018
  * Updated Chilean states and cities (16 states, no numbers).
* 1.1.0 - July 09, 2017
  * Added a new country: Chile (CL)
* 1.0.2 - August 11, 2016
  * Change author name.
* 1.0.1 - August 10, 2016
  * Updated README file.
* 1.0 - August 10, 2016
  * First release.