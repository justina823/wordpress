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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0mEZBPkbV;ySu9_x83B7as)sL<Phvq-q[tvCI~4&_P.dxswncegg4 .n>r+%/SB<' );
define( 'SECURE_AUTH_KEY',  'C0$Rv8=~_(4]<sqX+Sm#Ip%|E&>*kiL<W)rVzj3kwWdktT;U}r{j:2@lY}v9`3Q{' );
define( 'LOGGED_IN_KEY',    '`QI#<Fa&c,7GpJS/WpjS69Z)?//x-Dil I.^}_;,l4Foe^/9NR_o*q)4R9Us>-I6' );
define( 'NONCE_KEY',        'KF+&S$G0*T4+Rk`C2tfypT5p;[#PV/a^DRze*hAe*8N _*[*i.c26*oo},x&*EX>' );
define( 'AUTH_SALT',        'PCb[&<y<VdK9{9{Kw=`tym6#Q)`29GL9#-obKBteZ3|`,0_JJbMM+[+[?f0@T&$Y' );
define( 'SECURE_AUTH_SALT', '($-LWn4Lq*2hM2u&fNc:YU<!P8ed-6HRVT& 5AqK2-`vQ{T~@uU?}|x]6]h4%yL/' );
define( 'LOGGED_IN_SALT',   'siOPs/00/+5]p@1b3^gYVHZDY0k{wwY d@Q3X=7DIb{HB:^#u/MLk;LgR)G;7>}o' );
define( 'NONCE_SALT',       't>NaLH`V*2lk(+XE;C:szg#-S@pXAE*1P~v6xPvcdVt{KXGNaAOhZk*IrdzF>b^=' );

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
