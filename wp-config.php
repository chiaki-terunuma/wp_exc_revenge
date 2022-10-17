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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_exc_revenge' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$9oqP8YHZmK|NZf!NweL7@ UU9{VY-`-_.iy5QBRuE<+QOT6Z#*&Uk0?Or>q:^EY' );
define( 'SECURE_AUTH_KEY',  'B]Lpa|Nz[jp)0|6y`nO+%lOWT`WehGbPNGW8s#a3iR(8jS*b >JOl09btmGm#APm' );
define( 'LOGGED_IN_KEY',    '* rBqqplw?|P BGw`^KE.Sn){b(rE5d a9gyTWmriiXb|C.?4dD.i.Q^X8IJ#a)T' );
define( 'NONCE_KEY',        ';x?M.tr|1nKoVZ>}YO5!lxL=}Juxt}.t.VlwUC/,1`<`U@xAb5q~A,Pq<lB#`qzR' );
define( 'AUTH_SALT',        '}|F,`A`Nn[[/v%LZb.7Hxl&[R)K|4E|aw0^V<4:g(.DJp>P6~el;Er6%x,SMdYN5' );
define( 'SECURE_AUTH_SALT', 'Rrf0hse)UJULC+S6ZYO5tG6wk2n`!ezs<lm!-!k3]iEd3KmA3Mx[=etwQ>h$P{sN' );
define( 'LOGGED_IN_SALT',   '0FLx=zBG<oQ`ACIR1?VwW0b}.I7eId+cSNd8Gf^h}{m# y{Tzej4p-Qh;oZ}s~[a' );
define( 'NONCE_SALT',       '35J<bqD}--%Bpsmd=Fm3XcDq4*?7DYtW#^`hRI*ib8--u22-/Hfgw.:dU+6|<Gz:' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
