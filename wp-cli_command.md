# WP-CLIコマンド

https://wp-cli.org/

## インストール

WordPress のダウンロード

```
wp core download --locale=ja
```

wp-config.php のセットアップ

```
wp core config --dbname=dbname --dbuser=username --dbpass=password --dbhost=localhost --dbprefix=wp_
```

DB のセットアップ

```
wp core install --url=http://example.com/ --title=titlename --admin_user=username --admin_password=password --admin_email=test@example.com
```

## データ変換

DB 内の URL 文字列変換

```
wp search-replace 'http://example.com' 'http://example.jp'
```

DB 内の URL 文字列変換（ネットワーク対応）

```
wp search-replace --network 'http://example.com' 'http://example.jp'
```


## 各種設定

### プラグイン

プラグインを検索

```
wp plugin search rest-api
```

プラグインをインストールして有効化

```
wp plugin install rest-api activate
```

プラグインをアンインストール

```
wp plugin uninstall rest-api
```

