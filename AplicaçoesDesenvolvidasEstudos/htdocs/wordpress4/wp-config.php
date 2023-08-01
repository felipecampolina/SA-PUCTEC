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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'E:r7UGgxwRKND9awQQ>rd(D!OhDN0) 1~ C6!P?{[4IjJ?mIw72QMCwt?THhOg=_' );
define( 'SECURE_AUTH_KEY',  'R)mL8?^XMTK]kU.]D?.GF KG(9!9L7ofn;k6H)^LE?,Q?1U!]6vX%E!z^Of3<1}g' );
define( 'LOGGED_IN_KEY',    'OZwf]m2?TOI~[O9>>IjY)l+dN-uIe^3rdo1>}4WPGLiV6]NRLG[#fnZ6g[#Qm1E.' );
define( 'NONCE_KEY',        'Hw~IwjVld[9axJ+:SmMyEEQ*{29.$q!-/^gpu59qVqZ77l!IVQ0Z8=fF%t%S;g}u' );
define( 'AUTH_SALT',        'MoT>76H&0us}DB#hijAOE[-4fmnC~7tmW`PW<rjooJV>Dv]Z6]@<]F$I/-[SVXlc' );
define( 'SECURE_AUTH_SALT', ']O:S[aPoB<@b4g-sJ`@&KEz/exKgaW;E;<iEOv90Iwr7V(]3e&f31ON?v4Y{q5l!' );
define( 'LOGGED_IN_SALT',   'CMBh~.h9UpdHrsasNjdX9KMn>[2!*]yZ?$`g2(J~.tzpoq<TKkCF7uMJi;-%pD>J' );
define( 'NONCE_SALT',       'Q+k@BdG)|R0WOEgn{5E+Eo8_^qPEqGy1-CJ+q*9+aqmXW=N3p<C!6`[b_rW&I<K;' );

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
