# Экзамен по дисциплине "Основы веб-технологий"

Для групп 201-321 и 201-322 01.02.2021

## Описание задания

1. Работа должна быть выполнена самостоятельно.
1. Работа должна быть создана во время проведения экзамена.
1. Количество коммитов за авторством студента не менее двух.
1. Требуется создать страницу по макету.
1. Для создания страницы можно использовать как предоставленные преподавателем материалы, так и свои.
1. Веб-страница, удовлетворяющая требованиям, должна быть размещенная в личном кабинете на сервере факультета fit.mospolytech.ru и на удаленном репозитории с историей коммитов.
1. Работа не проверяется, если не выполнены 1 - 3 пункты.


## Материалы

* Макет находится в репозитории в файле "exam.png"
* [Цветовая палитра](https://colorhunt.co/palette/220248)
* [Шрифт](https://fonts.google.com/specimen/Roboto)
* [Логитип для фона](https://old.mospolytech.ru/img_new/top_bn/top_sh_en.png)
* [Иконки](https://useiconic.com/open)
* [Информационная иконка](https://www.svgrepo.com/download/3898/information-button.svg)
* [Абстрактное лого](https://miro.medium.com/max/600/1*7QzITNnpHIBot7-wpo0iJA.png)

## Задание

### HTML

Согласно макету нужно создать страницу канбан доски. Документ index.html должен содержать:

1. Header:
    1. Логотип.
    1. Название (h1).
    1. Иконку с описанием.
1. Основную часть:
    1. Поле с подписью, текстом внутри и кнопкой.
    1. Три колонки с заголовками.
    1. Карточки с заголовками, описанием и кнопками в соответствующих колонках.
1. Footer c вашими ФИО, группой и датой экзамена.
1. Используйте семантические теги html5.

### CSS

С помощью CSS обязательно:

1. Изменить оформление у элементов формы.
1. Фоновое изображение с позиционированием как в макете.
1. Подключен и использован шрифт с Google Fonts.
1. Использовать изменение оформления при наведении на элемент.
1. Добавить преобразование (transform).
1. Добавить анимацию (средствами CSS).

При увеличении/уменьшении числа карточек в столбце верстка должна адекватно изменяться.

### JavaScript

Используя JS добавьте функционал к кнопке "+добавить". При нажатии на кнопку в Вacklog создается карточка, где заголовок содержит текст из поля.

С потерей баллов можно реализовать вывод текста из поля в консоль браузера или придумать свое собственное событие и содать его обработчик.

## Критерии оценки (за невыполнение критерия баллы снимаются полностью или частично)

1. Структура разработанного сайта соответствует структуре макета.
1. Используется богатый (разнообразный) CSS код (стили).
1. Выполнены пункты по заданию из разделов HTML, CSS, JS.
1. Сайт имеет адаптивную (резиновую) верстку, элементы хорошо читаемы.
1. Отсутствуют ошибки в консоли браузера.
1. Страница проходит HTML и CSS валидацию.
1. Страница корректно отображается при изменении размера окна браузера.
1. Наличие мета-тега viewport.
1. Код должен быть отформатирован (легко читаем).
1. Файлы JS подключаются в конце (внизу) страницы.
1. Верстка не "ломается" и данные читаются корректно при изменении размера (объема) контента (в частности, если у одного из элементов карточки отсутствует или, наоборот, слишком длинный текст)
1. На сайте при масштабе 100% отсутсвует горизонтальная прокрутка на любом размере и разрешении экрана.
1. Сайт не должен содержать орфографических, синтаксических и грамматических ошибок.
1. Форма добавления элемента должна быть сверстана корректно (не просто input в блоке).
1. Подсказка для поля ввода названия задачи должна быть сверстана как placeholder.
1. Страница должна быть ограничена по ширине, выравнивание по центру страницы должно быть сделано с помощью свойства margin.
1. Независимость блоков в CSS. При наведении на любой блок, в его стилях не должно быть множество перечёркнутых правил (следствие длинного каскада).
1. Регулярные (в соответствии с этапами разработки) коммиты в репозиторий. 7-10 коммитов, каждый фиксирует какой-то этап разработки сайта.

## Примечания

Проект должен иметь структуру. Файлы с изображениями не должны находится в корне.

Все свойства CSS необходимо определять в отдельном файле.

При разработке **необходимо периодически сохранять результаты в репозиторий git** (команды `git add`, `git commit -m "комментарий к версии"`). Рекомендованное время сохранения не реже, чем один раз в 30 минут.

Перед завершением работы проверьте валидность вашего кода с помощью валидаторов для [html](https://html5.validator.nu/) и [css](https://jigsaw.w3.org/css-validator/).

После проверки на валидаторе **не забудьте отправить ваши изменения на github** (`git push`).