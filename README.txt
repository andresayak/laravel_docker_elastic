1) создание контейнеров
    docker-compose build

2) запуск контейнеров
    docker-compose up -d 

3) открываем сайт
    http://localhost

3) добавляем запись в еластик
    http://localhost/api/addDocument?name=TestName&login=TestLogin

    ожидаемый ответ
    {"status":true}

4) проверяем поиск
    http://localhost/api/search?query=Test

    ожидаемый ответ

    {"query":"Test","suggestions":[{"value":"TestName","data":"TestLogin","src":"img\/_src\/710.png"}]}

