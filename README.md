# FashinablyLate

## 開発環境

Dockerビルド
1. `git clone git@github.com:oidon122/fashionablylate.git`
2. docker-compose up -d --build

*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせdocker-compose.ymlファイルを編集してください。

Laravel開発環境
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、開発変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術
- PHP
- Laravel 11.20.0
- MySQL 8.0.26

## ER図
/Users/chizuruoi/coachtech/laravel/ability-test/src/index.png

## URL
- 開発環境：http://localhost
- phpMyAdmin
