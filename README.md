# Cài đặt

Hãy bấm nút `Use this template` > `Create a new repository`

```bash
cp .env.example .env
php artisan key:generate --force
php artisan storage:link
php artisan migrate
```
