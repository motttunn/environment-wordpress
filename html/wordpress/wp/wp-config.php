<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'db_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'db_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'db_password');

/** MySQL のホスト名 */
define('DB_HOST', 'db');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TTs_?z]Rq;,dsJ **Q1^+?OKvGG]CAm9_a[ Z&{D=W%C[.@ugYt>joPS*#=!yO~%');
define('SECURE_AUTH_KEY',  'tWh~Xw8a:`ZCGY]u2L8[9G6;v]mq>5z.3+M0A6GaSx?K]1vu4g-kBIb<_N@-T<Qb');
define('LOGGED_IN_KEY',    '!+*NoS6Jf^8AB~+wa8=fz& 0LV_ u{[rfR?^jCGVeGDN.c0:OGPZC->3D8QzC?TA');
define('NONCE_KEY',        '2C+3M@^@>C|AU!fQDoW6Ki>h*FotbN,WC*zh6^-=b-I,Q)C6<(uJrr:LWUgH1Cok');
define('AUTH_SALT',        'ZJMK2S#?5OvT^//VHjEjc=ywr, Hj<7?X.3=*9a`O`0pdj5(W*[:;&y`a,Q2tocd');
define('SECURE_AUTH_SALT', 'PzS=`@?z{N04,I>jTdU0<T-r{Nqoi|*`M-c&lR)0nCa0l?Q1$pc?b^=GBL|r)U&D');
define('LOGGED_IN_SALT',   '?Jr)oD6u!n/+UNeLZ<G8L fo.KB!c,sadi:I]^8igs[8B#s P,1avoMSJoq%i-$i');
define('NONCE_SALT',       'Bnm9)Nr#Y6Flwq S^&Z.h^QO<Qe;)6 `pQ#gXjLiZ*m^rnmfha|f6&L+rI[d(JUX');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'sample_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
