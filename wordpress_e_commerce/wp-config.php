<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'DB_NAME', 'wordpress_e_commerce' );

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
define( 'AUTH_KEY',         'z$rC>8u60#m,>;J_?o?-@=EAvGaP[1O+!o$$/a1Z?O=rCyl9Bw{Jg;,{@Gk0w;w)' );
define( 'SECURE_AUTH_KEY',  'f%o6}>inWJ}EZ6y=3zf@0d W*:s&y1})(nNpyWIEcK>D =:_#/7w;yUgO&N<dS%,' );
define( 'LOGGED_IN_KEY',    'S7uRO(M[~}~5DhRj]mnbUrMo,%qjo6*z)``#/e.^Gaw63G`0D5xCo5sO#rnb3WHS' );
define( 'NONCE_KEY',        '@6zO3S.hSD%gcV6#t``5%7/7jdh+[1!f1p*!Jj|#T@2poPW*/:IrAq8@aX#T@lqm' );
define( 'AUTH_SALT',        'ReqTw&p(oCy9@;,_r|h.1y{pM,D^GE7U*nM3Bjh70|]D]YL$/6~ET0U#/2b?|3Yj' );
define( 'SECURE_AUTH_SALT', 'W&d(%W&6B5X_[h E=)A47dBy++*ejEW*ytS9A%12-0gd4{`SZSw_Z^e~EGurYQM9' );
define( 'LOGGED_IN_SALT',   'C0fk(EYp /bZpo^s68Al;aM7&&HJ*)ro^4j)7<#zvH6REtKk5(pgEdrm+cPuSI:l' );
define( 'NONCE_SALT',       'QB(d%G[dD_9jwNZXPA8..-OD`qAgy(2C#Zx3[cqYH>LX7^TbDN?ZzxM(/qNvEx&W' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
