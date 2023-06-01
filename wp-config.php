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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plantyv2' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')p7|nQy_1Zz!h::f#s[LtH`3T8GYcu~K{.loS2:$f{Ki[r% Jn0@Xt;q%-G,k|RH' );
define( 'SECURE_AUTH_KEY',  'KAm|@RI.PQ;p?jEP77CZVd$7^i:tsK%|+OIb@7x:(s28nyl_itRB^aAc147LTLmN' );
define( 'LOGGED_IN_KEY',    '|]==|q6.zN.[|XRiE`Ay4URKEV6*`rg@ilC.xa]MRPDr^4l/v{JVx2[=.{15zMlM' );
define( 'NONCE_KEY',        't5N]D_J9(pOZ$WfYp*h+/{Ly3 ,DNBSpKq=Y2-=zuX&&0XDY,(2euN3p3Q;}:CgE' );
define( 'AUTH_SALT',        '`ja2Jh=hhik8da&x5>S& Rc240@p@8a34rd)GB]{Xe@>+LeA*$Rka$R?[Ju_>+p!' );
define( 'SECURE_AUTH_SALT', 'JMZu6|P#m30+:$RfHj Fg<BI QZ?q#h&0ct!x4vy3FhVrXOHoJfgu`yO3E3}?>;V' );
define( 'LOGGED_IN_SALT',   ')3*1Ep|N>e$=;Q-mfpe!n%<613I%r*mjKv;A`RoxHcJ;c{h%87^mo,9T8;qT=<}2' );
define( 'NONCE_SALT',       'zf|d#B7$GTzfY[S|9sM_0``c:h0-8W7[k,@G([cAx[fg~iEK+djLS`bfz|:IIo]9' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
