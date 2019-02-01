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
define('DB_NAME', 'magetech_auto');

/** MySQL database username */
define('DB_USER', 'magetech_rs1');

/** MySQL database password */
define('DB_PASSWORD', 'rLMel%Ov9P3r');

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
define('AUTH_KEY',         '$d_nwotW.@2r_`;IADk!w 3nC{)gC#BfkI&{_$=[Io=W*qfAhwkc{rA4(Ou{k6)N');
define('SECURE_AUTH_KEY',  '#=<1OY>7.C6i1[+2Owpe=Bg0[dD]lHdKbj<Dn 9<Ld~$hTmf<I{o&#t/x<.b3+ph');
define('LOGGED_IN_KEY',    'jKbZib_+^{#UC4:RI)E)$RWp.fpP35>uQ^+B`Yu,m>SSesQlBXS~1QcQ3=.`(r^`');
define('NONCE_KEY',        'BTN3Hb/@F_sd%4N&<s;3y5+StGsPdtrBL~Q.J? YqWER+[7K`[; 45p1e1:#?w-m');
define('AUTH_SALT',        'kSO;/4&9J;X/:GnfaY(0*!KRa3AH{&rY[O[R?ePJLSj86}i:T$zf&Pu-~W6vOrD~');
define('SECURE_AUTH_SALT', '30;=B4HWvfzk2Z?j,3dky; ?g9*fj7s5I7UM82@Cq|l RGucBXf#c7<4tweJ/F.)');
define('LOGGED_IN_SALT',   '!NUs(SWL/Ott3o29P9g#{ATf~AY_4gf$=3kQ*;^r7%`} ^/=o +es7])G~u]1G=$');
define('NONCE_SALT',       '|C9Cdq0R15CR6k$dNu3rOW-Cv#[[emq!,u<hiD%/O6R*lVle?G]}9|)GWCJ<<0*{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rcs_';

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
