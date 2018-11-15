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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdev' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@rkins17' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '=GlKIqLM6Gfd4ELA}nFXCGBDsGhciTV}/2N~[TpYHd0brNY(m3gZG7[.=4QzN^Rs' );
define( 'SECURE_AUTH_KEY',   '8;-FgR.n(?;xMLkQfZxR}UNZ/TLRk?{Do8%k{ 9)mg.0LS kVp^Kq-qKoWLP|%1z' );
define( 'LOGGED_IN_KEY',     '<u48Hw;^=$El,&p+X_},2SvRd^>?eFaR,THOF{_ic5.qXeD)]*]t}CW;t9>mm._i' );
define( 'NONCE_KEY',         '$/(!,krtiZ:6R*5zbfI*Eg}3.AR@h;^-s*I1=R=x1|7E?)nFI/)3L{K5A5qzE7Hp' );
define( 'AUTH_SALT',         '0!`c(#{gx&g4Pq9C4j*FG8Ns~))<P5K9B:#<[SXF>rW8Y8u8k~=_b;R]=M<i5h.^' );
define( 'SECURE_AUTH_SALT',  'duxnhL%:qyD+_D/hWFT2l1~M` o}.$O1nr:(LY+.(M?eC&VH+UnBNro;3.Xq}5mJ' );
define( 'LOGGED_IN_SALT',    '1/790C&MJLQ2~z$AF`VIbP29#QB! #Vfa&4|iYLQd.p:tX n4zdR4hMm_OUEFLCs' );
define( 'NONCE_SALT',        'p-;2kJck1g6,W@`sDOA[Y`a*<e1x]M6P9(5.U`Dn=.2ycGU`&y6;hL<4~W3z;JWM' );
define( 'WP_CACHE_KEY_SALT', 'yxWY4=ss|InC/LX(>k<A*H(F0J&v!nX-qGj= _#|lBS(C6`ca!6Msw&)M,Lk*WRC' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
