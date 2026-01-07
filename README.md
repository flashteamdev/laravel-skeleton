# Cài đặt

Hãy bấm nút `Use this template` > `Create a new repository`

```bash
composer install
cp .env.example .env
php artisan key:generate --force
php artisan storage:link
php artisan migrate --seed
# tạo tài khoản admin, nhập admin@example.com và password
php artisan make:filament-user
```

## Đồng bộ code từ template này

```bash
git remote add template https://github.com/flashteamdev/laravel-skeleton.git
git fetch --all
git merge template/main --allow-unrelated-histories
# nếu conflict xảy ra, chạy lệnh này
git diff --name-only --diff-filter=U | xargs git checkout --ours --
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
