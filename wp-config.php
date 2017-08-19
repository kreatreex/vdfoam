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
define('DB_NAME', 'vdfoaznl_vdfoam_dev');

/** MySQL database username */
define('DB_USER', 'vdfoaznl_vdf-dev');

/** MySQL database password */
define('DB_PASSWORD', 'tp}E7@FMEIJ.');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ckth4a40a59faqx2terzbev9686uv7kk1n6gfgdybrubc3dqbzuo2lhm2jj4np1z');
define('SECURE_AUTH_KEY',  'mjih1saiqp5e8ujncjoyunmgn8u8hqgxtnpaluru8gwxem1optetybg5t5a92kc8');
define('LOGGED_IN_KEY',    'tt4l1oug5chcauj8m8kuvae8wfeq60z045ntd5lmeizez49hqvuasbmfs8nykk9y');
define('NONCE_KEY',        'zyszz4ili2f8zviywtmzx5tx5rgzkvxlalihg0hejb6ewikplvao5qmywf8qqjuo');
define('AUTH_SALT',        '4rur3qiuf6phb5glaz8zbf7kdvvqxmyeel8ft4ifif845zs3cwrxdnsheqda58fe');
define('SECURE_AUTH_SALT', 'aqa3qun5jb9ymmsxcgpz0jxnwbtn6i3hoovm2fgetwhn8vmnbgfn4n4i7arhffne');
define('LOGGED_IN_SALT',   'rpgmkamxncfnzfvzqwpuvzeqvholgx6rw5mxxkcpvkdmai0p0ufvyyq8k1alrnnb');
define('NONCE_SALT',       'frjmmfewgx6lqcxlfzjihiynoyyb4uodcrpwffvsjh9bzyhwibxkeynmq3wof4ic');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vd';

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
