# Лабораторная работа №5: Работа с базой данных MySQL через PHP

## 👩‍💻 Автор
ФИО: Телегин Степан Сергеевич

Группа: 2ПМ-3

---

## 📌 Описание задания
Основная идея: Работа с базой данных MySQL через PHP. Создание таблицы для данных формы, сохранение данных формы в базу данных, вывод данных из базы на странице. Использование классов PHP для работы с таблицей.
Результат доступен по адрему [http://localhost:3000/form.html](http://localhost:3000/form.html).

# 15 вариант:
Регистрация на мастер-класс — имя, дата рождения, тема, чекбокс «Материалы включены», радио «Формат участия»

---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone https://github.com/Stepan-Telegin/nginx-lab
   cd nginx-lab
   ```

2. Установить зависимости Composer (если ещё не установлены):
   ```bash
   cd code
   composer install
   ```

3. Запустить контейнеры:
   ```bash
   docker-compose up -d --build
   ```
**Отличный вопрос!** 👏

## Где это должно быть сказано в README?

В README **должен быть раздел** про инициализацию базы данных. Вот что нужно добавить в README (в раздел "Как запустить проект"):

```markdown
## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone https://...
   cd nginx-lab
   ```

2. Установить зависимости Composer:
   ```bash
   cd code
   composer install
   ```

3. Запустить контейнеры:
   ```bash
   docker-compose up -d --build
   ```

4. Создать таблицу в базе данных (только при первом запуске):
   Через Adminer:
   - Открыть http://localhost:8081
   - Войти (сервер: db, пользователь: lab5_user, пароль: lab5_pass, БД: lab5_db)
   - Выполнить SQL:
   ```sql
   CREATE TABLE IF NOT EXISTS masterclass_registrations (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       birthdate DATE NOT NULL,
       topic VARCHAR(100),
       materials TINYINT(1) DEFAULT 0,
       format VARCHAR(50)
   );
   ```

4. Открыть в браузере:
   - Сайт: [http://localhost:3000/form.html](http://localhost:3000/form.html)
   - Adminer (управление БД): [http://localhost:8081](http://localhost:8081)

---

## 📂 Содержимое проекта

### для 5 лабораторной:

```code/db.php``` — подключение к базе данных MySQL

```code/Registration.php``` — класс для работы с таблицей masterclass_registrations (добавление, получение данных)

```code/process.php``` — обновлён: сохранение данных формы в базу данных

```code/index.php``` — обновлён: вывод данных из базы данных на странице

```Dockerfile``` — для PHP-FPM с MySQL

```docker-compose.yml``` — обновлён: добавлены сервисы MySQL и Adminer

```screenshots_for_lab_5/``` — скриншоты для 5 лабораторной

### для 4 лабораторной:

```code/ApiClient.php``` — класс для работы с API

```code/UserInfo.php``` — класс для получения информации о пользователе

```code/process.php``` — установка cookie, запрос к API

```code/index.php``` — вывод данных из API и информации о пользователе

```code/composer.json``` — зависимости проекта (guzzlehttp/guzzle)

```code/vendor/``` — библиотеки Composer

```screenshots_for_lab_4/``` — скриншоты для 4 лабораторной

### для 3 лабораторной:

```code/index.php``` — главная страница, отображает данные из текущей сессии

```code/process.php``` — обработчик формы: принимает POST-данные, валидирует их, сохраняет в сессию и файл data.txt

```code/view.php``` — страница просмотра истории: читает файл data.txt и выводит все сохраненные регистрации

```screenshots_for_lab_3/``` — скриншоты для 3 лабораторной

### для 2 лабораторной:

```docker-compose.yml``` — описание сервиса Nginx

```nginx/default.conf``` — конфигурация Nginx

```code/index.html``` — код страницы формы

```code/index.php``` — содержит вывод информации о PHP

```screenshots_for_lab_2/``` — скриншоты для 2 лабораторной

### для 1 лабораторной:

```code/index.html``` — главная HTML-страница

```code/about.html``` — дополнительная HTML-страница

```screenshots_for_lab_1/``` — скриншоты для 1 лабораторной

---

## 📊 Структура базы данных

```sql
CREATE TABLE IF NOT EXISTS masterclass_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    birthdate DATE NOT NULL,
    topic VARCHAR(100),
    materials TINYINT(1) DEFAULT 0,
    format VARCHAR(50)
);
```

---

## ✅ Результат
Подключена база данных MySQL, создана таблица для хранения регистраций, данные формы сохраняются в БД, добавлен вывод данных из базы на главной странице, настроены сервисы MySQL и Adminer в Docker.