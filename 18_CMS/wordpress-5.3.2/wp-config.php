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
define( 'DB_NAME', 'cms1804230' );

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
define( 'AUTH_KEY',         'aDS0IHTON%0Z@wq},%8mO$}Ry-r=d(#A7C5F=^$/!WB^F<[_r0:3,GzA3U!.g={a' );
define( 'SECURE_AUTH_KEY',  'WpBUMT*2Nmtv),C|c3T6TLN`!,>7iS80lho5~0Cg?]jNI]uU NCuUYC3.fUz~C41' );
define( 'LOGGED_IN_KEY',    'Wx???W6ep1>?z)U09|XdQ_i2P?U5hcE]c}:c(+2}n/CN7WTh&;;!e X30U&6k/&F' );
define( 'NONCE_KEY',        '>#IvZG-)pI?s@g](TO>G+fOS@oUxp+|&=8(]B zM$E60ZkE6cn=cH|fkU7f.3r3d' );
define( 'AUTH_SALT',        'Q4_6q1g;G{E%Z=e.i1mH~S-iOgXKp$F@SQldY~g+|ocr/7Tn1rTk $*uIn()}|v=' );
define( 'SECURE_AUTH_SALT', 'n?T>D3mr!1V+P%?gaWL1)?`wLy0&n+fH9Qd+7vVx.,b:_j/AVMPb)`]Qm5g}5Yrg' );
define( 'LOGGED_IN_SALT',   '5Dr:^%cSx=W*zf:nxkl+z!(h*B}7th2%e`R{DS]}Ir-3P`>7Pxn}=r:hUg.0<,Fl' );
define( 'NONCE_SALT',       'BHImLq$lt!B/A%mn>&d4~J*=sXB zLL6Lb,A$: yt))PSd2}Fk/J$*l4w.Be SAS' );

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
