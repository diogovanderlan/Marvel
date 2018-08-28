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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'marvel');

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
define('AUTH_KEY',         'Qx6@Z ZA 0Q?G/ZU;HJS*>)mmaDLu<c7!<Pe[{Tqy>W,.BI}=FVN3g=*%J>)C/oZ');
define('SECURE_AUTH_KEY',  '~_I(kkb=>do^X[G#4tCYw<=k.q48`DE7OBxS)F:L^_l!6uf}I5C}Y:}CKhA0=t&3');
define('LOGGED_IN_KEY',    '>f{:W_<,?Kg-]PktKuM~wo*Oi$U33tKDG(LYB]Nj@z)7[O94&w!?w_5yAdwjdE}F');
define('NONCE_KEY',        '?E3o@$V&ikcwI[yiE]@DKX{MF~q^ShO,]^DY[e=YK,C7FACUd|<*,D`nYb%i2)2!');
define('AUTH_SALT',        'th xFNT[mAa~|{$vE$7^j)Is;~MM&7,v!X&MDWuVi &zcQA/CP<JIP,&]Pft]7gA');
define('SECURE_AUTH_SALT', 'Zov.+,{|E<9owI)TAIDRapyhjheO;Hn3yXZV:HwqMb?[+AD)y%2aapCRmw$|uB6%');
define('LOGGED_IN_SALT',   '=fotS_@r66UZ(Slc7*L8>YQsLy5!X.UA~{P><PE)FV)-*O=s+Mj3!/GEM$ z[~WW');
define('NONCE_SALT',       '&:j(MNI47gO pQ*G7=]L,JE{Yy*]<7Tl=nwkT%f/pcK,{?-<9R1;4B]A&4O<*IF.');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
