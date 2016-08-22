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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'JDoCuyddoi');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hUAK-L$6k[C7MEpf*IaB+/0QbZtW.uw*%R@pFv*WlI/d#Hd03#=FL9-Y1Nt8hgN+');
define('SECURE_AUTH_KEY',  'Wz~^wV*3{jT1~wG<nLx-<*gEz3ND8Ay{mmZBGPr]!~J~_ t7vHV/;9HjJy%@rl_f');
define('LOGGED_IN_KEY',    'z_n4)3Z,-.?aV4qvAQ-|+M%:{rH#(/`N`pLVkR}#/QJ!9OhP6r3/s)m9 p2]II:}');
define('NONCE_KEY',        '2.b3@X <&Hq3jU6{k_@8wDl1Lg!k%USAI[4X#>zdQsWfyN{y>fJK&/-].QI0Ez~l');
define('AUTH_SALT',        'x?x<PE77<eBu/@i))z-&t[-#Xp)=X@rn&FnI .h:+GXT6U4+SPa2`s5kEBhZn:dW');
define('SECURE_AUTH_SALT', ')?j|dU{PPU9 ^fK44]G <@V)FH$(]VTj4LQEUknb(w>{0LPz0;F ~lO5YF/=SE}b');
define('LOGGED_IN_SALT',   'Zn]c-i5~z1)<s!wS*]`W]#{xGO__DU:9LhUprScFIWR}AZo{q2->THlmR4R H6K5');
define('NONCE_SALT',       '<HwLci@1U7SKpgN/lmy.6-#wA53R3&mGiV63721EuVKEhM%wYM=[%Y@:A!()LwfI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
