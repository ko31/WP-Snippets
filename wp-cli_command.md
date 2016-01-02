# WP-CLIコマンド

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

## 各種設定

