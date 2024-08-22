# website-Pre-Loader


# WordPress Preloader Template

This repository contains a simple preloader template that can be easily integrated into any WordPress theme.

## Installation

1. **Download the Preloader Files:**

   - Download or clone this repository to your local machine.

2. **Add the Preloader to Your Theme:**

   - Copy the `preloader.php` file to your theme directory (e.g., `wp-content/themes/your-theme/`).

3. **Integrate Preloader into Your Theme:**

   - Open the `header.php` file located in your theme directory.
   - Insert the following line of code right after the opening `<body>` tag:

     ```php
     <?php get_template_part('preloader'); ?>
     ```

4. **Customize the Preloader:**

   - Open the `preloader.php` file to customize the preloader styles, colors, and animation according to your needs.

## Usage

The preloader will automatically be displayed whenever a user visits your website. It will remain visible until the entire page has loaded, at which point it will disappear.

## Customization

- **Background Color:** Change the background color by editing the `background-color` property in the `#preloader` style.
- **Spinner Color:** Adjust the spinner color by changing the `border-left-color` property in the `.spinner` style.
- **Spinner Size:** Modify the spinner size by adjusting the `width` and `height` properties in the `.spinner` style.

## Support

For any issues or customization support, please feel free to reach out via GitHub or contact us directly.

## License

This preloader template is open-source and available under the [MIT License](LICENSE).
