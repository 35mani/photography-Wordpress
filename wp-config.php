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
define( 'DB_NAME', 'wp_photography' );

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
define( 'AUTH_KEY',         ';Y=wi~ryy>iat(o}pjr(c89<]hsZLZq^3qEsUXef5Es ,o#g/[=A<7.;_&}#P.D]' );
define( 'SECURE_AUTH_KEY',  'Hv~Zq:l_p/[E--Q$Rabw,k/$RK$cE?ya K>k-!m]9A.9MtF3FA_f[4(iJbPq%usx' );
define( 'LOGGED_IN_KEY',    'C!ZttERz8otu#gth&>0@^fM5tsIaAej.Dv4E[DD+ajzRk,Ijo&w@?yZS^6Qo]4hg' );
define( 'NONCE_KEY',        'W]s>%-RU[0`5 ]FJx(0s|#JE<NNp!<se`Sxw|fbHP}#{9q*EPT!z}f{#l+(R?kz:' );
define( 'AUTH_SALT',        'Rf2bX;B0zlw.Xb<p>{gxtZVjeLpCiL R![,.16O iIjH)$$9mGKYjuCI-D.w|!,c' );
define( 'SECURE_AUTH_SALT', '-PzmIHZIuB=tvl}uvFf^i6)$-RB.3<4(1%x6F&jde,~!UJu08^U&R{y+<vIsaF2|' );
define( 'LOGGED_IN_SALT',   ';r+:*y5mIvf}SsG^`pi&e*:4UUr0b?)T<qm2SPG4F:n-W#TgF|BrE4#1PqBG,q[U' );
define( 'NONCE_SALT',       '@1c5]t.,>XJ9,E%UfuEvEJd~X?:k7$%LHmB43uK3w_Wswl^tteW`[Lhw:zwpfhI[' );

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
