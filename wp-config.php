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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rahmi010101' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/
define('AUTH_KEY',         '}d#~vA?;8*Cr9TSHo*2<}3pP,:znu_;al{#Rw$B>|z)-u2Vw+g#Y,HdEvS+~v?D,');
define('SECURE_AUTH_KEY',  '>6(leK&Qf%.kE-<OO7Rr9uvSbLDg{hVjZ}9E5~G/YWZkg)o/>hUSbo,-,ii}ER~U');
define('LOGGED_IN_KEY',    'nG,Q7 Pbqpk}Y~tO|{Z>RLvdX@zh-owE1~&|)7K#ntw(ztLP4VkB(sz&-_>?c7}Z');
define('NONCE_KEY',        '.QE+U<<Q:(vLumSn+dX!wq~}O1V){,Z)DXOddzQ4;oL I[`J9Se%|,I(I>|&L*$q');
define('AUTH_SALT',        'j[9)HUCOz`-1+Wj{p{!1pNoUV+{av}~[~:m$?6M PH3GbEIqi|ivZ_8-*bF-L[<^');
define('SECURE_AUTH_SALT', 'E;5S-~Cyn?n(kH6F,LGcyTP-U~b-78mOr,D)Dtb^$-y&b^T;YZ=dIW#j&A1qgVYi');
define('LOGGED_IN_SALT',   '+gn`C#!_onxLi:~{v<aZJIIKwt4f4AgUX6-5qTl~#-fBfx(v5f<+EV`o+5h4)P*o');
define('NONCE_SALT',       'c|r:Cmq^`O> +fg?4-~i_sN4%hA%gy!T[{e/VLy-2}`,;B;[=@QUcU#JpCRrNTIg');
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
