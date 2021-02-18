<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'LH(D tqdnUy;n}1wk|QQ)oO)m*ujyuNmI0UMiJDnUX7:{if=G9<`cuZcpad&wdgP' );
define( 'SECURE_AUTH_KEY',  '8$>I.+*k329SOU|K(k:KqGU/G&d9]#},:O|W,@aUpGT?_*:YpC1F)5w;1L5VoVjZ' );
define( 'LOGGED_IN_KEY',    ':q[rqHC+b6++=>5YRGQ$]]kl~`FXy2X)tVr8d]BtwtQq66+cd!X7AbeXOV1AGp86' );
define( 'NONCE_KEY',        'd2uY[T]]L~U7e|*nVV&B;Xqg-*s0]! Y5zPpB)c-=GTgGo6Miq&atDW<GEaOHTJ~' );
define( 'AUTH_SALT',        'RVU1rYD`l}dMSYA<%KAkq#LS%_zTSPjM^$,~R ScRVLA0_d+-P[VrxZ9SH1T2Z3V' );
define( 'SECURE_AUTH_SALT', 'gub_c%Hp_IFfZQ~vd93,v5eAY5t1+OyB?a8bN_o@gx,Lgk<.>NM>9$OyRiYQVC{J' );
define( 'LOGGED_IN_SALT',   'i#B,8=Gg8jlDnX6VPC}@+X/b>$5-)eZWDq[^w;FIp_L3xe>yVoFRpTo}~<S:.`I&' );
define( 'NONCE_SALT',       '}]4_MYA0mFo)[}g1J_FHmftHPS$9|9EM<{$ZdKRy&1&1>-XdC_*BbG;GW^`n;aO>' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
