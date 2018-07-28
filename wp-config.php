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
define('DB_NAME', 'examen');

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
define('AUTH_KEY',         'zE%|Pv46!H5t<0Ro}2Pn[<Mm872%:VapPvb@gu{72#g5zi$J3uV0z$7^yN4)Q-| ');
define('SECURE_AUTH_KEY',  'ap83TLpca y%>r1)y@bo)n8P!8CPE:!_0A%4JFcCBaV`;Jao/_DCAUE,(,_$Do5{');
define('LOGGED_IN_KEY',    'S~AVqm<*6^[9V6Q}OggelBd#CjB`W=zb]T&Y$d5+Tmf-fC[v?jbsp]&(hV@3PrmT');
define('NONCE_KEY',        '_g|r&iROCxiaY%N>uk(P62x(_l{pjwTVphP[7/:Q=i~jXr*,2_ww4{GMol+ns<9w');
define('AUTH_SALT',        'TK<8/&K>u9X,=P#~)-WFUqO!K0hwow2P,0 >KeFYf(HC E,.h88B`c.QF&TMp]1k');
define('SECURE_AUTH_SALT', 'fn$J`|Gzi-G^;58N:lBMm0pZTpVGM~bpAk DH0V+@sB@>k2#^549%a<DruY@Dt9g');
define('LOGGED_IN_SALT',   'xbl&psVlA7#Tz$>ef4Z&L[;A`Lunh|_Cs@1a4g?~]2^,p]66q%>f~AFe-klU9byw');
define('NONCE_SALT',       'hI<LwS3q.|vtFW9-b4nDXDUd 6Y2}Dhc8)?;Yw]dGk}C|8+bP?L$fg7Z?5V%3=94');
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