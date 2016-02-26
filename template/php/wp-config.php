<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ldx');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$J=#{(N9~8`d0Brl@7z_aB}uF]-pMx<^jt4W#2{(oG#B )+A=)K?dQ$0q|8OF;rR');
define('SECURE_AUTH_KEY',  ';r3?)ed@vbs/W~V]<ky+=36XQvCSN;):$1Mv!uaHMX!MeerC2{$z#;iK0TB9~d9b');
define('LOGGED_IN_KEY',    '>xD2,u_z {xw_^cjM{_%FC,[lqmi#eGQ=XueQ7Gmcw-~w=F,K#lD61Bp`Hqzx{4N');
define('NONCE_KEY',        'CO^;HtD1;>_rQ%8MuP|V]ZXt>H)9YF_7F`tlW48+tAz@q~z[7D29M;K<(fSN(/ :');
define('AUTH_SALT',        '*EV*oA3aryH4yS%}*b%0ui+:eP?50FI(Q6IpB0kg}x@1<]:r$I+rE}ZA{Cym>S 5');
define('SECURE_AUTH_SALT', 'W`9yjk?}Lui;7txKa3%>5dI)Pv~@%O!@DGkWuV^D*7iCN$e6Tr8!7A;T.2P/,hq$');
define('LOGGED_IN_SALT',   '-#|?>|bhyul{%TsN&OyZnEF18z%$|IxVuR[(a/ZYMNC-`C?-1&;5/o0j&Ov84h,i');
define('NONCE_SALT',       'oRJ~&4.,MT<,78>8~my+h//.W{Pq(%C2)2-*kKrGqe8k?4pamPIoJG>DG4@IOm(b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
