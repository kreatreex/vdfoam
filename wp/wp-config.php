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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vdfoaznl_wp446');

/** MySQL database username */
define('DB_USER', 'vdfoaznl_wp446');

/** MySQL database password */
define('DB_PASSWORD', ']1p9S9!UjS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7xreyqfawzvk7yjtjvozpmrtgpffnnultwujjqtwswegqjoovl41t305aifonrtv');
define('SECURE_AUTH_KEY',  'fvdyfcenq2lyppmibz5caq2wnvjzsh5wvety0dftsr9kzvyfue5byedhm5ezpae4');
define('LOGGED_IN_KEY',    '6kvg2dyezhhwuzj8ltipa4l6hmx9azavtucn90laxoru2vkdz3ncllx35ab0etrq');
define('NONCE_KEY',        'oscj2xmmrhpciujsgq3a4hybjjoixm2xzve8crebm0qlmceaempctnhcxkvdrfck');
define('AUTH_SALT',        'pllqcpm0aznua4mkfwncwsge0evnws2qtgofdzolwzzrclgezgz8ftqvuc5r5te2');
define('SECURE_AUTH_SALT', 'sjz6nltdapvph4hri4triohmaqnyyjexlwzvc9hnjsjfwbnnvy4vxakfsiumpac7');
define('LOGGED_IN_SALT',   'j6b0mop2lklt7bzce8x0mczwlvyvhmlaxnzfnjqtimwm9gqtdbu48vclqo9uload');
define('NONCE_SALT',       'olctnvjhe9bww0ynhndmcz4g7b5sarllycibuqwlquzlvug9qn2s0cy8lzpemsl4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
