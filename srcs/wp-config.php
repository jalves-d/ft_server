<?php

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'xXx(wWQ8rA0a?r0%SJ<8+]N$|G40K[{$cyj~(sjtd|X:D&.@[oFFMHi6*5RX/J#q');
define('SECURE_AUTH_KEY',  'o/0v9`DM}p|P@LXkRJ|IE2O(5yEN$C|2+a^7*9|B{4?W8vx0X]#v{{k2oU~?E9F5');
define('LOGGED_IN_KEY',    ';.!1N:j<f_<<|^xcs+$q^_Ls+o7t3[D7)QRh?_Of?Y >(+P;wNw!GjG#h+sjVUQC');
define('NONCE_KEY',        'Fuo[0vu^Mx1`UU]@`En((c9Y:Ef-+sHek25P6C9ia8Wx,2[z!c4E#W|*?7wO3b*f');
define('AUTH_SALT',        '-+H{aCC36|T5kz0HgD/EN0@92f2r@}9O/8<Um,m[*T3UD).+Y7f_R0|GC;:,.=)~');
define('SECURE_AUTH_SALT', 'M.?~[EHX&6TI2B%jj6K2`s(.`Y5Phzk<~}&c`RRY8-bVA6|/-y==ZAJ%0c&UQ6T.');
define('LOGGED_IN_SALT',   'Z0(<7:>)5!t|uzlbwB7B7CFLm0<{oqiNR~LDBVmrpo2Y~{R>yAkBEAPsexO]yW_R');
define('NONCE_SALT',       'l><%)^<# ]VA!KcUa8.;z;m]5Rx2)fmd]{LE~@.#o;ck.i:W{p2<P<o*~TUj)w#i');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );


if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
