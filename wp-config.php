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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'premio');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'TH-CJtk@}Ls<c~|xUUZ#dz;OMJn(:#|>%w<|B5Q!%B%~PDTwBvax9`;&2qd#Cpq8');
define('SECURE_AUTH_KEY',  'kRSiRU?o%DdL k~82W1|btv(vOxC1-xG>)u[16#Wzbw(%ZU@~x/Hr9W0B$u<5~vs');
define('LOGGED_IN_KEY',    '70%fuj=]a`jiE5.t_=X<K^9Vhg8S,5*qV$zmfm]_J>|{aOfOTOlPu~cafpffqCU@');
define('NONCE_KEY',        'vUo[_fKL;>+fKuR<S&/USN2?yR}C k@cO9^MxD^1CAU4rt@TG/(f9+QWKb* VyH:');
define('AUTH_SALT',        'TugG%9}gXpHJaVINj?9kikt?Lgh3yur$A_7O`ULpE!Dd//}QcyM5NKtqV~Jvy7vr');
define('SECURE_AUTH_SALT', 'd>]udW{^>:Hx{Zfp831A219F.ZqHCjK)r#c4QKlGPnJv;sCD#`61R>kk2km?n?BN');
define('LOGGED_IN_SALT',   'C54i*]z&}SR:L>z5nXn|[K]5VQ[`AclCq?U*<<a>x#nt_w.M1[S(JiY_l|)OhJ|+');
define('NONCE_SALT',       'VA 0-q)Wbiz y&t5a7-Mv=y}Zy:{fu2b6LlMZpdv3&cA#nXgaKhDv@~7EwJ99|Fn');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vgp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
