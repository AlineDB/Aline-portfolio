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
define( 'DB_NAME', 'aline_portfolio' );

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
define( 'AUTH_KEY',         'n-Z@xU>c2YsmOc)>3aWX}5Q;L#Lw/=bg`+@+.fu#<@40R,&}uZxAc4(Gj~Q{,~AL' );
define( 'SECURE_AUTH_KEY',  '@yR,`oi:*n(Y}Viw.a^?iKivWqL]lSCl#NKaRHbc{]feA#Tyx9^dF~T[WJr|~c8d' );
define( 'LOGGED_IN_KEY',    '7^UbuM)&9.9?WPrk*Q%[=PC?Ei_CzQLND9R++j$<Q +,OG/.^^P|TqTk-7IWrqz/' );
define( 'NONCE_KEY',        '[_[%W;L7Q;kTL%rZQd)kubFF{H+4#(avdhRrOt-}E[kK.2<b~J/Zyh^Iq%P}6|sc' );
define( 'AUTH_SALT',        'P_8s)iv9B.Yn.wmJS&4Mz2-(@>BudhVCR}l[kTotwOt#fe3D$vYY7&6hIn: Ht=_' );
define( 'SECURE_AUTH_SALT', '=E/9SBjw7.J|^#R}R2xg~H.Eoc~m)Z8Mrf.R%R:2U:tv%K#8_69?LsxGCT?XaXaD' );
define( 'LOGGED_IN_SALT',   'm1HSUsDfus+4DF9+Q}Uks~nMB_<5MR.O?aZg5*5*zqp;09*IJjRVdDM5uUiT9m/;' );
define( 'NONCE_SALT',       'T#H%TO*vPuJY`;e5eI,aiz]fZ8hCw>V-yh >E+B{0dkzE;>~G2Iq%|pp^,gM`D>0' );
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
