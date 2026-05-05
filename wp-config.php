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
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         '#||=<us2Z^ws]zK{}XVJvEx!|]$JO2/**8 u2Eg|B<~#I>4*@6siWL1Cr++(>&l#' );
define( 'SECURE_AUTH_KEY',  'H/v{zR?hm64q*|S#7]KoM&=r+6}Pa_?iTUszXkK;sfg&U?1I`y{vk}+(:PwA*?IQ' );
define( 'LOGGED_IN_KEY',    '$H>^H78(LX2XBow*BOp/@Y3z5nF.LK2%)U{AA@1|09T%XL@S47(ej&]@UX_|vrwG' );
define( 'NONCE_KEY',        'Zzs9ucTK*YN}B4:%CQfI9$])u}9u?,am}c[|DsWx.*r5iy&f?,3jO16yP^u7>Gbq' );
define( 'AUTH_SALT',        'ByF0#xIR%HZ%.%W0[vG,@R<(zwB`8kMaID(%q9+NA?drn[[SnRIc%~ZbN!rLmjzI' );
define( 'SECURE_AUTH_SALT', '`p/`yzCp3{t]c}$b=AkS3O3Q;4t{9;Rw*52&pKN~Wav1&vUksFN$BG.OrqL*krQR' );
define( 'LOGGED_IN_SALT',   '@|AuK]5U>@$Aw_], 1T3Ha7!=/b=>F|P!WM)>_n+cJz`t%^HAWuK0WD(6.x&(*Fw' );
define( 'NONCE_SALT',       ' &gC_h%zUpG&_(@=T?pffK[cv(ydpnF25~Y811..@a6HrlVNwvLijo738[^?3a^|' );

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
$table_prefix = 'lvdp_';

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
