<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ke}wrjD(B3A+z>/g,M<[n-/lPkTO%|U;ufWp?(|D5Q!_dNy=)6F~`$+b73F|*INy' );
define( 'SECURE_AUTH_KEY',  'p#VjkCwR0X%{vipB~ql+ATpJ!?}A-AV!u`0-Z!0J%p9m/}p;D+uzXZ:wm.RVV_ D' );
define( 'LOGGED_IN_KEY',    'uVN8YB,9Bmt%;>Z>OBSRD%8Q*>PCl{XN&z66x#PWs^*Ux9sroa2^9z!fV&hvQbq|' );
define( 'NONCE_KEY',        'Oc{h#[GuW9-&kQfZq}44~D(n%y-%phZ)$t;ZP`c0fYG3sq{8P-O%HNihhHbbLc31' );
define( 'AUTH_SALT',        '?}%sH=1AghQ bPe#cmz|fSwtsIk<*):Pl@<QD@(zjg.XVgD BJ<4)^TOHV?ScF/G' );
define( 'SECURE_AUTH_SALT', ')OBK|`:pfXFk+:mKD8Y{,p6N,:nw1mh7+=d+oA%{r_E=&Dz>iKN,zGKl((AJF$@0' );
define( 'LOGGED_IN_SALT',   'Qx+={U7BF!>T&<0YDb*ir{c`l>7sYXI0DE@piiwXNydm9M&rW`h04a4A]jtMiH8J' );
define( 'NONCE_SALT',       '==k4_R}}B<;Kv|:hW+3RB27,|~~HX)LIMv``GZP;:XJa8aML]k}I#_skVcS:S!#L' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
