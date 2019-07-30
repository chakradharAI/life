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
define( 'DB_NAME', 'life_db' );

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
define( 'AUTH_KEY',         '3DGr0_db,UvF9Ld$zvCD=KMu7?hT3K!.=L$B~a?tq>9gaM(QKUR*V`8&:YWWzUX:' );
define( 'SECURE_AUTH_KEY',  's=<r7=T{:`ca?mhOd(`ish+}61~`#nU;6llB %Q>FXf3)xI<qX&7# x ~+~M2n3p' );
define( 'LOGGED_IN_KEY',    'uV??e-6YB@@^2H|}xDg5<tSwlRY:]XqXg{Fa/BhMFs655cAY,C`KBm(]%Hie3Wf%' );
define( 'NONCE_KEY',        '1mq W9kn *O<yB`~p0hpcO.occ.8ywxBZ!4, cBI>RG@V(n6B-~Pyo;{I?Jd@[<v' );
define( 'AUTH_SALT',        '#CneI705Du%vV&CA?Si503XLd;kF;8Q~M5[9{#bE7VW@Z.B|LLQ(Xs@xKyALmqU>' );
define( 'SECURE_AUTH_SALT', 's-)y4lll/wHQc *X5opuW=6.l:zB8,2eWnTN}Y_{<aCi,u+8n`pYaXNiMC7e#&.g' );
define( 'LOGGED_IN_SALT',   '^Is3=>BJjJz.:0iHl63g0Ym6#/X@;`{Ps$# M-,UvuJFk~5HF[~%3GKO`np>%0 1' );
define( 'NONCE_SALT',       ')#`0~~e^d3=k*>e| YEp7s3t+F#Ik=h]dlAqF}WkB%t#pI3,oYYn5cgMvsy zVj(' );

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
