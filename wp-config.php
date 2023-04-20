<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'mega-shop' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{Q$={:TW6w A8H6ai1@3s`Coe$d>-mh#[!D})!jV: &UC]#b<uUj..S)K~=*T~Kn' );
define( 'SECURE_AUTH_KEY',  '3.{wjJgTq<G=p,1@)(p+P|`Hr/uaqj1#]a50GUaq59%L,ygKCk@^-+KRzh;&#afi' );
define( 'LOGGED_IN_KEY',    'H.SHsVjVBR]^R$Sb/%&!iwa7o7A1W?@Q?:Q>^dB+&RX7$nwCjHFWh3H7YVQZ2W.9' );
define( 'NONCE_KEY',        '3VrUxLnX*KxHP;.}u#1Q`x&FC9: j+-I$kRMiyIc}9!Pt1hx8ey/w.HnyLykV!,6' );
define( 'AUTH_SALT',        't`w)k=r%12tT+NV891INIQ0y8{%.V9/[8lu[fl_1Iq]peFi-}/LLx@72Ls?/FK-a' );
define( 'SECURE_AUTH_SALT', 'ot/a*n.B<WIgPxo.Tw5v^|&?.?y60*;V^?F,V_W8qXn(hL_q]c/>_v U3XfN/;#>' );
define( 'LOGGED_IN_SALT',   'jaeKwg*y${ou#k(/DiiiH]&sDE#*9_,)2`fo,|MvYMz;t}&{!1V>@^!`WEublN]B' );
define( 'NONCE_SALT',       'uA4wc4=XtNhU(Ht6$22&_UMIW8N**~YQwcmBIr{Co<.OqLKV_s[g^{Hz[f8IXwkQ' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');