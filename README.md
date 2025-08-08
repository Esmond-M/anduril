# Anduril Theme for WordPress

Custom theme for [Social Movement Technologies](https://socialmovementtechnologies.org/), designed for flexibility, rapid development, and integration with custom plugins.

**Project:** [GitHub Repository](https://github.com/Esmond-M/anduril)  
**Author:** [esmondmccain.com](https://esmondmccain.com/)

---

## Getting Started

1. [Download the latest version](https://github.com/Esmond-M/anduril/archive/master.zip)
2. Upload to `/wp-content/themes/` and extract.
3. Activate the theme in **Appearance > Themes**.
4. Recommended: Install the [SMT Great Reads plugin](https://github.com/Esmond-M/smt_great_reads) for custom post types and fields.

---

## Features

### JavaScript & jQuery
- Custom scroller and slider widgets (`andurilScroller.js`, `andurilSlider.js`)
- DOM-ready JavaScript setup in `anduril.js` for easy extension

### Theme Structure & Functionality
- **Widget Areas:** Eight custom widget areas for flexible layouts
- **Custom Widgets:** Eight widget types for content and calls-to-action
- **Page Templates:** Five custom templates for unique page layouts (`templates/`)
- **Custom Post Type Integration:** Designed to work with the [SMT Great Reads plugin](https://github.com/Esmond-M/smt_great_reads)
- **WooCommerce Support:** Custom templates for checkout and shipping
- **Bootstrap Navigation:** Includes `wp-bootstrap-navwalker.php` for responsive menus
- **Modular CSS:** Organized stylesheets for widgets, toolbox, and action network features

### Extensibility
- Easily add new templates in the `templates/` folder
- Extend widgets via `inc/widgets.php`
- Custom sorting and ranking logic in `inc/anduril_sort_posts/`

---

## File Structure

- `css/` — Theme stylesheets
- `js/` — JavaScript widgets and utilities
- `inc/` — Theme logic, widgets, and sorting modules
- `media/` — Branding and UI images
- `template-parts/` — Navbar and reusable template sections
- `templates/` — Custom page templates
- `woocommerce/` — WooCommerce template overrides

---

## Integration Example

Custom post type items from the SMT Great Reads plugin will be displayed on  
[socialmovementtechnologies.org/campaign-support/great-reads/](https://socialmovementtechnologies.org/campaign-support/great-reads/)

---

## Support & Contributions

For issues, suggestions, or contributions, please use the [GitHub Issues](https://github.com/Esmond-M/anduril/issues) page.

---

*Maintained by [Esmond McCain](https://esmondmccain.com/). Fork, extend, and use