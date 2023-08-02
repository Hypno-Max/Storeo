<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'storeo' );

/** Database username */
define( 'DB_USER', 'storeo' );

/** Database password */
define( 'DB_PASSWORD', 'CKkXtuoRpH3L' );

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
define( 'AUTH_KEY',         'Y9zSE4O0mP<~}Z+* 64A%NA?i15;Vst;<gqejOK]84wYER 7,}B({_!><Ym+bT8/' );
define( 'SECURE_AUTH_KEY',  '5Ew8VM8h4N0[fP7Tzf~&0cpp5[@C]3VlNlWAvUp(fvRxu52}Q {#Yczwz@=^q{E0' );
define( 'LOGGED_IN_KEY',    'Yw)&bac)t<]c|#{Vo0y,e:8El;dwuTQX5>b10n!)eU_F#(J__Jd31HH$;@n0WWX$' );
define( 'NONCE_KEY',        'K5]~(baMaOw<&e`e&:iYvw3/~2]]8CUncotqV|:!|JYtx<uM/`XC7gX*[aA1G`1Z' );
define( 'AUTH_SALT',        'aTse3;Q)1vB[7*}o4Av{YZ/,q^MMjW(#V9/.pqo#`d2_od$8EtCmer$3rvTF)mB_' );
define( 'SECURE_AUTH_SALT', 'Y2tr:K!X_RLtFyS*PK4kk`YV.:N)soQ:?4g!q^oNbt|j&N`-CJ}RgY]x+;eUT6p}' );
define( 'LOGGED_IN_SALT',   'WV%fRHHin,.(RD2prQC?9KX++U 9A;&fGpaalo]p7F3tX#cl$kqH9N6 RqM~TS*>' );
define( 'NONCE_SALT',       'zrlJ,Y1e=?K)p~ZI0 Af6Rk`8ak[3>JtH-S[l4vDN&WztabY-q/j?LHHuO56k`B;' );

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
