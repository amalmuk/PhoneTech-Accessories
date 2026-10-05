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
define( 'DB_NAME', 'phonetech_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kxOKVfzd>ICOBeXP+.q`kH -0MdN+Vbkh2 #.S(!$mrot/A{Y]!7]6o1gaNM~m`c' );
define( 'SECURE_AUTH_KEY',  'nBj7pmc%1x5U134:dS#F4{AIFD#`Ozt0=d6vhqcF?Yzgk=U`2MJI&0z+<m,8S!x|' );
define( 'LOGGED_IN_KEY',    ',$VutIodn5V^},LkPlL5xEu)=@ N R;K{{Gx8KGKDVd/={OpQdR# 5b%=evrtx]f' );
define( 'NONCE_KEY',        'wy_CRdPR[PE`vM%Mt{  0Pj]gPjE(K/9T!kU-we5wbb<3)^:6{Uln{L0Z%BsA#2W' );
define( 'AUTH_SALT',        'V O@rFY#yHVAn5A@d#s_eoNe-9TVeimq,8LH/>kX8tP];v[Cx&trN0_cbI#X<JsW' );
define( 'SECURE_AUTH_SALT', 'VZ>Vd11*kaB[)XyU7bxAQOl/X9pDcb=}=($)Mp7d8ZgO;UIqW7T]?D7cm@j^v-KM' );
define( 'LOGGED_IN_SALT',   'E.(qi3VN47yqQrP{)vW)o:WHF`j%0!-74j6ERQ~i{ENSF:^1[c<uk,}N^u|Z{l5+' );
define( 'NONCE_SALT',       'N+{GO?i`kpLVjh?t]7#T+NIkCP@_jU@PKRw!rMLq(G+0sw*1]LF$@1|fLma47yl8' );
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
