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
define('DB_NAME', 'colegiop_banco');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'colegiop_con');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '@1rh)s*sv8$.');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',MbMt;Gw:@Wj=aQ;~(.GG!~W~1K]QE}bx<yqk+&YfFz|^UWUgnjd&}IHsS!n:?us');
define('SECURE_AUTH_KEY',  '+|za!>:w3QJ%-+]?r+m/lH9wMY<^{_%1VK^P-3sRgfS]4A@Zm}%0(4bg!p>qHgM+');
define('LOGGED_IN_KEY',    '-z;6+qzQ1r2|=5l4iWX,Znl{j) Mc[`%@?=Xs*%r2(qZ-L-O_+]22{?Um<$(bg|$');
define('NONCE_KEY',        '4S<~c,N)_Z!Z|1pBS$u0k9#jhuv.3_76S<pnu|*9-Je#-(+z8zDMXYT|$^x]`e<1');
define('AUTH_SALT',        'M@/_||1 <ZX(K`;0VYeU%_pShr`[P7WT:fCp~jx_?#H*e_2J>k;4m8vs(ve|+_GF');
define('SECURE_AUTH_SALT', '*tsS%n^eAVlSL;Ss|L?yfZ6J} )$?#y]D/m[ Q?:lllg5;Loj2zE+zg9L,zF9QLm');
define('LOGGED_IN_SALT',   '7]pfs*+}^>0?ZXeZQ3w%=d^|j0$A;OotZyWY_.W[3atw+.)xlDO?.jA=+) C})e ');
define('NONCE_SALT',       '+Yw#3l<?J&bKx|(|!zkYC-]1GfA|Pt.? zo)|:#B.]7Cf:/wb1j[$Ow*7d>X^`tw');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'cepinheiros_';


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
