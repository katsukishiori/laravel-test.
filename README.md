お問い合わせフォーム

開発環境
git clone
docker-compose up -d --build
Laravel

環境構築 
1.docker-compose exec php bash 
2.composer install 
3. .env.exampleファイルから.envを作成し、環境環境変数を変更 
4.php artisan migrate 
5.php artisan db:seed

使用技術 ・PHP 7.4.9 ・Laravel Framework 8.83.8 ・MySQL 15.1

ER図

URL ・開発環境:
http://localhost/ 
phpMyAdmin:http://localhost:8080
