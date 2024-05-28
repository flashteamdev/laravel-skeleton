# Cài đặt

Hãy bấm nút `Use this template` > `Create a new repository`

```bash
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
