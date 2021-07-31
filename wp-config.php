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
define('DB_NAME', 'wordpresDBagdxp');

/** MySQL database username */
define('DB_USER', 'wordpresDBagdxp');

/** MySQL database password */
define('DB_PASSWORD', '0kKSe25Hh0');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 'R@cOZ181k[dVOHH9t9t#Gi6;;#;#eeWPI+AexqqHA3{{,X.bTTM>vnunEj7,@!z');
define('SECURE_AUTH_KEY', '[kpGaKWG:S8|w!9|wdtl5HeL5_D:9]w;-lSqaH;LXH;*9]xit]xL+mTDPmTA]L6H;');
define('LOGGED_IN_KEY', 'uc>}g}jQvN3V[v8|Z>cgcJC8|[_o-sZdKC9-t#aWwOGZ1~9ta.WhD99#_+ieyLHi6');
define('NONCE_KEY', 'vZC55_-|skoVOhOKK1:8-~ldaH9D]#:-txdqD]P#tDxe#aHiP.M*;<uyqXUM37,^<');
define('AUTH_SALT', 'b3fnfbM6UA{$}jUrcN37M7>y|vUscJ4YJ4,}@0!rczkRCgRB}J4!-gRoZK4ZJ4|N');
define('SECURE_AUTH_SALT', '<.TmXH;EA<yu{yjfQqm6MI*B>yvfzjgMrnYBYFB{y>,vcYvcNJjU73N74^r:@kVR');
define('LOGGED_IN_SALT', 'ogN804gYNF8B4}|F804}|@sk!-~wodVORKpVSKC1[VNRKC0[!|@1[!-~woh-tlpha');
define('NONCE_SALT', 'c[-:wVeS1S5-D_l#lai_]t5+p*eSbA;Aui*mT2M{uuj$fTfT6B^^$fUfU7B0vk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
