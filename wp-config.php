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
define( 'DB_NAME', 'wp_terunuma' );

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
define( 'AUTH_KEY',         '&u. 7e!d*2#D.1G~/&q%RECtOy*D2;.mD a,(HQ6C=,FAm(F@Zm:{22TA!L 5.v~' );
define( 'SECURE_AUTH_KEY',  '?YZsdp$.ZiT5]nEf&v_>2 +Qcebx@*LpWD</3kZ>_Mx;fmBkynuquqj9]<i|WJ*M' );
define( 'LOGGED_IN_KEY',    'e0k1qKhs<[c7<oenenh%#z79S73)Z -k?t?TQCAp]i3SeGd*-=xUK=L}L/bK2:KJ' );
define( 'NONCE_KEY',        '-d%r_*WgX_!j(N4Rixzu9]sW)g#XyCc721,^brzS#!)@E7XDk94bJ#=ySMf4M>]e' );
define( 'AUTH_SALT',        'ie`+yZl5AlPBdW_ D2_fpj$>KK3rl}B)T}KiQ73,_[<?>9iYG)joIV!M#K[FTQe3' );
define( 'SECURE_AUTH_SALT', '|qCf##n7iIvH$G;_,73/#fb1F-j`d0jM|6bYC *oQ:oocsX!rJr0]sz#:5hcI1jE' );
define( 'LOGGED_IN_SALT',   'eGRO=+y%Y*h<oY>8iK<jN[aVgi7YkU^7]lk~NrX#UK@%ALw=qvnXwhAPKFrMy_P,' );
define( 'NONCE_SALT',       'A,Edu#9|J:lSSy.7aQvG1:]y.:Xln^=aRm}ux5Cs(7AD{ }ySbXauD#*U1VN$<dK' );

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
