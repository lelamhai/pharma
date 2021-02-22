<?php
define( 'WP_CACHE', true );

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

define( 'DB_NAME', 'mekongph_db' );



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

define( 'AUTH_KEY',         'orslLylZSWXzRd8kq}HRb~A]J[C.g2%%WUI86GCEn/4xsdf`[>:u(J/NV~*tBg87' );

define( 'SECURE_AUTH_KEY',  '8YfCiMg8TYo1/Jfs+O&~*W7264mUKXQu9z!kD86fN:r|z9iPW#GF,o9MLIN+!`Rk' );

define( 'LOGGED_IN_KEY',    ';nmPSFYgLd.qR9Bo2t2B4T2U]flOKY)APu}<f7:HW+~1&X|}L62tOk(Z XUB~Y>i' );

define( 'NONCE_KEY',        'axX?SSOs7tw=aenxRLteA4;kY(,.Oz8;=3Y316/Fz4Q@.bzD-qF81#n7;H{1Qoae' );

define( 'AUTH_SALT',        '$Z9?h/py}8_t2ep$*r[s+]Nlrn-e9hvAp>g@N/%Y=xslyl$m@JZ*KM<&q5;eq=qu' );

define( 'SECURE_AUTH_SALT', 'Rh zdd7p^n+<IN9=CnsJseY.3uB.sB-=0}Jl)0%|~-0yqEN&J@0fg24Y!G5Gq7zT' );

define( 'LOGGED_IN_SALT',   '0W.1[j%~Ngh+`Rm|**^5JRN^19;jRp#Ha ee`t!|.lD,Gg%f/LN<GpI|QNi>4pB^' );

define( 'NONCE_SALT',       'l<=mv-z&ueY8fGpi%zqg:]ytovqG{*<K{p5TM@B(%q%DCs9eytP;U?Et $:&;(82' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'hc_';



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

