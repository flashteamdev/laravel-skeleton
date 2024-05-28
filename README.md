# Cài đặt

Hãy bấm nút `Use this template` > `Create a new repository`

```bash
composer install
cp .env.example .env
php artisan key:generate --force
php artisan storage:link
php artisan migrate
```

## Đồng bộ code từ template này

```
git remote add template https://github.com/flashteamdev/laravel-skeleton.git
git fetch --all
git merge template/main --allow-unrelated-histories
```

## VS Code Extension

Mở VS Code Extension gõ @recommended và cài toàn bộ `WORKSPACE RECOMMENDATIONS` extension.

## Format Code

Vui lòng chạy lệnh dưới đây trước khi gửi Pull Request!

```bash
composer ide
php artisan test
```

## Test Coverage

```bash
php artisan test --coverage
```

Mở trình duyệt http://127.0.0.1:8000/coverage/index.html để xem kết quả
