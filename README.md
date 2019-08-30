# rest-api
При наличии LEMP стека

1. отредактировать .env
2. composer-install
3. php artisan migrate
4. php artisan db:seed

Можно использовать postman:
// GET /users           | index
// GET /users/{user}    | show
// POST /users          | store
// DELETE /users/{user} | destroy

// GET /posts           | index

Как вариант использовать Vagrant. Файл Homestead.yaml в корне...
