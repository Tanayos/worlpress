<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_test_1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*)~A;tX]A0R:iI Cq!Om_Pbo>{W0=:slp]&Y*F$Xxj6WsY7CEK(*AB_4L=#x2yRW');
define('SECURE_AUTH_KEY',  'iK]be6V~jn9r~ryN2sSEQfX<?x+CzqvE;VqV}8P%.f:St~btVWQ3d=Iw%<}2(MAY');
define('LOGGED_IN_KEY',    'gLw-)Iiw?N }[X]5$g}0o[[Kw2_GlC a+fq52<7}k-s%]Q6/q/uCKTqqn]|}ey>#');
define('NONCE_KEY',        'qcSKmKo.Pq=.0u(jK9uQ=#49Ww|b&cXRWr+2IUE/)k`<hVx c9hi@aR0rIHM=l7g');
define('AUTH_SALT',        'Qp(Ge`#e/ih@+3S{<z`@Cphrew{tS%Z8BNKA_r*t!(<*990 M>KwQ;/..24rL*Sr');
define('SECURE_AUTH_SALT', '?w4+2_Y${o6ACbL.Y.|ML*mT!WHNof<$V?%!PME#ph66j;L%r)P)$T(&)F:lWN>g');
define('LOGGED_IN_SALT',   '`NGh/_#co1(U&,4ZXe G7&H4vkDf%`~.=dmBv[Lr<-H.tLk$jp/S`UR;?{#t_&X{');
define('NONCE_SALT',       'u1!8qPM5:<s[nRB;FgVcL(>/NUnGE)p5-O,P*?_P+!A!g/XfLc@_67#nKczE)X7k');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');