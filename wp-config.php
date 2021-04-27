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
define( 'DB_NAME', 'forestco_dev' );

/** MySQL database username */
define( 'DB_USER', 'forestco_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IvHV=PEFjOB&' );

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
define( 'AUTH_KEY',         '/ -n.dnh%Jf38%z~X},c1Ut+BT*xW4@Q#N*s>=y)T[o2*QZihAI8z/fvGPCc3xzj' );
define( 'SECURE_AUTH_KEY',  '1!6Iztt1S%yb`(0I*s8]oP[/Z1$Ba#6/vZ?WcB2?sE4`>?S[&^JTMH`OkJH=:m+C' );
define( 'LOGGED_IN_KEY',    '9:i2]ZRX1=+Kc2a`[=J(Dv3O_c).6ATnc9YA*(;5vr=:O1@t{ YmrbJFw_bZM^ ]' );
define( 'NONCE_KEY',        'w@asx*t#X9-cRIxYQcKLtI9KMjaZm&+8kT[shb/Q8$TKZF@gE_@FP;ePOf[Gz*m+' );
define( 'AUTH_SALT',        ',m~Qhu)x`RUyTZY(lR&.FpyNDPl1w[,OdM5sg[z^ODwKDb^b^BzIr0J/|5!GwFT2' );
define( 'SECURE_AUTH_SALT', 'CQ?Jr%9lb&0~|xCY>r6Xz?1R}Bat?$Y,+X_o4IToO[s]U;hP>n!Jd8n0eev84R/1' );
define( 'LOGGED_IN_SALT',   '*be*?h4t9KoQ@.iWbPG>;3y V,FvksrFE0z:LPv)gu){S)AZ9LrX5,~HUUCq.hrz' );
define( 'NONCE_SALT',       '=}6;=0;D;~@8!g96q.`dA~EbXd)G;e1tLzSvn|z)I1z:Q?FzQ*$I%j.1M~@AAP]~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fc_';

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
