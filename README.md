# FashinablyLate

## 開発環境

Docker ビルド

1. `git clone git@github.com:oidon122/fashionablylate.git`
2. docker-compose up -d --build

\*MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせ docker-compose.yml ファイルを編集してください。

Laravel 開発環境

1. docker-compose exec php bash
2. composer install
3. .env.example ファイルから.env を作成し、開発変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術

- PHP
- Laravel 11.20.0
- MySQL 8.0.26

## ER 図

![alt text](https://file%2B.vscode-resource.vscode-cdn.net/Users/chizuruoi/coachtech/laravel/ability-test/index.png?version%3D1723162648798)

## URL

- 開発環境：http://localhost
- phpMyAdmin
