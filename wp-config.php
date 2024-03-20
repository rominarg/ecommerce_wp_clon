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
define( 'DB_NAME', 'wp_ecommerce' );

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
define( 'AUTH_KEY',         's2[e=C<Kv2?Gn&d?0KjgxanqQ=(cSVB);&^dFi]2&0@t7dIG9b P}T:f;6(f@x|g' );
define( 'SECURE_AUTH_KEY',  'iQ*QZqNVv(vfzI-E)~J2M)#Jctx~+wx7l,=[pVv%97fzr0_:T<;LHFk@_7NEN.y!' );
define( 'LOGGED_IN_KEY',    '15_*kD2a|cku*RN54R3d1CjAGVlwOmZ:[+H@qahx9MBX1=J457],ulg4xs{@!GMi' );
define( 'NONCE_KEY',        ';w@SN{;Mc=XC(;;d}KH2bZ!:0]S40WYrVB8x ]zlMwDdS 4Um>2K%o)%=c4Kw$7F' );
define( 'AUTH_SALT',        '8D^[edkD)`6=Q2q#~@(}x3{ir9=izI d9Xf5N+8n%.=pv8:MvDp]<00<8J4v*u~E' );
define( 'SECURE_AUTH_SALT', '2Ng:jzIM@t#7p26(m4S7/GZAfPE??S-/-Ac1e=e6OGEt^:jJ9m`$Yqk-AXR:M4Eb' );
define( 'LOGGED_IN_SALT',   'r6q}r>,Dgc2<57NvD2vyGbs&BJ+Ea})_[xPTX9:!BIP>(Ho=JW{S>(zo-K2N!HU(' );
define( 'NONCE_SALT',       'SfX(tSSNxDEs*{]cyCeHk|CEu#-`5gdJxHm-F-!SLpDO.B,{>d!mDoRwnc,{=+=E' );

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
