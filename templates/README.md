# Adding a new country

If you want to add a new country that is not yet in the list of [Supported Countries](https://github.com/chitezh/woocommerce_states_places#supported-countries), please follow this guide to send a **pull request**.

## Getting started

1. Fork the [plugin repository](https://github.com/chitezh/woocommerce_states_places/) on your GitHub account.
2. Refer to [WooCommerce country codes](https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php) to find the code related to your country. E.g. `'NG'` for Nigeria, `'ES'` for Spain, `'VE'` for Venezuela.
3. Duplicate the `XX.php` file you'll find inside `template/states/` and `template/places/`, rename them with the code of your country you found in the previous step (E.g. `NG.php`, `ES.php`, `VE.php`) and move them to `trunk/states` and `trunk/places/` respectively.

## Setting up the States

1. Go to the `states/` directory and open the file you just move from `template/states/` with your favourite code editor.
2. Find the `$states['XX']` (line 19) and replace `'XX'` with your country code.
3. Begin adding your Country States: Add a Code to each State using a logic sense (E.g. `'FA' => 'Florida'`). This code will be used to map the Places beloging this State. You can use any standar like ISO, ANSI, etc. There is no an mandatory standar or system and you can use your own. Please see the [U.S. state abbreviations](https://en.wikipedia.org/wiki/List_of_U.S._state_abbreviations) to see an example.
5. Edit the header comment with your credits and the source(s) link(s) where you got the info of Places. We'll check the list before accept your pull request. You should also remove all the comments after line 17 (that is a resume of this guide to ease the job).

Your code should look like this:

```
$states['VE'] = array(
  'AM' => 'Amazonas',
  'AN' => 'Anzoátegui',
  'AP' => 'Apure',
  'AR' => 'Aragua',
  [...]
);
```

Note: "States" is the generic name equivalent to first-level administrative divisions likes States, Provinces, Regions, Departments or whatever this subdivision is called in your country.

## Setting up the Places

1. Go to the `places/` directory and open the file you just move from `template/places/` with your favourite code editor.
2. Find `$places['XX']` (line 19) and replace `'XX'` with your country code.
3. Find `'AA' => array(` (line 19) and replace `'AA'` with the first State Code you entered in the `states` file in the previous section.
4. Begin adding the State places: Add a place per line as follows:
   ```   
   'Location 1',
   'Location 2',
   'Location 3',
   [...]
   ```
5. Repeat steps 3 and 4 as many times as States you entered in the `states` file in the previous section.
6. Edit the header comment with your credits and the source(s) link(s) where you got the info of Places. We'll check the list before accept your pull request. You should also remove all the comments after line 17 (that is a resume of this guide to ease the job).

Your code should look like this:

```
$places['VE'] = array(
  'AM' => array(
    'Alto Orinoco (La Esmeralda)',
    'Atabapo (San Fernando de Atabapo)',
    [...]
  ),
  'AN' => array(
    'Anaco (Anaco)',
    'Aragua (Aragua de Barcelona)',
    [...]
  ),
  'AP' => array(
    'Achaguas (Achaguas)',
    'Biruaca (Biruaca)',
    [...]
  ),
  'AR' => array(
    'Bolívar (San Mateo)',
    'Camatagua (Camatagua)',
    [...]
  ),
  [...]
);
```

Note: "Places" is the generic name equivalent to second-level administrative divisions likes Cities, Municipalities, Districts, Communes or whatever this subdivision is called in your country.

### Send a pull request

If you completed the steps above, you're ready to send a **pull request**. Thanks in advance for your contribution to improve this plugin.