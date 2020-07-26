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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '/5QC6K;xh|tl*3}rFTG$zWC?tdg+R3ucP2t`Z*V?V9zT7%MUR^{.<br}/^qu:5Ou' );
define( 'SECURE_AUTH_KEY',  ' ZF9Ldhq, 8@C*[??rhbT&$v-|iA9>>o=o EnUcMAUvBUQ?>- 4kk5Eq-.G2HxOy' );
define( 'LOGGED_IN_KEY',    'K|FAq~q769{%AIDj@*xHf834<NY$%{21}izTnBKk_T8~=dEE %{vBv j+S7vK~0Y' );
define( 'NONCE_KEY',        'F~mi?}9wb<E:ArJ<?ph3sSTI.L:$ZQuw&4v,_a#:.P<@<n/PdPC(^qr<#}ZW[,!Y' );
define( 'AUTH_SALT',        '-6~(V_fl6%nOxQz(:3#t;n$ntA93k04M+(x%3b8>O!F=Pw;&5sZWy0`(Enlsqh6K' );
define( 'SECURE_AUTH_SALT', '0+uDjj+dw7>A5NZ2AO]@H8I,GveUdh>_R)KDI8.+j@D1.5I)thCn=7><gB_;J{Sr' );
define( 'LOGGED_IN_SALT',   ',6rW2A3yKI~=)&of(1CnG[0/Wfa@eC1O;,Fn](]6{y^LqhlOkbkz&dRIeN3V!L,V' );
define( 'NONCE_SALT',       '^[v03./Sg>AmrZ1?Ilz#Eq. Q`koNN/1yq{B2D}k4P%D#7y]l.zeh@s8sU5Hvwjx' );

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
