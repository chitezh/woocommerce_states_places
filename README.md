# States, Cities, and Places for WooCommerce

Wordpress plugin that shows dropdowns for State and City Select for WooCommerce.

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
 * *Do you want to add your country here?*<br>[Help us extending this country list adding your country](https://github.com/chitezh/woocommerce_states_places/tree/master/templates).

## Languages availables

* English (US)
* Spanish ([Spain](https://translate.wordpress.org/locale/es/default/wp-plugins/states-cities-and-places-for-woocommerce/), [Mexico](https://translate.wordpress.org/locale/es-mx/default/wp-plugins/states-cities-and-places-for-woocommerce/), [Venezuela](https://translate.wordpress.org/locale/es-ve/default/wp-plugins/states-cities-and-places-for-woocommerce/))
* *Do you want to see your language here?*<br>[Help us translating the plugin to your language](https://translate.wordpress.org/projects/wp-plugins/states-cities-and-places-for-woocommerce/).

## Requirements
* WordPress 4.0  or greater
* WooCommerce 2.2 or greater
* PHP version 5.2.4 or greater
* MySQL version 5.0 or greater

## Installation

### Automatic installation
1. Go to your **Dashboard » Plugins » Add new**
2. In the search form write **"States, Cities, and Places for Woocommerce"**
3. When the search return the result, click on the **Install Now** button
4. Finally, click on the **Activate** button
5. Enjoy the plugin!

### Manual Installation
1. Download the plugin from this page clicking on the **Download** button
2. Go to your **Dashboard » Plugins » Add new**
3. Now select **Upload Plugin** button
4. Click on **Select file** button and select the file you just download
5. Click on **Install Now** button and the **Activate Plugin**
6. Enjoy the plugin!

### FTP Installation
1. Download the plugin from this page clicking on the **Download** button
2. Decompress the file in your desktop
3. Run your FTP client software and conect to your WordPress installation
4. Copy to [root folder]/wp-content/plugins/ the plugin directory you just descompress
5. Go to your Dashboard » Plugins » Find the plugin and click on **Activate** option
6. Enjoy the plugin!


## Frequently Asked Questions
### How do I report bugs?
Kindly create an issue stating the bug and how you caught it [chitezh/woocommerce_states_places](https://github.com/chitezh/woocommerce_states_places/issues/new)

### Can I suggest a new place or location?
Yes, you can always suggest or request new locations by creating an issue in [chitezh/woocommerce_states_places](https://github.com/chitezh/woocommerce_states_places/issues/new). Please refer to the [Country Codes](https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php) using by WooCommerce.

### How do I contribute to the project?
You extend the plugin to cover countries, states and places. we accept pull requests. Fork the repo and make changes to `/trunk`. Consider reading [Wordpress F.A.Q.](https://wordpress.org/plugins/about/faq/) to further understand wordpress SVN file structure.

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
- **Kingsley Ochu** - (GitHub: [chitezh](https://github.com/chitezh) / WP.: [chitezh](https://profiles.wordpress.org/chitezh/))
- **Luis Urrutia** - (GitHub: [LuisUrrutia](https://github.com/LuisUrrutia) / WP.: [luisurrutiaf](https://profiles.wordpress.org/luisurrutiaf/))
- **Javier Esteban** - (GitHub: [NobNob](https://github.com/NobNob) / WP.: [NobNob](https://profiles.wordpress.org/nobnob/))
- **Yordan Soares** - (GitHub: [YordanSoares](https://github.com/YordanSoares) / WP.: [YordanSoares](https://profiles.wordpress.org/yordansoares/))

## Changelog
* 1.2.4 - March 30, 2020
  * Fix an issue with a country (Algeria)
* 1.2.3 - March 22, 2020
  * Added localization to "State" and "City" field labels  
* 1.2.2 - March 22, 2020
  * Added six new countries:
    * Algeria (DZ): Departments (Wilaya) and Municipalities (Baladiyahs) (thanks to [Walid Yacine MAZED](https://github.com/w-mazed))
    * Brazil (BR): States and Municipalities ([country request](https://github.com/chitezh/woocommerce_states_places/issues/35) - issue #35)
    * Nicaragua (NI): Departments and Cities (thanks to [ahc505](https://github.com/ahc505))
    * Russia (RU): States and Cities (thanks to [Sarge Madovsky](https://github.com/SargeMadovsky))
    * Spain (ES): Provinces and Municipalities (thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/))
    * Tunisia (TN): Governorates and Districts (thanks to [Anouar Ben Saad](https://github.com/anouarbensaad))
  * Updated 2 countries:  
    * Chile (CL): states codes (thanks to [Luis Urrutia](https://github.com/LuisUrrutia))
    * Guatemala (GT): missing municipalities (thanks to [macnomo](https://github.com/macnomo))    
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