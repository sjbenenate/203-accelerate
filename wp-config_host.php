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
define('DB_NAME', 'sarahben_accelerate');

/** MySQL database username */
define('DB_USER', 'sarahben_sarahben');

/** MySQL database password */
define('DB_PASSWORD', 'FHK234fgh%^');

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
define('AUTH_KEY',         'uLz3-s)8N).kLmVReIIPCA Wg8Lb|,NrGiLN%Va|kG|TfE+qQI)[b~:8jX|u4VrG');
define('SECURE_AUTH_KEY',  '5c-3@Z.a~12{N{Tlo+$!r&t$D(8A>8/9+T$|m(;6SYD{w$k>*/Fl*)Y_bX%izA&2');
define('LOGGED_IN_KEY',    '|yc%N|H+p{|v28S5i<D6%9d`?(=8bWJ8+ie!W6MQ41VntlD<pj@]@:.5P7kL#0bd');
define('NONCE_KEY',        'O<1COp-SQv_e{Il?M1:_gg.WU-_p95*~2K#*xtsIN&KN}^sL.5hs4~sJ7D^Ze.oz');
define('AUTH_SALT',        '_4f7|(0&uAj+Ev]yT-9U//cY0}bZ2/Xf$m+4+VD%!_u1Qd  b7IJI>8wo:ZY.mKs');
define('SECURE_AUTH_SALT', 'kdt-&7<?~4^T?[q5~33jd|^e_ v9XCw%*(<nyOQQ#0okJzs|Co5;jw2g/`vouV<u');
define('LOGGED_IN_SALT',   '3}ARcCBSL&.w?2:rR33Drx-Bn5m}%~8_3US0{I1Xxf`G(aKk;y_J,i{+S8<I_M7J');
define('NONCE_SALT',       ':YQ+XZu(]ElPdSVzqu]HJ05;0;piF|XXIK/VofC|{at<#qRdI^]h0%B5B!SR+08W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'acceldqk_';

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
