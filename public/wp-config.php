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
define('AUTH_KEY',         'iEbeg051QODESFFOO2rbMO+N3dbN+fLOIIQBKTm3Br6FeATo4yVbf2urQu8W6P+z0LrLxRyOkiD9KUctrEQqxg==');
define('SECURE_AUTH_KEY',  'e9UF5e+TVnFpIocoWkwtyf5yOCII8sg+KAotWaZoKGzZ9ImnTb7lTSmCB8sKNPV4bWxiB8a383F/6c2YoLwf2w==');
define('LOGGED_IN_KEY',    'Wogp3gSGd+103FjrlBMLN0cm+pA8TyTsFW/yZxYnDkAWcW9jdwOValWqhv60RfXUhOu3XpOB/4pBxTSgRPBm5w==');
define('NONCE_KEY',        '8XbW3sUJTEiUj4OPHjHSRVA4aZMrsX1vBkC6GbXs5rSeHZV9JHlm5D74HUzdOgnaLXreeaTDPuQWZOnrmYzHMA==');
define('AUTH_SALT',        'sRSbog8D9n+7xSVWOBy8QodOsDqZ1ko9ug6dNKI9YNBilkUg5ytVREwMKT+xI1JrB3p89CRstZ5+7W2qSVC1dA==');
define('SECURE_AUTH_SALT', 'tBJiwtcaAJmkESFZgKN79YMD6bQLB6jYp3QEcKRg6AjD2/ZpkNUdQp+GQgmB7N+Wq7bmAoKSxFCYn/6Cx5FtrA==');
define('LOGGED_IN_SALT',   'HdK9N0tv5Jto7h3qPJtnvtYRsiKnFmxeZPdWA+LN6aDjieUh9M4Xi3yN9FVfX5li+JQWNo7l9Fy4bTHtdBiVAw==');
define('NONCE_SALT',       'VUF/XwdxyVdO/ClDe2N1W9bdYABXqSgYDLQoBXb+4yrJYEwPjaUbhH6GcvhKG6pGoc6U8HUKdQ7p2DPPfezMew==');

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
