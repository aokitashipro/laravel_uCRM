udemy向け簡易的なCRM(顧客管理システム)のコードになります。<br>


## インストール
composer install<br>
npm install && npm run dev<br>
.env.exampleを .envにコピー<br>
.envのDB関連、sanctum, sessionなどの情報を編集<br>
php artisan key:generate<br>

## 開発中の簡易サーバー
サーバー側<br>
php artisan serve <br>

フロント側 (vite)<br>
npm run dev<br>
