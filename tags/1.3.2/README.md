=== States, Cities, and Places for WooCommerce ===
Contributors: chitezh, yordansoares, luisurrutiaf, nobnob, joseayram
Donate link: https://github.com/chitezh
Tags: woocommerce, locations, states, cities, provinces, regions, departments, municipalities, districs, governorates, counties, cantons
Stable tag: 1.3.2
Requires at least: 4.0
Tested up to: 5.9
Requires PHP: 7.0
WC requires at least: 3.0.x
WC tested up to: 4.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin that shows dropdowns for State and City Select for WooCommerce.

== Description ==

This plugin adds locations of **available countries** (see list below) to the **State** and **City** fields of the **WooCommerce** address forms, making the fields filterable to enhance the **user experience**.

Additionally it adds the States to the **Shipping Zones** (Cities are not compatible with this area).

== Supported Countries ==

* 🇩🇿 Algeria
* 🇦🇺 Australia
* 🇧🇭 Bahrain
* 🇧🇩 Bangladesh
* 🇧🇧 Barbados
* 🇧🇴 Bolivia
* 🇧🇷 Brazil
* 🇧🇫 Burkina Faso
* 🇨🇱 Chile
* 🇨🇴 Colombia
* 🇨🇺 Cuba
* 🇩🇰 Denmark
* 🇩🇴 Dominican Republic
* 🇪🇨 Ecuador
* 🇪🇬 Egypt
* 🇸🇻 El Salvador
* 🇬🇭 Ghana
* 🇬🇹 Guatemala
* 🇭🇹 Haiti
* 🇭🇳 Honduras
* 🇮🇹 Italy
* 🇰🇿 Kazakhstan
* 🇰🇼 Kuwait
* 🇱🇧 Lebanon
* 🇲🇾 Malaysia
* 🇲🇺 Mauritius
* 🇲🇽 Mexico
* 🇳🇮 Nicaragua
* 🇳🇪 Niger
* 🇳🇬 Nigeria
* 🇴🇲 Oman
* 🇵🇰 Pakistan
* 🇵🇦 Panama
* 🇵🇾 Paraguay
* 🇵🇪 Peru
* 🇵🇹 Portugal
* 🇷🇴 Romania
* 🇷🇺 Russia
* 🇸🇦 Saudi Arabia
* 🇪🇸 Spain
* 🇱🇰 Sri Lanka
* 🇹🇳 Tunisia
* 🇹🇷 Turkey
* 🇦🇪 United Arab Emirates
* 🇺🇾 Uruguay
* 🇻🇪 Venezuela
* 🇻🇳 Vietnam
* *Do you want to add your country here?*
[Help us extending this list adding your country](https://github.com/chitezh/woocommerce_states_places/tree/master/templates).

== Plugin Demo Site ==

If you want to see the plugin in action, follow the steps below:

1. Visit the **plugin demo site**: https://wcstatesandcities.ml/
2. Select a **sample product** from the list.
3. Go to the **Checkout** to interact with available country locations.

== Available filter hooks ==

**States, Cities, and Places for WooCommerce** has two filter hooks for handling the States and Places in all the available countries:

* `scpwoo_custom_states_xx`: It allows you to handle the States of a given country. The `xx` at the end must be replaced by the two-letter country code in lower case.
* `scpwoo_custom_places_xx`: It allows you to handle the Places of a given country. The `xx` at the end must be replaced by the two-letter country code in lower case.

Please read the article [**Using the filter hooks**](https://github.com/chitezh/woocommerce_states_places/wiki/Using-the-filter-hooks) to learn [**How to use**](https://github.com/chitezh/woocommerce_states_places/wiki/Using-the-filter-hooks#how-to-use).

== Available languages ==

* English (US, Australia, Canada, UK, New Zealand, and South Africa)
* Spanish (Argentina, Chile, Colombia, Costa Rica, Dominican Republic, Ecuador, Guatemala, Honduras, Mexico, Peru, Puerto Rico, Spain, Uruguay, and Venezuela)
* *Do you want to see your language here?*
[Help us translating the plugin to your language](https://translate.wordpress.org/projects/wp-plugins/states-cities-and-places-for-woocommerce/).

== Installation ==

= Automatic installation =

1. Go to your **Dashboard » Plugins » Add new**
2. In the search form write **"States, Cities, and Places for WooCommerce"**
3. When the search return the result, click on the **Install Now** button
4. Finally, click on the **Activate** button
5. Enjoy the plugin!

= Manual Installation = 
1. Download the plugin from this page clicking on the **Download** button
2. Go to your **Dashboard » Plugins » Add new**
3. Now select **Upload Plugin** button
4. Click on **Select file** button and select the file you just download
5. Click on **Install Now** button and the **Activate Plugin**
6. Enjoy the plugin!

= FTP Installation =
1. Download the plugin from this page clicking on the **Download** button
2. Decompress the file in your desktop
3. Run your FTP client software and conect to your WordPress installation
4. Copy to [root folder]/wp-content/plugins/ the plugin directory you just descompress
5. Go to your Dashboard » Plugins » Find the plugin and click on **Activate** option
6. Enjoy the plugin!

== Screenshots ==
1. In this screenshot you can see the plugin in action.

== Frequently Asked Questions ==

= How do I report bugs? =
Kindly create an issue stating the bug and how you caught it: [Create new issue](https://github.com/chitezh/woocommerce_states_places/issues/new).

= Can I suggest a new place or location? =
Yes, you can always suggest or request new locations by creating an issue in the [plugin repository](https://github.com/chitezh/woocommerce_states_places/issues/new) in GitHub. Please refer to the [Adding a new country](https://github.com/chitezh/woocommerce_states_places/tree/master/templates) instructions to get more details.

== Changelog ==

= 1.3.2 - Dec 31, 2020 =
* Added ten new countries:
  * 🇧🇩 Bangladesh: Districts and Cities (thanks to [S.M. Mehdi Akram](https://www.royaltechbd.com))
  * 🇧🇫 Burkina Faso: Regions and Provinces (thanks to [Stéphane SAMANDOULOUGOU](mailto:burkinar@gmail.com)): 
  * 🇨🇺 Cuba: Provinces and Municipalities (thanks to [Ramiro Rodpa](mailto:www.rmr@gmail.com))
  * 🇭🇹 Haiti: Departments and Communes (thanks to [Edner Zephir](https://achetertelephone.com))
  * 🇲🇾 Malaysia: States, Federal territories and Districts (thanks to [Amirah Zainuddin](mailto:web@syscomm.cc))
  * 🇲🇺 Mauritius: Districts, Cities, Towns, and Regions (thanks to [Audrey](https://pongo.io))
  * 🇲🇽 Mexico: States and Municipalities (thanks to [Carlos Velasco](mailto:carlos.xvlsc@gmail.com))
  * 🇳🇪 Niger: Regions and Departments (thanks to [Ibrahim Nasir](https://howdoyou.tech))
  * 🇹🇷 Turkey: Provinces and Districts (thanks to [Selcuk](mailto:selcuk@kokoma.com.tr))
  * 🇻🇳 Vietnam: Provinces and Districts (thanks to [Nguyen Le](http://adnsg.com/))

= 1.3.1 - Dec 9, 2020 =
Fix filter hook for places in Sri Lanka and Mauritius

= 1.3 - Nov 30, 2020 =
Since this release you can use two new filter hooks that allows you handling both the list of States and Places:

* `scpwoo_custom_states_xx`: It allows you to handle the States of a given country. The `xx` at the end must be replaced by the two-letter country code in lower case.
* `scpwoo_custom_places_xx`: It allows you to handle the Places of a given country. The `xx` at the end must be replaced by the two-letter country code in lower case.

Please read the article [**Using the filter hooks**](https://github.com/chitezh/woocommerce_states_places/wiki/Using-the-filter-hooks) to learn [**How to use**](https://github.com/chitezh/woocommerce_states_places/wiki/Using-the-filter-hooks#how-to-use).

= 1.2.11 - Oct 07, 2020 =
* Added four new countries:
  * 🇦🇺 Australia: States, Territories, and Cities (thanks to [Gopinath N A](https://github.com/Gopinath1728))
  * 🇧🇭 Bahrain: Parishes and Districts (thanks to [Ebrahim Ahmed](https://github.com/Ebrahim7707))
  * 🇵🇾 Paraguay: Departments and Districts
  * 🇵🇪 Peru: Departments and Districts (thanks to [David Soto](https://github.com/Ddiods))
* Updated 1 country:  
  * 🇪🇸 Spain: Updated keys from States array (thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/))

= 1.2.10 - Jul 31, 2020 =
* Added five new countries:
  * 🇪🇬 Egypt: Governorates and Cities (thanks to [Heba Fareed](https://github.com/HebaFareed))
  * 🇬🇭 Ghana: Regions, Cities, and Towns (thanks to [Edem Adjokatcher](https://github.com/adjokatsee))
  * 🇰🇼 Kuwait: Governorates and Districts (thanks to [3Lahoonk](https://twitter.com/3LaHoonK))
  * 🇱🇧 Lebanon: Provinces and Cities (thanks to Mohamad [Ali Makkeh](https://github.com/makkehma))
  * 🇦🇪 United Arab Emirates: Emirates and Localities (thanks to [Waqas Ahmad](https://www.apnawaqas.com))
* Updated 2 countries:
  * 🇩🇰 Denmark: The "State" field was deactivated and all the cities were listed in "City" field directly.
  * 🇩🇰 Denmark: Updated list of cities (thanks to [jonasskafte](https://github.com/jonasskafte))
  * 🇻🇪 Venezuela: Removed "Municipality" variable from places/VE.php.

= 1.2.9 - Jun 20, 2020 =
* Added two new countries:
  * 🇧🇴 Bolivia: Departments and Municipalities (thanks to [ionixcorp](https://github.com/ionixcorp))
  * 🇩🇴 Dominican Republic: Provinces and Municipalities (thanks to [Javier Molina](https://forways.com.do))
* Fixed: Algeria did not display the cities (thanks to [@yas-se](https://wordpress.org/support/topic/problem-in-sync-cities-according-to-the-choosen-state/) for reporting)

= 1.2.8 - Jun 01, 2020 =
* Added three new countries:
  * 🇩🇰 Denmark: Regions and Municipalities (thanks to [jonasskafte](https://github.com/jonasskafte) for testing this country)
  * 🇭🇳 Honduras: Departments and Municipalities (thanks to [jbermudez00](https://github.com/jbermudez00))
  * 🇵🇰 Pakistan: Provinces, Territories and Districts (thanks to [Faisal Basra](https://github.com/faisalbasra))
* Updated 1 country:
  * 🇴🇲 Oman: Added translation support for location names (thanks to [Moayid](https://github.com/Moayid))

= 1.2.7 - May 17, 2020 =
* Added five new countries:
  * 🇪🇨 Ecuador: Provinces and Cantons (thanks to [Franklin Lucero](https://github.com/Alercard))
  * 🇰🇿 Kazakhstan: Regions and Districts (thanks to Iminov Anvar)
  * 🇴🇲 Oman: Governorates and Provinces (thanks to [iAlwardi](https://github.com/ialwardi))
  * 🇷🇴 Romania: Counties and Cities (thanks to [Razvan Farte](https://razvanfarte.ro/))
  * 🇱🇰 Sri Lanka: Districts and Cities (thanks to [Pasindu Perera](https://github.com/maddagepasindu))
* Updated 1 country:
  * 🇨🇱 Chile: removed "Región:" in State names (thanks to [CLobo96](https://github.com/CLobo96))

= 1.2.6 - April 16, 2020 =
* Added four new countries:
  * 🇧🇧 Barbados: Parishes and Places (thanks to [Damien Alleyne](https://github.com/d-alleyne))
  * 🇸🇻 El Salvador: Departments and Municipalities (thanks to [ChronHeart](https://github.com/lastcron))
  * 🇮🇹 Italy: Provinces and Municipalities (thanks to [Claudio Tegazzini](https://www.claudiotegazzini.it))
  * 🇵🇹 Portugal: Districts, Autonomous Regions and Municipalities (thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/))
* Fixed some issues with 🇳🇬 Nigeria (thanks to [Ibrahim Nasir](https://github.com/kh4l33l))
* Added two experimental filter hooks to Algeria ([How to use](https://wordpress.org/support/topic/show-a-specific-state/#post-12681489)):
  * `scpwoo_custom_states_dz` - handles Provinces of Algeria
  * `scpwoo_custom_places_dz` - handles Communes of Algeria

= 1.2.5 - April 06, 2020 =
* Added three new countries:
  * 🇨🇴 Colombia: Departments and Cities (thanks to [José Ayrám](https://profiles.wordpress.org/joseayram/))
  * 🇸🇦 Saudi Arabia: Regions and Governorates.
  * 🇺🇾 Uruguay: Departments and Cities (thanks to [Alfonso Frachelle](https://www.idearius.com/es/))
* Added translation support for location names of Algeria and Saudi Arabia.
* Added plugin page banner and icon. Thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/)!
* Updated screenshot.

= 1.2.4 - March 30, 2020 =
* Fix an issue with a country (Algeria)

= 1.2.3 - March 22, 2020 =
* Added localization to "State" and "City" field labels  

= 1.2.2 - March 22, 2020 =
* Added six new countries:
  * 🇩🇿 Algeria: Departments (Wilaya) and Municipalities (Baladiyahs) (thanks to [Walid Yacine MAZED](https://github.com/w-mazed))
  * 🇧🇷 Brazil: States and Municipalities ([country request](https://github.com/chitezh/woocommerce_states_places/issues/35) - issue #35)
  * 🇳🇮 Nicaragua: Departments and Cities (thanks to [ahc505](https://github.com/ahc505))
  * 🇷🇺 Russia: States and Cities (thanks to [Sarge Madovsky](https://github.com/SargeMadovsky))
  * 🇪🇸 Spain: Provinces and Municipalities (thanks to [Javier Esteban](https://profiles.wordpress.org/nobnob/))
  * 🇹🇳 Tunisia: Governorates and Districts (thanks to [Anouar Ben Saad](https://github.com/anouarbensaad))
* Updated 2 countries:  
  * 🇨🇱 Chile: states codes (thanks to [Luis Urrutia](https://github.com/LuisUrrutia))
  * 🇬🇹 Guatemala: missing municipalities (thanks to [macnomo](https://github.com/macnomo))
* Tested up to WooCommerce 4.0.1

= 1.2.1 - March 18, 2020 =
* Added two new countries: 
  * 🇵🇦 Panama: Provinces, Districts and Corregimientos
  * 🇻🇪 Venezuela: States and Municipalities (with their capitals)
* Invert the order of State and City fields to have more sense with the steps of form.
* Fix text domain in plugin header comment (states-cities-and-places-for-woocommerce).
* Fix some typos and strings without translation functions.

= 1.2.0 - February 07, 2019 =
* Added a new country: 
  * 🇬🇹 Guatemala

= 1.1.1 - August 28, 2018 =
* Updated Chilean states and cities (16 states, no numbers).

= 1.1.0 - July 09, 2017 =
* Added a new country: 
  * 🇨🇱 Chile

= 1.0.2 - August 11, 2016 =
* Change author name.

= 1.0.1 - August 10, 2016 =
* Updated README file.

= 1.0 - August 10, 2016 =
* First release.
