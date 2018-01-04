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
define('DB_NAME', 'coroman1_dbcs');

/** MySQL database username */
define('DB_USER', 'coroman1_dbcs');

/** MySQL database password */
define('DB_PASSWORD', '2gSo5)p.K1');

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
define('AUTH_KEY',         '83kvohoeqi62ynqjcqqcyuhotk56gfdcyua49pwl6ecyj0pt1bnmxal7zndzstkh');
define('SECURE_AUTH_KEY',  'qg5sr0awdtzzo8sdbhjzqclvsrv1wg3lzwzrlykiwca0auaw45caw6qv5y5n2skd');
define('LOGGED_IN_KEY',    'ezkjtcprye5ji28g9hweqx6tfexfkmxxd0ugenhokjwtsvfwqrhfwaeuel9kgcgg');
define('NONCE_KEY',        'znkwglukmcdmmkiymempez89ksn6skeraoep28xlcz9icaxjiml8pie4gvjxksft');
define('AUTH_SALT',        'scdpa4g2na7f7csfneswnld6iayxfcctofaveixsri3yscrkqbduzbktzsurnwec');
define('SECURE_AUTH_SALT', 'k0m5a9dn6refc9m61or9jtajswlppeuycx3guwmneut0egaewkhifxy43zuukxap');
define('LOGGED_IN_SALT',   'qka4vzkcv04rkeao3zvglh5vwkkk1ky2ge4ke5kpkcjusn7pjnniw2uqamuqnzov');
define('NONCE_SALT',       'cgdoxzlye1hbdmrwdtfyzz8quolizg8xltq9rteebsogpuprlniate547sssstiz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbcs';

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
