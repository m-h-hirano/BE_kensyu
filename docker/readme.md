## 事前準備
### Dockerインストール
1. インストール
以下よりインストーラをダウンロードし、インストールする
<https://docs.docker.com/docker-for-windows/install/#download-docker-for-windows>
※「Stable channel」を選択

2. 設定
①タスクバーのDockerアイコンを右クリックして「Setteings..」を開く
②「Shared Drivers」でマウント対象のドライブを選択し、「Apply」クリック


## コンテナ操作
- 起動
up.ps1をPowerShellで実行する
※DB初期化されます

- シャットダウン
down.ps1をPowerShellで実行する

- コンソールを開く
console.ps1をPowerShellで実行する


## エンドポイント
<https://app.localhost/>
[SSL証明書の警告をなくす方法](https://support.microsoft.com/ja-jp/help/931850/-there-is-a-problem-with-this-website-s-security-certificate-when-you-try-to-visit-a-secured-website-in-internet-explorer)


## MySQL5.7
- ホスト名
db

- データベース名
app

- アカウント
app／123456
root／123456

- phpMyAdmin
<http://app.localhost:8080/>


## メール
- POPサーバ
app.localhost

- SMTPサーバ
app.localhost

- ユーザ
system
admin
info
support
alice
bob
carol
※パスワードは全て123456
