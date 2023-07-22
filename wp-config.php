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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lPnGkACts7;k~ 0ZA@&V8!.Wp0~8=JnwBj9(/G&Vk|wJurl/t/+9l5=7lplDAlJ4' );
define( 'SECURE_AUTH_KEY',  '>F7K-:w/9h/M}+nB?bf;6LYD3d7-9%{S*uKjz8bp8My1TSXU+}`2x(:8TsLFfLH7' );
define( 'LOGGED_IN_KEY',    '!]TV=:R(DTV77a )NWfMcH9=s$H/X{PG#Izy|1pB$Ps($C!l]$VTf($Y_m0QqHfT' );
define( 'NONCE_KEY',        '<_43N&;>9v%+U~) R//}I]mhE19J8~4~3%C>I9?wXl4d3.e/eSCy.z5hBEI7;iyY' );
define( 'AUTH_SALT',        'NyKW=jmvLWt!%6=KCh>Q1jc]dY>epI,ZrE#Y5+}S>*^9D{/=/(yILH+3#74xegYe' );
define( 'SECURE_AUTH_SALT', 'Oa/$NNLC@:w#5]AZ?0=v+G}JZE=~Wm-,[V39QwU.[$@Y~#m-6g.oq*~>68 7`2=<' );
define( 'LOGGED_IN_SALT',   'efd|| [-&p[PQ/%)(~wZydzQwm7dPG<B}Ei5ppA@XBIs;:LcW&hISgr ROE@}Dk,' );
define( 'NONCE_SALT',       'vzTSRb4XLtx5Pl_)D,4wt_0GQAp)VvgaEOdPXzA!}Z20>;-EQd8uTF$<KSox7<$@' );

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
