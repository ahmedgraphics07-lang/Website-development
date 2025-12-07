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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'mOFx*Fc4..xl,)o3z.dNm.NFHh,qDii9f|Gd^hdqfSA-94jrI@2lcmzm0VA2Z_9_' );
define( 'SECURE_AUTH_KEY',  'jv?z}CRN!~-Q^[B|[cdOfObS6P^@m`|WTZ0EI9(EUy$tgXr-(E/EdiYU`3`Ot9x9' );
define( 'LOGGED_IN_KEY',    'xY:m0(=)nT)!~%lxy[pm?$w<W@{??uP?/Pax$zh<6loJA$p?u?5zf2XjZBW8` ]N' );
define( 'NONCE_KEY',        '&-kj$zoT`}ko4w-mM$^(aLMehpV]u4~Vz(jNJ__t|1rMR!-AVF-fQ-E*>bW|+??{' );
define( 'AUTH_SALT',        '<i|5qDG8PZ?o{HdASmZ^8z{J&JWC?ihH~9}6%|s,4y4X0f1s?;S8K{[Dd0HjXWsy' );
define( 'SECURE_AUTH_SALT', 'Ss>&aa]/Tsu]UQ/X^3kopC6OvLuKA,|X!xF9wLw0^=$[uGyEJ%+CGyQ ]JJp2kQE' );
define( 'LOGGED_IN_SALT',   '[L|+L{AR[Dm[rpWwf,aRG)C(HOMX2:8Fbf=+e!x&cc(TyF?y%*]c3<r{%p3`y.a(' );
define( 'NONCE_SALT',       'pgl~R~gb2Mje0+H6o$LyaJSSbMpu+bJm^ !.fyl Z*fC/.5s X?{O<Ww0xCp]P4I' );

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
