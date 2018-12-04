<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'saudeplena');

/** O nome do utilizador de MySQL */
define('DB_USER', 'saudePlenaAdmin');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'AC26together');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'saudeplenamysql.czhdyjondfyj.eu-west-2.rds.amazonaws.com');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hM3224=b7|0LbzvLsz4;5^m?5t^SnVMF`qW30I<g=J2Hv^u0L`d/,%`JmcF{ J n');
define('SECURE_AUTH_KEY',  '6N=$zHHgh{wOLQtHxzf,A_0B5c.L[p^.jI^,piAzK_P(7S)g(q^FyBq|Dv@>(nXT');
define('LOGGED_IN_KEY',    'LVv;g0mnA?8DNe[cJU]}k2byc4l9S?LD}awan>mOD9l+{]8<dL40v}>ykX=;@T;N');
define('NONCE_KEY',        ']J9cs53-0=|IZ=4lpFOLb7Lg(j#Ay:KMF5x4Rx2O]=nkar6G1/,N7Zc+>T>pYYx8');
define('AUTH_SALT',        'yHpkMkce.Gd=Ohb%T5#g,typ|}eCpL?j+cN-l&^0SWC}4k/PW}rPB[Mk3:m@VLDq');
define('SECURE_AUTH_SALT', 'QG:Kk^ReXonOxwS~6[Uu:R0W#UigYNwFkiCwBKi-tm4zo*`8X3baLwX f|>1`6r8');
define('LOGGED_IN_SALT',   '@sMrWGVnpVv{_,=!=]&olYhwMkInpz2ExRy[zE>Gg,v)},u(~|Xw?nGbsC`k+>d/');
define('NONCE_SALT',       '@T^/_(EEu~Av(rOZ8`j5zs<UM,.v6 #n/FLHKvtuJ1Of}sNB1d/p6HE9IW{Z~7L#');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'ourproj_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
