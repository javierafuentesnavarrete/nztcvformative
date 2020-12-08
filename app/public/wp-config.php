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
define('AUTH_KEY',         'ZcWbcwUnws0Nwyh77kaHqyCyaxaAbnQ1VN8q+xwalnZmSXhR3LvT+0U6dPLblT4XOrYpuQ4ShFCG9eASIfN9lQ==');
define('SECURE_AUTH_KEY',  '/k7o3uK4IJtT0LZG8LDFtSbhiPMY3Wt7R2b52ysKMty7zchAxP64sx2UNvf2eXtofgGPHgpuAZDS75JZoN7njA==');
define('LOGGED_IN_KEY',    'hOoIz8AIap7+i7Q+1yy/BDh5MuwbhS9HP3jh4t6m+vYT/5+S6oMGGWKLLBdp3TxtZrcaVC2NaTzgTwGGIiuogQ==');
define('NONCE_KEY',        'H2uzIMyqAT3IH7cZwvY0bsxDYsAHiNOx7eezzbl71fdLFjDfibmKVsmgjQsUyIB0mVxqkPSCe8rlKiRkVHiZOA==');
define('AUTH_SALT',        'xn+/pPiLVY/b9QJY3uadZDwEqOUkXB8mVTimFtKehOnsHV7gnEEvXkLSEanJIn8I3FQy7VJnblN7Gf11O/f/3g==');
define('SECURE_AUTH_SALT', 'A9csVR1ofGKCT341/p0fDECirlo6Ku6kQ1+RIqdcM6XlxQWrngLrG4562ALDWvDLg8EnkeJhswu54yORAKHA0Q==');
define('LOGGED_IN_SALT',   'LVs2Fw8UtlWR0k/Z+WXcxtciVu3Gd2n/sjLJHymaPSZjpRbXcZDg8D8IwybG+WJxu3gZ0jNt0pzU4MXJDoU/jw==');
define('NONCE_SALT',       'SDb3wPtBJRIZERkIYTg3MvAV29gDrJiSwI6uzQnipd8vBb6fLYmnaqU+ps7p6tB8rrUIujLoS9nqX+/dwgzSxw==');

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
