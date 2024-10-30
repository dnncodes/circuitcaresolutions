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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'circuitcaresolutions' );

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
define( 'AUTH_KEY',         'Kf+A5PXT+(jve{:cn@$CnO[_J.:_Wt.1-G}EJuERs*E.sg;~afh6No?:IOp?7?YV' );
define( 'SECURE_AUTH_KEY',  'pm$ *0O$fMC4u:euWNH-k<=h|E(>nz%Xlp9%*,..D1lGq;H6NX]2mEM1k+[*d+eW' );
define( 'LOGGED_IN_KEY',    '9u<~C=S#n5dFL(_9yJJ.cl`+(a7*Ln#i]DU}0mA0u^z(.uyCk@~z~%PLkL<eOJ6z' );
define( 'NONCE_KEY',        '|8I~3pP=1ISvcH1=QkyuXG4t!QG)8Z>aKct}sD=;q=O}!zBxk;m#6cWs`X54p/N@' );
define( 'AUTH_SALT',        'ci,GI*;ypD.6m/@0F7EG5 8cyZuz!,(Y .i{4Pp0qXB*+cmP+WWcFZ52-CxP%e?w' );
define( 'SECURE_AUTH_SALT', '4#*Z!V-ug:7rY a0;#Pf97A.Em] ^U1FZ{>o]K^.Uu=[D?g?5KgI~dRjB_TrNt4~' );
define( 'LOGGED_IN_SALT',   'iJbyJ H1(f7Y!uPvn-2(ITnZ3}dlQ>Y%w3hq!b9#Vu<g qlFJ$ta{ra9oKM?IIQn' );
define( 'NONCE_SALT',       '`y7gKd;S3O`2V->^6^%%xx*R&_+q$RMm7z!~r`A1}#smN+_kwB}Xb%ux~Pq0#*x;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ccs_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
