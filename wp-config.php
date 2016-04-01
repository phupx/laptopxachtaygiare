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
define('DB_NAME', 'laptopxachtay_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '8XdGm>s5WvYOUU){3dFT O|gt$W74|/UFU|~&hdD@o)wCh~=Y?$K8!:Wrnp r+/(');
define('SECURE_AUTH_KEY',  'j(t_Q@`=+oQ{V<iqTf7h u`|,<6pY+6B]KmM=X5>|qL<QNU8vf<!X=UfV&=F4G!=');
define('LOGGED_IN_KEY',    'D+[3s#l#EOVwL:|_<{i`Xkbi]z1o]]+?d|S^:0rc}uS<<Dlpu&*V2d&*=UQLs9+4');
define('NONCE_KEY',        'C}aG-.P+#+3)hRjfk5-gbxA>s5c3lU6W<FG:L~7oLG5lHSEDO#KPV%`{+wxi49 d');
define('AUTH_SALT',        '4@BMUIkd<iL(a#`2TE_CfF|Yx#pi$#$mnKa=3?+M<r-M/[$l9^8zg4GE|dISyC/m');
define('SECURE_AUTH_SALT', 'o]56|!RB[{6u~RG_c+?k{ou`Su{ hdB+:&+A/E%*d+wZbf|Id^-=1|]LROKg4[NI');
define('LOGGED_IN_SALT',   'R;]9,-xkrT?%+?yQO0/f-$J6W9n5 d_}p {>Q)hdF&tz8EER4g+R|hK -Y|Ax{.%');
define('NONCE_SALT',       'U1Qv,;:Co)&yL.[pVOS=t_VDPPs_.Ro5:<(9TCt(HZk0:iRsM.d,N8lF`wQq<EFq');

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
