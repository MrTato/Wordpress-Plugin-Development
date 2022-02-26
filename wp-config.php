<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zleGh/O3bajvZm0uwMzGMqRlPe/wHX/CaalJomsAlhVs0vyx3wxE0TGIPKG2bACu+6siJPPRx+9uA5Zy11hZKA==');
define('SECURE_AUTH_KEY',  'kISQ7Yh6uKHsix+DnQ9lClU9D1DSZIAWVY8i6XFNj7AD9BxhLen78Lg8qu2bdnPNApnt8VFlWnnIyGf2gIISlQ==');
define('LOGGED_IN_KEY',    'aO/xhDf2NeSLaEzqNGlcjrN/xfePEZjdRuW09TFAqycZZmlE2fDTtTRR81Ky0T0T5KHp+9KoVBDu9nCc+F8KUw==');
define('NONCE_KEY',        'pSmqanDjBMB1pAjSdwTTZiCDm5lDGUj747W9V95SH2+335+xOq+XrX+nfxIQTXcIoUUlZdpYKBlu4BxGAVWPyg==');
define('AUTH_SALT',        '3dCqB8OKjSPhyBhgbyPm3oSOzNpWjXIwIl161QZHgWEbzU5dG8GNtzi7HY6RfrMLcaMhKLwZCc1HPVMuYKrTrA==');
define('SECURE_AUTH_SALT', '9+aavS0M5ofgetC09dbyXyeJlyV4wXtKiwZGKuTfwx9tfKZLq822vwNLS7b2rnWbj4PlnkrTt/g0tI8qc8PRhg==');
define('LOGGED_IN_SALT',   'wugkGpCGK+0/bRSc7YrRnEaVeyO4CD+eEjfy0xieFI6ElorhOeqXi5SQ76QAfKaIYPYAN6siHJK0ll/IQlKDIw==');
define('NONCE_SALT',       'EcqhQZybE+3PhjGmbzluWXwVAvvCCSK3FHeAIAbSenymsG52J3juCxBjB7G3tzsvoONd3fqhRBRNFwyMS9fYjQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
