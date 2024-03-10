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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db1' );

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
define( 'AUTH_KEY',         'J+<P&:>c5Re`ks(]MB`rIs#)yi->U!mjr<`bWjP,?(3MtUmcwG68SDA5pQ{[{Nqq' );
define( 'SECURE_AUTH_KEY',  'I;dlx`a,H6e],`9TmTYlmVb#Ev5_2-f#95&NqMBKWFhHi8l(DAAK#O>t{heQ}y|P' );
define( 'LOGGED_IN_KEY',    'JN6Y,O}?nslx~H?(xd#*QlZF_83ty3|]8<Ct9#O(UuzS9.09DmO7Ddf7j{Q>L/Mm' );
define( 'NONCE_KEY',        '+#|jP`>6WhTSgt^]7H-ymDep3%AAGuI~-D)X]N@(Hq7$us(RUP9rod)SyaAy07)P' );
define( 'AUTH_SALT',        '0 ,vSz|!sm.#%m1nl5SkGxbLPCpMs$;|,sD_z}P#2V}xH#2I-9em+H89$G<&@1b%' );
define( 'SECURE_AUTH_SALT', 'n_lZVjddC+QSie(@SMa[nxUVD(eS/_V9nD#6k$n2K`+l5bb|i#eZ4rz+C+,PZYfc' );
define( 'LOGGED_IN_SALT',   '6h y+w-/~5uxg(u_.+e>bg-lN`W$ G]+ZO?liLJ6S-v5!}B#Byd;:nOeO9bgFJqY' );
define( 'NONCE_SALT',       '4^qQIwi[F!}aL}Hh/7PHt?o@5`u,2_,3I1+hjw~A,{#S(uTl]Ka6u0%RROprV!>y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
