<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl59-a-wordp-md0');

/** MySQL database username */
define('DB_USER', 'cl59-a-wordp-md0');

/** MySQL database password */
define('DB_PASSWORD', 'sg!rTw3DG');

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
define('AUTH_KEY',         'E3k#0(pg5ZOEQhXV2O7mS3ca8geXwTnb!YkeS2ssA+J!Qt!J=eg4SszSbEJJQVKV');
define('SECURE_AUTH_KEY',  '(erCsBxiGQFhkmhmmAo7xO^R)pA2b+9=(s-78fuYVA^Op+M^QtKQYVvb8iQ49XFa');
define('LOGGED_IN_KEY',    'ij4lp!D0Gw^YI=sSh^t/aUR=jJtB)+6PDfbc=gcEP7ACjx2U(hAxpaWRwKDfFG0/');
define('NONCE_KEY',        'ej(pQwTc/(6^yuN#+y_tTcSPEOq(Z4woYwF1zwf-07=U=FUZl35jD)OV9G5LJryR');
define('AUTH_SALT',        'c+2oeSSz+#6Z9Iqep0MICit6QXoYaK_g!De+MS2OvOY5RseIA4O_4rjT02-xZqG1');
define('SECURE_AUTH_SALT', '_EeVhP-^b7V!0dmO-^+LiCbaRCa48dz!(q)s1kqgV264oyn3Imc1h(Kzc!jSIw21');
define('LOGGED_IN_SALT',   'fu)ZrZWNZvg/0U/e^^VT7M)(qB2#Ok)yYIJq=z17vM+Mh/ipd_KPWi8V9fdIwA+q');
define('NONCE_SALT',       'Yh)5XKAgp7VpEyu_QWjXZSyy4W2J2Uer6ELWgwl7-UaYxV6X/_Tu7YXh6JgrLQLn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

