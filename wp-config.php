<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'resource' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't}x,;0H{1d&eAjvj_[zdGOE[yB_[wIA0Sg<Rw}06T4 V%NBwdL0jXNFyG2HO2+`P' );
define( 'SECURE_AUTH_KEY',  'N;}CFM`+I961M1X-(t<}d sNnMSbn@*N#t~=enMhxM|pNYSaK$JwiSzklkfJ$Zok' );
define( 'LOGGED_IN_KEY',    ')oSdHWwewI|K+t|`n-bsB$q98?9YF#OEgHhyC+d90HBtlyH@c,*x[=0:n7li;g[a' );
define( 'NONCE_KEY',        'ORWKpP&bA}Q7nrK</&e(.9<&2>L&,{1+i  uGbEFP[S^H?]@55.]<lmK{KAV*085' );
define( 'AUTH_SALT',        '#jO4|l?%|w>2aLscQs^K$$K9RPCwF{/nsP-s2A^5_cE]nyJa%P7b5D0)Di6)[h}]' );
define( 'SECURE_AUTH_SALT', 'iln^2!8[kP2v#iytx]MMo#RmMeGxTf|g%A<!zVSksZK|v+3j&b57TfJrDb)![).<' );
define( 'LOGGED_IN_SALT',   '8c)!#u+qDYr}cs->7RyL2 ~G>opQ..)+oz!zE uuW8E@*BA_3^^}Gn,KWqEFE9QA' );
define( 'NONCE_SALT',       'f$b,PH%D4Zyd6.0~Jn_H5S!}zqkl)qalQF=g];v.xd]pWKZ!}eqeRhY.V<o6uRa9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
