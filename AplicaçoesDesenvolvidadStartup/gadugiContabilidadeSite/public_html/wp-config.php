<?php

define('WP_CACHE', true);

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gadugi35_wp373' );

/** Database username */
define( 'DB_USER', 'gadugi35_wp373' );

/** Database password */
define( 'DB_PASSWORD', 'p@9zS7S-79' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm7yh2lmucdboduzns3xq8akuh7s9sqkljqrj0u0ny5cpyb5oswuw2hirre7q3feq' );
define( 'SECURE_AUTH_KEY',  'psnnbow1qgi9lr9fxisdjqoh437uymmqvclxzjcsilkfkyhccttevzfqiylxjgtq' );
define( 'LOGGED_IN_KEY',    'u3h2ztjg2i0bnmor5nl9l3ws7macqxcr9c7caganjt8rnzp9dc9mykoxkvhdomlz' );
define( 'NONCE_KEY',        'qrrcgedjv2je1bc8ubeqd6chcximjih1r2hd7rywtfcjryhgepivgvzjlkvc6dhj' );
define( 'AUTH_SALT',        '4kun0v7ey6nwe7xrxegh7t5z551bshg8z7xsqpi1tijuieq22zy3zgs7t0si7m2i' );
define( 'SECURE_AUTH_SALT', 'tlgbcakiy7vnvjjb5ly1eplekvi9nxzjymdvihcshhwsyo7mdx03zgseqn0y2gv1' );
define( 'LOGGED_IN_SALT',   '24xme8lkj2gn4ten2d7ngbtewuh0fp7iphrehloukvr3ujtfw4024ntis4ablmhu' );
define( 'NONCE_SALT',       'jxhhnn9nkgcvqfvsalffydbfyaptzb7qq1qlbpj2v1ikx0dody0xxmjtnvda8mlp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxjl5_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
