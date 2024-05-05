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
define( 'DB_NAME', 'franciswebpage_db' );

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
define( 'AUTH_KEY',         'bSa&#si`O|Ri!KTxeyXt7:anS2pwRKEk=-fEC<q|U_ZItX9`*)Upt3@lM{FN6+-d' );
define( 'SECURE_AUTH_KEY',  'BsrM%QkS=/)CD]QNW(@LCZ3HsWxH_&wH2O7B=$qRbV@s3kHa]q]KM,6AM[Vz^U/@' );
define( 'LOGGED_IN_KEY',    'vLR:$t`yM;T.@mlgac}N#PB97qm;QfX2o9-5Uj:.S,m?4pXYFx`Z6N.Apa~K[zrD' );
define( 'NONCE_KEY',        'c)iEaFis0OF87J) 9Vlq|c:,-yY{%9 I7(uid0Egu%0Q?;h5o]d|dc8~x9i`]C8(' );
define( 'AUTH_SALT',        '@`ALo,>^?J!O?:JzFnUxhor!>uI8~FqZP1(]lPA6HJ(;t..qzV#Emb)/[BNz^$h]' );
define( 'SECURE_AUTH_SALT', '<,q mSV|Om[;h,R`D&P=Vu$i,0[;[]zKlm4B@<8lJm>%s/jx%k_<},lODw$Hki#P' );
define( 'LOGGED_IN_SALT',   '[feK#f3z5_eusTw|8XO*$_M=N(TSb}k>-2sL[jqR~Re(?o@A~erI*D4@8T_o5<c9' );
define( 'NONCE_SALT',       'm&v(9^<kbA(lj43}4n*M~U]yCgr-selx$f.K8Z^JQR/yv3w?$o}`)bYS$T *SXXo' );

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
