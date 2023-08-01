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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`MkQ?Yb5)90U_E51~YSQn/U/oIh|B&aT.UruP4^@n!FL^2OQ:<W`]E(]9dj(@1r_' );
define( 'SECURE_AUTH_KEY',  '*%2h_Bob CBTm&U-1M?xQV#hrQ6_daeC@2hF9RB~dEI+Kb QSRj=09hnjas=(AsC' );
define( 'LOGGED_IN_KEY',    'PsIAi-w]v{=/>-v^+`@_~mS(SJMeO!-[1OxeAC36Wt,KLiU`P:$)u&R8z$)>:66u' );
define( 'NONCE_KEY',        'yM$$>B4P,Dm5q7-GhO;l+N4R$4P;<vT?D;A:Gb67+1(13fkFG=fhS@IC&Y`Zo9xv' );
define( 'AUTH_SALT',        ',fk0{Pkm9UORusBM/C1!Vn:i%(-k[L*M}?JvGa4uRB<$U:{yq3niC{(8wW,LF[+{' );
define( 'SECURE_AUTH_SALT', '<-B])ZD4ehLD-%fq+x_),tpJ3z?[K3C3<GbYuKey]u=$VuX1WAKvlIcXLFw|6$i-' );
define( 'LOGGED_IN_SALT',   '2_>2h }-Ck0`#M#1H55G{E)IrIL q6VUVCZuO]Q).6+mp5ik_vgCG>ZSXJ[ykSS6' );
define( 'NONCE_SALT',       '[T-] X}Im|ufiuGG*}6Yi%Agyjye^0 Bx99BYM;$>4xGyZtA)n}vj~zn[lSf/kMD' );

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
