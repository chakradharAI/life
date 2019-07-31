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
define( 'DB_NAME', 'life1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*Ph=gb#(446fk_gJ1vv?ue_@0z71*u+~h[~?YfX@m3@PK~JPP^G^OZ8!4Qwg_}q>' );
define( 'SECURE_AUTH_KEY',  'scNTf`:+F0|LXM?LCL7?T2q1qJ9O[s@jD/+oeFf=Sk$&;#&[rV3l/Xo]8+UWVsV6' );
define( 'LOGGED_IN_KEY',    'Du0C/C5eJO;V/2,_/Y6X$0rWO9pWUHE8y?`C7,jBs?iy~q`f2fA_Ojo@x.*?p/Bn' );
define( 'NONCE_KEY',        'Xp_iR/E|%( 1b gj1I@2t,uqLS,ez>NY2 BpgQgXd&~VI?/paT;xxy($/%G*<U#>' );
define( 'AUTH_SALT',        'e )*jL;pa<9cWCoGV+h]r-UXDgsR-BuT,.+ %|>2~}T@&8Z__aD$N~q]v-~3`>~0' );
define( 'SECURE_AUTH_SALT', 'i=E&Wg)Ip|jSLB|-FMc 3;3c,Dvi>vp+YdEUKoX&O0vjj9?}nF=mI~.=o;N;@1{=' );
define( 'LOGGED_IN_SALT',   'Hcf.cPyq&+C^rFL,)NN<z@}xF3^oli{ {QZ|9)]7_2*J[yw<Hur6;Ex,wMn:9`<-' );
define( 'NONCE_SALT',       'txrphTfnu#FJ#VHMLx<aMejh)b#0f_NJ=B{/3EhAa-ws2}4.Ca%{#1&mc`g/rUN,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
