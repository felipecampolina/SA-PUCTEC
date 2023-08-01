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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         '5A){5|8y<f/ kV<!93&<0:NUHo0}V~7e,lqqvw(b&fRP]$cID-L-nt|)*nn]YbL>' );
define( 'SECURE_AUTH_KEY',  ' J>vz(Rt0;s154CU9?L5>D&oB+x3llZI8~8>hI*2@6_$(*3Y(,mmwP^so*LxPme<' );
define( 'LOGGED_IN_KEY',    ':o7@tqB&L>&`4^ds%O^NWn+9oLn;+_Z{cTnv|Qf$Vb7uSi9P!Ty0an*SgO}$vxBU' );
define( 'NONCE_KEY',        '>DM4XgcR9.FzGX3Al)g7,m~5A?6,+7:>8>@H<>D}D}#>^A-qXPD)B<%lqGlsZF1(' );
define( 'AUTH_SALT',        '>ton($`1ygo>/Gg Aq`/B[wU+xq~s<45 D+r5370#<[h@O)PS50F 3,3)Lrfp[-7' );
define( 'SECURE_AUTH_SALT', 'izS1VS2 >ks^IUjJ)VZ/PjWJFfJl;i]2o-#N+EvI oSipKw9+3jL]`wi.iS:=HuL' );
define( 'LOGGED_IN_SALT',   '?={%hlLPEqEwYa@Kuj&gGkF;P+3Ui/(:jrQ%(%WTu!|+mhZO>0B{qT($o&QQ!P5j' );
define( 'NONCE_SALT',       'LW$Rj;X7rwr=XqK_Vw`d-}C;R_Kihl6a1SsR`n~fzhsqF-A+Wlo-meg W-:*?YgN' );

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
