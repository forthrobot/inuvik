=== Inuvik Commerce ===
Contributors: jond, barry.hughes, clifgriffin, jdillick, lorenzocaum, chaoix, crunnells
Tags: ecommerce, e-commerce, wordpress ecommerce, inuvik, commerce, shopp, shop, shopping, cart, store, storefront, sales, sell, catalog, checkout, accounts, secure, variations, variants, reports, downloads, digital, downloadable, inventory, stock, shipping, taxes, shipped, addons, widgets, shortcodes
Requires at least: 4.4
Tested up to: 4.4
Stable tag: trunk
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

An experimental, unstable ecommerce engine based on Shopp.

== Description ==

Currently, Inuvik Commerce is not intended for general usage. For a stable platform, please use
[Shopp](https://wordpress.org/plugins/shopp/) - this plugin is a fork of Shopp but lacks the
same support structures and test coverage.

== Installation ==

It's just like any other plugin.

== Changelog ==

= 1.3 (Shopp) =

* Added reports with charting and exports
* Relabeled Promotions to Discounts
* Added icon font and other vector art
* Implemented PHP smart loading
* Improved checkout experience and templates
* Added schema.org support
* Refactored classes for better encapsulation and tidier interfaces
* Added direct URL support to storage engines
* Introduced support for `wp-content/shopp-addons/` directory
* Improved tax and discount calculations
* Added compound tax support
* Implemented totals register system
* Improved session handling
* Fixed slow queries
* Improved order management
* Redesigned unit tests 
* implemented continuous integration developement

= 1.2 (Shopp) =

* Converted products to a WordPress custom post type
* Converted categories and tags to WordPress taxonomies
* Added order event system
* Re-engineered APIs to be pluggable
* Introduced Developer API
* WordPress Menus support
* Replaced WordPress Page placeholders to Shopp virtual pages
* New notification email templates
* Added subscription support to PayPal Standard
* Added support for authorization-only transactions
* Added support for refund and void transactions
* Added shipment notices
* Redesigned shipping calculators
* Query speed optimizations
* DB record loader infrastructure
* Auto-generate plain text email alternative 
* Implemented unit tests

= 1.1 (Shopp) =

* Product addons
* Storefront Search Engine
* Tax system improvements
* Image & Script Servers
* Scriptabe email templates
* Cart Item discounts
* Passes PCI scans
* Offline Payments
* 2Checkout and Google Checkout included
* New Theme API tags

= 1.0 (Shopp) =

* Initial release
* Content templates
* Shortcodes
* Widgets
* Product Variants editor
* PayPal Standard

== Frequently Asked Questions ==

= Why fork Shopp? =

For fun, pleasure, experimentation and excitement.