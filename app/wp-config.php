<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db4er4tqgundsj' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin_pw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database port */
define( 'DB_PORT', '3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@ dTahu1{,j#G!Ltxh *mCHc!zBV4zs8Og>k;k/W!?-Y+:XJShZ.BSAK~;x.T07i' );
define( 'SECURE_AUTH_KEY',   'Jbp@Vbsr{*Dwm2##B*n4vJS&{<+C]NdR:+?M8!CN!G2s>Q!QWz2[1*qcEhy4aV|.' );
define( 'LOGGED_IN_KEY',     '_iwD<6]xZ)PbZwK~l<Mt/CM(S#VI4azN3lLP@VO!x*o^h<vnxn$FC/ii#_gaU]>~' );
define( 'NONCE_KEY',         '2nG*Nyj;mq%~|NqG?03>*~P]B|eO#R;v?NVPaOvgAdA}3J[7=kh06aLvN;}]D=Jm' );
define( 'AUTH_SALT',         'lA%r2q2gn{G>@j@S{S9(O{CZgXoTOoIac*}]}mBwI(hWRd<cTD84gyBbZg.|FN^;' );
define( 'SECURE_AUTH_SALT',  ']N8Ik/BBAf>1OmY}e;.vl6]I*W@YnK5RSmp,;|tqL?+(Bj:T]kchhX.4>d}W|Te(' );
define( 'LOGGED_IN_SALT',    '=Ji-x_w2b(h&)?4q~1*1k80hPAum3R3ShZ$mkGN|g>d/Ayi)1G&*]F!mgnN4^^N3' );
define( 'NONCE_SALT',        'n5{^=Dub/jw1k^Vs`W}u?nGC5]&rlM>cI0zW716^0c-E`,=[+DN1hH>L3-NjGuf[' );
define( 'WP_CACHE_KEY_SALT', '4#I?_1dW^S038Ey<oYhuCV00a3u}(cz#Cb*D4rioe5$p<g{/Tq#F dQNZNfMz&1)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dku_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

define('WP_ALLOW_REPAIR', true);