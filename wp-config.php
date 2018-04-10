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
define('DB_NAME', 'freeandsecure');

/** MySQL database username */
define('DB_USER', 'freeandsecure');

/** MySQL database password */
define('DB_PASSWORD', 'VTCzpbT5yrnBdbfH');

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
define('AUTH_KEY',         'p,tJccP;.(2faLBR$LVd</FsLx0]|4Aue}]SG[>izm^x}jR{65iT@!]iXvP(R}-{');
define('SECURE_AUTH_KEY',  '&Mivu75ApGFNe.$VZ!J^uQYi4ap;e;qbnMZW=7LR7k/[XMo:39qG:gFz{Jy}pDS(');
define('LOGGED_IN_KEY',    ';hNFC.@;Xf5JUXoEX67KkO!z_sx#20CSMZa-8RmGln.$^=$9A*`<wHi;Sn2`M/?&');
define('NONCE_KEY',        '*a:9/qK<hVMUg%g$~uZq@]5W!iLYL,o(Bg(!x6AHGG+GDf9/q~*OI;aUYlupzWD!');
define('AUTH_SALT',        '|o74&l>81` O6s7eh&bw7*:ErP(:$4tcTO`,vi%t_Kt=v&7%(vLF*_v}&JFY l$?');
define('SECURE_AUTH_SALT', '?ip.6E3@kktIcP:G7zzppNW]O~k+S1dR3K3mDCbT5M~|BDwY+{6le/#0|doP_Du{');
define('LOGGED_IN_SALT',   '{.IZy5G!kb$Dak2p/Yh+F(^#r(r%JA MW@[m)p$9V~xsd}c<D=zaF89>[$s/`HQ~');
define('NONCE_SALT',       'w[V/QiflPlNfPK>g69 ww-Bek0B>Z7Fe1,H99.e^H52GHvaI`4G=O&;h^n@_3*6h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'freeandsecure_';

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
