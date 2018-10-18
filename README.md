# WordPress Theme Starter Type Eight
### wordpress-theme-starter-type-eight

## Distinguishing Features

1. String/ACF/Options Content

## More Features

1. Separation of logic from markup
   * There's a lot more to do here, but it's a start: Logic lives in the traditional WordPress template files, along with minimal structural (skeletal) HTML (this applies to markup decisions that I'd like to "enforce" regardless of design decisions in this project or that); markup mixed with minimal `echo`s and loops lives in the `class-view-*.php` files.
1. Design-agnostic template calls
   * Sidebar template and view files are included, but `get_sidebar()` is not used anywhere. Want a sidebar? Add whatever form of `get_sidebar()` you need, anywhere you need it. And if you want to avoid touching native WordPress templates as much possible, there is always the option of adding sidebars (and virtually any other construct) with the included hooks (see "Features" below).
1. Traditional WordPress templates as classes
1. As much of the heavy lifting in the response generation process as possible is encapsulated in utility classes (`public/php/class-public-resources.php`, etc)
1. Code organized in directory buckets that represent the way I think about where to put something or where to hunt for a problem I'm trying to identify, etc (especially as applies to the way I deal with these challenges at 3 AM):
   * Top level organization by `admin`, `customizer`, and `public` (because these _site modes_ are what I usually have in mind when looking for something)
   * Additional top level bucket, `toolset`, for utilities that don't necessarily fit into on the above buckets
   * Second level organization by type of code (`css`, `js`, and `php`), because, again, that's where my mind turns after I know which _site mode_ I should be exploring
   * Some code-type buckets are further bucketized to set aside a particular sub-type (like `public/php/views`)
1. Theme Hooks
1. WP-CLI

## Included

1. Bootstrap
1. Browsersync
1. Composer
1. Customizer (sitewide and specialized palettes, tool selections and settings)
1. Font Awesome
1. SASS
1. Webpack

### Included by Merge

1. Soil

## Required ( checked by `requirements()` method )

1. None (yet)

## Supported [Optional]

1. ACF
1. Stage Switcher
1. WP-Password-BCrypt

## Roadmap

1. Easily switch _any_ metabox on or off
1. Add switchable [theme support](https://codex.wordpress.org/Function_Reference/get_theme_support)
1. Integrate one or more comment superchargers
1. Implement switchable comment handling on every [applicable] type
1. Refine the code:
   * Move more of the comment handling code to `comments.php` (and out of `class-view-comments.php`).
   * Enhance comment form with [parameters](https://developer.wordpress.org/reference/functions/comment_form/) that are intelligently autoloaded from theme or SSP.
   * Enhance sidebar handling: Some sidebars are probably more appropriately marked up with `<section>` (or even `<article>`), rather than `<aside>`
   * Standardize implementation of behavior changes: KEYS? Overrides? (For example: comments enabled/disabled in this template or that...)
1. Implement composer? Probably... Or, alternatively, package this project to play nicely with composer one level up

## Using This Starter

### Make It Your Own

I like my naming conventions and organizational choices (etc), but they might not be a perfect fit for you. So fit and finish to your heart's delight!

1. Namespace carefully and consistently (visit all PHP files)
1. Remember to visit `style.css` and:
   * At a minimum, rename theme to disconnect your project from automatic updates that may overwrite your work
   * Then change as much as necessary in remaining fields

### Or Leave it As Is (More Or Less)

All the "Make It Your Own" ideas outlined above are completely optional. You could just as easily leave it as is, more or less, and there are two advantages to doing so:
1. Updates will be easier to merge into your projects if you want any of them. Note that I'm suggesting "cherrypicking" portions of each update if and when you need them, and not updating the theme overall because as a _starter theme_, it is expected that users will edit as needed, so I won't be packaging new code in productized updates.
1. The less you change, the faster the startup (and the above mentioned cherrypicking through new code in the repo).

### My Preferred Process

While you can certainly use this starter in any way you wish, there are a few intended processes that if used, will likely make your work a little easier, especially if you want to merge in future updates. Since I do dogfood my own work, I observe the following as much as possible to make updates easier:

1. Renaming...
1. Implementing views...
1. Autohooking...
1. Merging in updates...
