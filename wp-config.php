<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3fX7p#HdL)<9x:PK|*?|4WBO{0$+6e,N@YIJ,(5>66.`pIeIDy/]j+D`62^e,coQ' );
define( 'SECURE_AUTH_KEY',  '}|ExVU3%yRVp|c{?Cam:&2Z.}@@h)b9Jr~jzc8qIaNay@31K>b0D.Aqy}{d!aWv|' );
define( 'LOGGED_IN_KEY',    '5W2rfIx8>92._QNsm2(Hpj>c%Ym/6OJ~BAe $)t{_U`5Ei-rR96aG0t(~86?B0=s' );
define( 'NONCE_KEY',        '-C}j^IA;vl|^Z?osy*rDcQzI.a5R,|s0]4[V0i&,-FF|X.#<K2;#d+Ny#4)>r^+d' );
define( 'AUTH_SALT',        'E*7x(U>wx|Sv>^(InQ6i/`n4TTA+9@`8XD5Q?@&%WQ#g<rw^hlLP]-A47n(B~_CF' );
define( 'SECURE_AUTH_SALT', '0wfzz*EuPUMyy|Cla)^&0^NHL.X--T2%;rYMe.pXj%uWV/OnX1qV1e*{E?LEt6N/' );
define( 'LOGGED_IN_SALT',   'lqDDZbERh3S_^vJ6L5R.fI+EuW&G8{~,>|NptrE$%>EF@8w^xda%bOo[{aMqY(p|' );
define( 'NONCE_SALT',       'PSBj0X7W)~Ok;jXrw*CC] wMZ_SZi%[DlT>hj&Cp(mr)fpQnhQ]VD:n)++KlO=Mi' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
