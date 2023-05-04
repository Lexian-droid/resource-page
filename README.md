# Resource Page

Resource Page is a PHP-based resources page that lets you create a sleek GUI for people who want to download contents from your website. It's easy to use, easy to integrate, and completely free and open source under the GNU GPLv3 license. Whether you want to share cat pictures, dog videos, or anything else, Resource Page can help you do it in style. 😎

## Setup Guide

To set up Resource Page, you need a web server that supports PHP, such as Apache. You can use Plesk or any other web hosting service that meets this requirement. Here are the steps to follow:

1. Download Resource Page from [this link](https://github.com/lexian/resource-page/archive/refs/heads/main.zip) and unzip it.
2. Copy the contents of the folder into your website's root directory (the same folder where your index.php file is located).
3. Open the config.php file and edit the following variables:
```php
<?php
define('TITLE', 'Lexian Resources'); // The name of your website
define('BASE_DIR', './files'); // The directory you want to publicly display
define('HOSTNAME', implode('.', array_slice(explode('.', $_SERVER['HTTP_HOST']), -2))); // Automatically populated, don't touch
?>
```

4. To host files, simply create a directory inside the BASE_DIR folder (by default, it's called "files"). You can put any files or folders you want inside it, and they will appear on your website. For example, if you want to share some cat pictures, you can create a folder called "Cat Pictures" inside the "files" folder and put your images there. Resource Page will automatically list them for you and your visitors.

That's it! You're done! Enjoy your awesome resources page and share it with the world! 🌎
