#PHP + Apache の公式イメージを使用（軽量なバージョン）
FROM php:8.2-apache

#Apache の DocumentRoot を変更したい場合の設定（オプション）
COPY apache.conf /etc/apache2/sites-available/000-default.conf

#index.phpをコンテナのWebディレクトリへコピー
COPY index.php /var/www/html/

#ポート80を公開（明示的に書かなくてもよいがわかりやすく）
EXPOSE 80