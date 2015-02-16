<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alisonl2_wp125');

/** MySQL database username */
define('DB_USER', 'alisonl2_wp125');

/** MySQL database password */
define('DB_PASSWORD', '8Bq3!)9SPM');

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
define('AUTH_KEY',         'kJf*Yj%nO&=iOVyZ[}SkQ[H2;XVR-a:iK<K?j+bQ=VLw@@uq6ckhan?L2w)DYiBQ');
define('SECURE_AUTH_KEY',  ':MY=EQGh!aS=)C`l?]1+o3.z`h/5G2`vfCj{l#0TK+}CE Bnv+Oqc6_bjH@597&0');
define('LOGGED_IN_KEY',    'r45uy_{brN-gXg1eNq[2y^s2y:Ek6bSx@M-zP3SiZ%OtLr1J]BEme,;q7nmZml.o');
define('NONCE_KEY',        'ZTa=j`ydv&46Wi,9*zp/AX9lAUBWVB&]NQgZ}LSDRKP`VOvtoQ[0Y^&2%_3^Y.[r');
define('AUTH_SALT',        ':m1bBu~(5.CM9IkgACj+3d2:7q5#,x-@3(uC=@i#h .[LS&+DHAtEXa(2Xt J-r5');
define('SECURE_AUTH_SALT', 'l-l4NeL<We<?$B4H=LW;:5J7@mN~#LpDLis[Y3aI^.,I1})(qD{S`CMK_jJx[G9b');
define('LOGGED_IN_SALT',   '-Vlhkh1P b)]0LW)34AJsielkD<l_vfGk<gI(@SnFssE}].OO$Y56Z_1rkp2}5/W');
define('NONCE_SALT',       '9Xi3YO[}}=0620;@sNbzEJ3(VqmbcIkh#gSpqbVF+>3wRG8<&nGO/l^Qd@}oO>?8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
