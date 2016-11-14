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
define('DB_NAME', 'metho_agile');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q/2uBY vw/ ^vf|xIM/UM-u</5o-AD&yz#Y:A/z7a/cPzOh,pkTn6J!?<XZ8_u;h');
define('SECURE_AUTH_KEY',  'FOj d)/RLlwE.rDQqXd@9Mw4`Ni_IlhX;{@vvbl]C%,B>|4mshm{3$o-*8y=[}^o');
define('LOGGED_IN_KEY',    '?LGj~QxAqWClRN;mNdS)Wbq}{li08_<7BXr>Y>d5wGv*$3q>Zm+6G.*z#WzZx/q8');
define('NONCE_KEY',        'Amr)@{$,)&%S*n~mWA({kX$n2HlHP>|A`Grr!gmm#Mi%$%*?qatDR{R69_^B{a>/');
define('AUTH_SALT',        ',EA5EF-{4:QxLX?FlisG|&`~PdZ]@(%~{dBaG:7hO*{9YBZzH-e7+c|L)9q7x;[$');
define('SECURE_AUTH_SALT', '1pn.&-4F?yY5X-YC#V)cY28R>V{F-0Dmx_;N,ZSojQC*`^RmnZ^]a=|Erc+ P84C');
define('LOGGED_IN_SALT',   '[U>Eli3VBlgvX:{b2ODyM}o&`vo.GY8g]}[s$4v{R_>qlzPibFdasBOgeVgE.u{6');
define('NONCE_SALT',       '?t8tb0VIZ><^ry`4t:T:@%&tveMd60Z2B_;Rz`/T)1$v2!W-JWLI&h9l?7Kg!2U[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ma_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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