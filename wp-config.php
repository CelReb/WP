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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'oK3bjPRHLJrCZ0mnNLz+CdSA5ptz2DzIq7s2pHAYxg07vDqlUi/ohtKKM+WJ3vnKvnLztnjldtc3qo2v6IGf5g==');
define('SECURE_AUTH_KEY',  'kZ1rfIBXv5OZ9OzusbqX0jiuMqO+TaobskTGB954yFwBJPzyuTNiORBbEYCaSSBQ+7m47V9TmHrn9xkjI2HJcw==');
define('LOGGED_IN_KEY',    '2OTnAD/jUModWOXm5pxJT0eiEATOE6WOyUsfUWAaRklHowlQ7Pq3Q3yjdCY36bDFBCm9cLH4mDpAW0x5dzXjow==');
define('NONCE_KEY',        'sk9bZA8rhvj1XCWJEUPfnhQSpN1TVIN8idWOdQ9/Ht6f4KKUQudPZrH1ywFrl/xVhMXEIAOgMbTxATlepUi1Aw==');
define('AUTH_SALT',        '5T3dQ1HBeyngdMXTEXChSY8rE0CSmwaREQG/bvbUz9BXbYEbpsY0EvJg3JEIJCcBi4J5GaNM20lGT9U2aGhycg==');
define('SECURE_AUTH_SALT', 'egcj4gHcxm7FlYirtmJ1y8TFBuJH12ww6S2blKYN+fLFb71MaQty6mwxdGdt7CjIldBeeahe59PKrfC4BIwcvQ==');
define('LOGGED_IN_SALT',   'MRUWO8ZKASf+unuFKeO5441XFREmxhDtnWrDxvzxw9YeSf1mpcvMBmJW+1yGyviyzeyEkib5zmrb7HWYRNH/qg==');
define('NONCE_SALT',       'oQCq6eiZ1iAcsovM60A0z7e0aMhoSzIYiHpvhtGCf+f6g8YXjYq6YzcT/j1D6Pvgf/Kvl7Wgq1L4x+3pAfbE9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
