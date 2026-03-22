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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs783086_wp9' );

/** Database username */
define( 'DB_USER', 'xs783086_wp9' );

/** Database password */
define( 'DB_PASSWORD', 'oE:+T~=Ky-r6' );

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
define( 'AUTH_KEY',         '$1TZ([`Gel8]/Sbhev!)}DM_Dog!.*x{9)}$]R,h,X1c.e}76 Oe/}Y~vOnuR?5U' );
define( 'SECURE_AUTH_KEY',  '[elpde2~um1`j,,p7W*M6L{K3d;aw!d bosX`^DrJHR*hC}0:qEih8~)y<bNoa1C' );
define( 'LOGGED_IN_KEY',    '*4.ixpg/?x:6t%8fScI)C-UmZmr)SOLKMAyZ=ItwH$x8`No_nij!Js)$h5T)}MmQ' );
define( 'NONCE_KEY',        'J&&1Utpby1yi[[-2-V$?pfhIT@MRgL_r`Ng}2swO(W&7/a,fl_5O,_8#~1QKpZ+C' );
define( 'AUTH_SALT',        '$/p b6Ozl?} Z}n|]01IK%TlYC.#X!qhzsJFoAec!Fd{Iyr54+k/&%%gE4q]kU<=' );
define( 'SECURE_AUTH_SALT', '+fr<GfERsZW/i-gnYPz1E -|r`gqg-6_&6`9KVU}LYP7<@LO q6QO>c.s+ `-aq1' );
define( 'LOGGED_IN_SALT',   '+.1=bS0?.J!|jn2:Kkw0i/AEf_;4)~vYB8pps_xTrW_|0tggG* e>}O6b&>),(`-' );
define( 'NONCE_SALT',       '!rVH.m7o}}/K;fq,*1XT1;1st[%<0jD&QO9,<Q`.YT]2TfoM<`fo7gpB`Qg&%t^?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
