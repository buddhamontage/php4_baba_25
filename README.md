# PHP session hijack 機能実装
## 1.操作方法、機能実装内容
### 課題説明
ユーザIDとパスワードを取得とセッションID固定攻撃機能

### ファイル内容
attack.php//idとpassをinsert.phpへ飛ばします。<br>
insert.php//idとpass情報をMysqlへ保存、その後Facebookへの移動とセッションIDの固定を実行します。<br>
attack.css//attak.phpのデザインを実装しています。


### 操作方法
#### My SQL準備
附属My SQLデータをもとにデータベースを作成します。

#### ログインページ遷移
attack.phpから自由にログイン情報を入力してクリックします。

#### Facebookへ遷移/session id固定攻撃
Facebookへ遷移後、セッションIDを確認すると「abcd」に固定されています・

## 2.実装の工夫
・セッションIDの固定攻撃を工夫しました。

## 3.感想/疑問点
・Facebookのログインページを似せて作成することができなかった。<br>
・セッションid固定化を仕掛けても、facebookログイン時に防がれてしまい突破方法がわかりませんでした。<br>
・想像よりフィッシングサイトの原理は簡単そうでした。



