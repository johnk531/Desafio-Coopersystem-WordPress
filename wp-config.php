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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'coopersystem' );

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
define( 'AUTH_KEY',         'fqS/3Wf `hWo~O1NiKjP!DcrA$h}mU<s0@iXw90OK?t@0o0XIb[uQK9Q?qdPjZ_X' );
define( 'SECURE_AUTH_KEY',  '(zU.]8GyvKbvGiJb7$=L/eDWB&~,kv^;h.tEEI]5+b67Zwe:X~{0b{s#R+-&[:$S' );
define( 'LOGGED_IN_KEY',    'Xr]_dSx&L#P3keQn?TqfV.6e1g!Nx#td(g4f$ed<W2W{&fQ^QCjD9d -l^jT/ RW' );
define( 'NONCE_KEY',        'rdUnDKCu3*]$,a++Yhw&ty2w/rRkdKQ myYTC9L1Y;YaUuWPOJA3C[2VZb4JD*Wt' );
define( 'AUTH_SALT',        'd2tK>L-`(nUTJhgPX(Sb;B}>8w<y7d=jwsnQ/&O2n+XLM;.U/Xu,&$$R>,Vh:{d^' );
define( 'SECURE_AUTH_SALT', '8>ZPc-ETx2<m!KIG7KPbnwBd-k/Vt,!v)0aA)XJEu^o=01<p-]xs%q+/>es4?J>h' );
define( 'LOGGED_IN_SALT',   'zY8?z.-,}jO<r(c]m)4h)3`p<n:,F`M*0LOt>0[X/tF5wyVZPdE-3C; Yv*7|/N(' );
define( 'NONCE_SALT',       'FG}@`+-|c^MJ`E^&4G&i d7e Mc(!3|MhvMFKXvqy-#u+U{ma<DMFB7LZ})RUP=4' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
