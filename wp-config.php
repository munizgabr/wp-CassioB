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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cassiob' );

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
define( 'AUTH_KEY',         'Ei3leYuH3PY!q!S?J/0+l!bd@8>Il HhEin~JX^F?bHT+zGSlwAvAr^,QK;eYsuW' );
define( 'SECURE_AUTH_KEY',  'H`$mge9]Lv?2yuu)#:YrFP3_HQbs,.NoDYWQU*2 o!h!Ir`+nt+-M7!)4aJFf pu' );
define( 'LOGGED_IN_KEY',    '(y2%lneT(FtdUZ6oB[V@kA[|zPn78 #/>/6vXD/c!vYd|5fPeq:<o8)]t|)jv&-O' );
define( 'NONCE_KEY',        'f{Oi!JjZgn;7;>?*.I=6 =@k`E!yXf9>l/e&TjSd? Dxu$;L]q76~GPvdkFx}59/' );
define( 'AUTH_SALT',        '{<dZqwX~Wb;,(y>at|FmEj]/EJwoDE0,|vB8!&[J|2H3}NB&>CI^lMSJ4n[3HXTg' );
define( 'SECURE_AUTH_SALT', 'velrWgy.0Hj*Fjd4CfUV(F)O u3u@r4iKtmiD85#5AO7,nEi<(3F!//-gC+Jm{FT' );
define( 'LOGGED_IN_SALT',   '13@]p.rR$6AFUOXkP*Pq8l.FF9A<71.3F{{4nv[49GkW+hN?KH<HanEa/VtjNWj)' );
define( 'NONCE_SALT',       'jG>^AH!RSjbV=N tL1.V]b3:>mhvBjghmQBD<x!mPC3bU[0yxg.%MHBzooPt#w=^' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
