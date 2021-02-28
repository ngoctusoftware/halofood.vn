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
define( 'DB_NAME', 'halofood_db' );

/** MySQL database username */
define( 'DB_USER', 'halofood_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '/*-789++qaZZ' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql06.dotvndns.vn' );

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
define( 'AUTH_KEY',         'KHHQ0+Rzo,HEeXLa_|@1 BqisP8SK@.)_i;8CiS-.Nt_P&`yM:E~Bx6<&(iKa<j`' );
define( 'SECURE_AUTH_KEY',  '0b@jfnVL%1 oKxyR6gLeXMnP,8z8-(L%l09&4ndKHmAAv+L+I)&$A78@Xxkk`un~' );
define( 'LOGGED_IN_KEY',    '3=uvZeo@9o]%?sZ!<hZ.tzUh)i71n;%!F-NK}k :n8,imLjNKPJcJTu/g.quwGcd' );
define( 'NONCE_KEY',        '8`HW:z1L#L~h+?#LANx6dK$`DP__2yR{`NOr;^vN`~mTPg&O =zi5UJ4)dbC1t]=' );
define( 'AUTH_SALT',        '1s!#_ASE/)ih[K2-aEeUJ$Zraq/ 88*nmHcw(KBHaH#h>PAEwQwAKLh>JNQa#lPk' );
define( 'SECURE_AUTH_SALT', 'Pus4L$|#;r&PC}WXuQ@)iH<f9 C/tH(]$6h}~+X3(S<e_d0)HYndFmDeLP+~2,Lg' );
define( 'LOGGED_IN_SALT',   '1D_nm]C6p!z4{nG<DKqY25A/oJ fSKChOa4-HZlenY *W1(T0xP(0Bzq9|VD+kv}' );
define( 'NONCE_SALT',       'ny0A62>tP:n(0?yYt|w}>@^sPy{m?M2Qt/$(RL[+>Nd3~Tf[A}H~0{H-5Yl9lB>2' );

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
