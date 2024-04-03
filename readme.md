![Nar-Anon Banner](https://naranonfl.org/images/header-people2.png)

# Nar-Anon Theme

A port of the legacy Nar-Anon website from 2023

## To use this theme:

Download the theme into the `/wp-content/themes` folder for the Wordpress site and then activate it within Wordpress.

## Required Plugins

For this theme to work, there are a few required plugins. Please see the list below and make sure they are included.

- [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/)
- [Editor's Kit](https://editorskit.com/?utm_medium=wp.org&utm_source=wordpressorg&utm_campaign=readme&utm_content=editorskit)

## Development

There are not any build tools being used for this project. It is using vanilla CSS, jQuery, and PHP. Please note the notes below about folder structure.

- `assets` contains fonts and any other assets which need to be used for the theme to work.
- `includes` contains different pieces of data for use in the `functions.php` file to prevent the file from being hundreds of lines long.
  - `acf` contains configurations for all of the CPT and block fields in ACF. This helps to keep them organized and easy to digest when working on them. The naming convention should match the `partials` naming convention.
- `partials` includes the different components of the website (blocks, headers, etc) with the type of component prefixed. This is where the theme pulls the pieces from.
- `scripts` contains any JS scripts which need to be included.
- `styles` contains the css files for the theme. There is a variables file in the root which contains palettes and any CSS Variables which we might need. These files all get imported into the root level `style.css` file.
  - `base` contains any styles which are global, such as resets, cascading styles, Wordpress specific styles, etc.
  - `blocks` holds the styles for each block that has been created as well as style overrides for default WordPress blocks.
  - `components` contains styles for component classes which can be used within `partials` but don't have their own markup, such as containers and buttons.
  - `layout` contains styles for specific site-wide layout elements such as header and footer.
