<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/vhosts/routerider.com/httpdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'routerider2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'routerider2');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'routerider234');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'a+tN^m+t+zH~N(Ls~HLG&Q|k(H(-NSt/hKu;y< H#r,]T#!aurcl~io+>f$@_YjB');
define('SECURE_AUTH_KEY', 'eMkSDJ+qGxRbrlD+M:JR##_oD !*qv-~?0k QEb,7X:R!^6#W&FLWQt!Uezj7%+D');
define('LOGGED_IN_KEY', 'NG{leX=58(fqU;5z{S+U |8PR)3QRbTKXGa<6cF6@!O-D#e=-.KH2SF$-U..wFH-');
define('NONCE_KEY', '.r{}R]JXXk%LZ5V?*m</H5|#!Gw76:y S*!oS2+)Hrn|+-QOcHm.{(d$,@ S-xjx');
define('AUTH_SALT', 'XJQ9_Pv_QzrDS(`X{]e,Jg<6DXLpH^L:!52{#_SPZa8%fE.kE~+}G.,X9Zw4Hg-,');
define('SECURE_AUTH_SALT', 'Fa#VZl_r-Y1cIAPk4ZWh]Z~_W>/a1YTO]&~_!E-%qrbe1l&33+$?]t2+t9wj$RDa');
define('LOGGED_IN_SALT', '8uK}`l,M$w`A47X0w;5e+Vg>Y`-O-tR4#Sw53U3? yg{FwIpzcB~ESw2}&(ohi[%');
define('NONCE_SALT', 'vz@3m.zlt|R#y;Fe/y%;*-|1.ti9hoTwxKE+oVxV8tXM{IgnU`%%h[`@lGeqhkHg');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


