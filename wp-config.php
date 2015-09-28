<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //





if($_SERVER['HTTP_HOST'] == 'localhost'){
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

}else{
	//LIVE SITE CREDENTIALS
	define('DB_NAME', '');

	/** MySQL database username */
	define('DB_USER', '');

	/** MySQL database password */
	define('DB_PASSWORD', '');

}




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
define('AUTH_KEY',         '2<xAxt6pcB,!wF-[d2se0=rbAoBJoE=6_NqqUmv-j]S0Ia~6p829Q{@4|{|RugkI');
define('SECURE_AUTH_KEY',  '%<.j(w>7Oi~y[5t0Yl_K==+tBvzOEG|Tt3M[<%}=!:vtMV#S=N-WK aJ~[V%%h~$');
define('LOGGED_IN_KEY',    'pXWJ myo+Q,cM0I>)I$=,;jtHfh=4x~oQei<khyy7-:s_q8ApS<d+funm|]c3A>N');
define('NONCE_KEY',        '@8F{8Tz%|M[H*,)JhmvJd<,S_`fz{jw=P3M*eG)TrrEVYG~q?IrrY`&$de_2L0Y4');
define('AUTH_SALT',        'M7PMc,v<X;l)JH0H;8c@RE.bY)j$6%bTScH1(z%u=|R+|*eW=_O_+_R4B7Yl8V.P');
define('SECURE_AUTH_SALT', 'GwZX;b0SI?eY/Yu0?Hl$0 +fv+7Pslt[n?1;/Q59RduYEDG-CoKM8+)$P]:#4V+F');
define('LOGGED_IN_SALT',   'Y_f}C$fW_|Fl,-Q@|AZ:eRE^<cvC JdKO+x+^ZRkJV=}|e%-(3%H}S.{qYyc]i$S');
define('NONCE_SALT',       'q:)(MJ;py=,- 9O~`sxI3+Vb@/Fy+w)KI5a&!j.x}M+GNzpYl@b|z{-_@M+J&@|c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'undertaker_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
