# Лабораторная работа №4: Composer, классы и работа с публичным API

## 👩‍💻 Автор
ФИО: Телегин Степан Сергеевич

Группа: 2ПМ-3

---

## 📌 Описание задания
Основная идея: Подключаем внешние библиотеки через Composer и интегрируем публичный API без регистрации. Добавляем классы для работы с API и пользовательской информацией.
Результат доступен по адресу [http://localhost:3000/form.html](http://localhost:3000/form.html).

# 15 вариант:
Регистрация на мастер-класс — Список художественных техник: [https://api.artic.edu/api/v1/artworks](https://api.artic.edu/api/v1/artworks)

---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone https://github.com/Stepan-Telegin/nginx-lab
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

4. Открыть в браузере:
   ```
   http://localhost:3000/form.html
   ```

---

## 📂 Содержимое проекта

### для 4 лабораторной:

```code/ApiClient.php``` — класс для работы с API

```code/UserInfo.php``` — класс для получения информации о пользователе

```code/process.php``` — обновлён: установка cookie, запрос к API

```code/index.php``` — обновлён: вывод данных из API и информации о пользователе

```code/composer.json``` — зависимости проекта (guzzlehttp/guzzle)

```code/vendor/``` — библиотеки Composer

### для 3 лабораторной:

```code/index.php``` - главная страница, отображает данные из текущей сессии

```code/process.php``` - обработчик формы: принимает POST-данные, валидирует их, сохраняет в сессию

```code/view.php``` - страница просмотра истории: читает файл data.txt и выводит все сохраненные регистрации

```screenshots_for_lab_3/``` — скриншоты для 3 лабораторной

### для 2 лабораторной:

```docker-compose.yml``` — описание сервиса Nginx

```nginx/default.conf``` - конфигурация Nginx

```code/index.html``` — код страницы формы

```code/index.php``` - содержит вывод информации о PHP

```screenshots_for_lab_2/``` — скриншоты для 2 лабораторной

### для 1 лабораторной:

```code/index.html``` — главная HTML-страница

```code/about.html``` — дополнительная HTML-страница

```screenshots_for_lab_1/``` — скриншоты для 1 лабораторной

---

## ✅ Результат
Подключён Composer, интегрирован API, добавлены классы ApiClient и UserInfo, настроены cookie