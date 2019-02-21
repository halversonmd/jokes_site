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
define('DB_NAME', 'jokes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_HjbSa,4_G{F)7`tCemYGc|%YJum_|Drb];KC(mM,RrIC%(v~cn/:_Fv%M-QrHo$');
define('SECURE_AUTH_KEY',  'P:bXn1@V>88/_Bs1@&TT6PN-lr2Qqyf7p<|:68FW;`Fd])LJ8#jIg||$&j}_&n#<');
define('LOGGED_IN_KEY',    '_r4-3h 2_rIv~KaPr@YcJdS>Faur;KJc+fzk#pT0,JN$I.fp6Ox84x_m{e1M=txX');
define('NONCE_KEY',        '`F~74^ajHpM:<XK%Wt_0V}C!xA*mh0Uy:bJ<LO)k?l^%>h5S(gZnB3GE$Q<|s$uO');
define('AUTH_SALT',        '1cD6p?Ew}?7pumu:f:*kj:,0Z(pS-*{2U&@Dr`7[y -ao*XDq8@SO&MEmrXv1|S4');
define('SECURE_AUTH_SALT', ' <bU|F>fR`fJ3 IvdFW*eL*Z)A%am(<b<K-bdYhq^NjM*Z}pVPWEp nd-Vw8l`.5');
define('LOGGED_IN_SALT',   'jNsWqsv81&sU)3}X(:+?`8p0$kwd+Xp,A yoD^jmoDqI9dGZO7c>e~`)WdcH.X0|');
define('NONCE_SALT',       'O.u<KmC}xH+D$ %V@TD}oq+jz[ 9-ALWFP@,w3-`2x`>u`r`M8&j|-{1b8}27>bW');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
