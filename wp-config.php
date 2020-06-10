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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '@g8(qJ:L3d7<Kc|]YB$p5+6bxQ53_ddMZYk{$l!vFlS&Qdkdva{f[d:`;0#~H&ub' );
define( 'SECURE_AUTH_KEY',  '=oySl/ZC&#-FH:Kz]RBYBwvX4C-lS2~)Ch}80wI_!gL}Fn|eK/=MJQR7RWEx]R]f' );
define( 'LOGGED_IN_KEY',    'E?P*2Nt|BxOWTIYo!T03aubzPeHdVgt?Fg`gi*?Ax4A~}l/<;.]F,ZR@K>+KZ{b!' );
define( 'NONCE_KEY',        'V*NA[B9Y!~^7C1~cKl%8e&pVX#>!Rf&x~A?6U_~FVm)h}Q=|JS~HY57Pu>R+E^-[' );
define( 'AUTH_SALT',        'x%R$#kQ7N09LTb{Be(al4Fh1.7jjvz[0(prf!DryMx*`YP?jBN`Qd=-<9x):Mf1g' );
define( 'SECURE_AUTH_SALT', 'qY[%}IFY^8jhzYlW}h?rjgf>/4~r~xT[~PV+>Sph)Fp98ty&0}nR@w;Dqs~LVwI0' );
define( 'LOGGED_IN_SALT',   'Q*p^4PUq2Ft)(@l7@GT.[PpU+J=|Yu4kZgxIc=5Ue_}o[*Yczsm_rBu24d|6p?y%' );
define( 'NONCE_SALT',       'rl0.JGcDI/`K}k(ht@7qdXem(SYvEa^L3i%<LB%L7=Kb:IP~,|.pFO}M|l08u4rt' );

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
