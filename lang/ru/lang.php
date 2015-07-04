<?php
return [
    'topics' => [
        'component_name' => 'Список тем',
        'component_description' => 'Отображает список всех тем.',
        'per_page' => 'Количество тем на странице',
        'per_page_validation' => 'Неверное значение Тем'
    ],
    'topic' => [
        'page_name' => 'Страница Темы',
        'page_help' => 'Название страницы Темы.'
    ],
    'member' => [
        'page_name' => 'Страница Пользователя',
        'page_help' => 'Название страницы Пользователя.'
    ],
    'channel' => [
        'component_name' => 'Категория',
        'component_description' => 'Отображает список тем, относящихся к категории.',
        'page_name' => 'Страница Категории',
        'page_help' => 'Название страницы Категории.'
    ],
    'channels' => [
        'new_channel' => 'Новая Категория',
        'sure' => 'Вы уверены?',
        'delete' => 'Удалить',
        'manage' => 'Управление сортировкой Категорий',
        'return' => 'Вернуться к Категориям',
        'name' => 'Категории',
        'create' => 'Создать Категории',
        'update' => 'Изменить Категории',
        'preview' => 'Предпросмотр Категорий',
        'manage' => 'Управление Категориями',
        'creating' => 'Создание Категории...',
        'create' => 'Создать',
        'createnclose' => 'Создать и Закрыть',
        'cancel' => 'Отмена',
        'or' => 'или',
        'returnlist' => 'Вернуться к списку категорий',
        'saving' => 'Сохранение Категории...',
        'save' => 'Сохранить',
        'savenclose' => 'Сохранить и Закрыть',
        'deleting' => 'Удаление Категории...',
        'really' => 'Вы действительно хотите удалить эту категорию?',
        'list_name' => 'Список Категорий',
        'list_desc' => 'Отображает список всех видимых категорий.'
    ],
    'slug' => [
        'name' => 'Параметр URL',
        'desc' => 'Параметр URL, используется для поиска канала по его пути.'
    ],
    'frontend' => [
        'notopic' => 'В этой категории нет тем.'
    ],
    'plugin' => [
        'name' => 'Форум',
        'description' => 'Простой, встраиваемый форум'
    ],
    'data' => [
        'title' => 'Заголовок',
        'desc' => 'Описание',
        'slug' => 'Параметр URL',
        'parent' => 'Родительская категория',
        'noparent' => '-- Без родительской --',
        'moderated' => 'Модерируемый',
        'is_mod' => 'Только модераторы могут писать в этой категории.',
        'hidden' => 'Скрытый',
        'is_hidden' => 'Скрытие этой категории из главного списка категорий.'
    ],
    'settings' => [
        'username' => 'Имя',
        'username_comment' => 'Отображаемое имя пользователя на форуме.',
        'moderator' => 'Модератор форума',
        'moderator_comment' => 'Поставьте галочку, чтобы пользователь модерировал весь форум.',
        'banned' => 'Забанен на форуме',
        'banned_comment' => 'Поставьте галочку, чтобы заблокировать отправку сообщений пользователю.',
        'forum_username' => 'Имя на форуме',
        'channels' => 'Категории форума',
        'channels_desc' => 'Управление доступными категориями на форуме.'
    ],
    'embedch' => [
        'channel_name' => 'Встроенная Категория',
        'channel_self_desc' => 'Прикрепите к категории любую страницу.',
        'channel_title' => 'Родительская Категория',
        'channel_desc' => 'Укажите категорию, в которой создать новую категорию',
        'embed_title' => 'Код встраивания',
        'embed_desc' => 'Уникальный код, сгенерированной категории. Также может быть использован параметр URL.',
        'topic_name' => 'Код темы',
        'topic_desc' => 'Параметр URL используемый для поиска темы.'
    ],
    'embedtopic' => [
        'topic_name' => 'Встроенная Тема',
        'topic_self_desc' => 'Прикрепите тему к любой странице.',
        'target_name' => 'Целевая Категория',
        'target_desc' => 'Укажите категорию, чтобы создать новую тему или категорию в ней',
        'embed_title' => 'Код встраивания',
        'embed_desc' => 'Уникальный код, для сгенерированной темы или категории. Также может быть использован параметр URL.'
    ],
    'memberpage' => [
        'name' => 'Пользователь',
        'self_desc' => 'Отображает форму с информацией и активностью пользователя.',
        'slug_name' => 'Имя параметра URL',
        'slug_desc' => 'Параметр URL, используемый для поиска пользователя по его URL.',
        'view_title' => 'Режим просмотра',
        'view_desc' => 'Вручную установить режим просмотра для компонента Пользователей.',
        'ch_title' => 'Страница Категории',
        'ch_desc' => 'Имя страницы, используемое для нажатия на категорию.',
        'topic_title' => 'Страница Темы',
        'topic_desc' => 'Имя страницы, используемое для нажатия на тему.'
    ],
    'topicpage' => [
        'name' => 'Тема',
        'self' => 'Отображает темы и сообщения.',
        'slug_name' => 'Имя парамтера URL',
        'slug_desc' => 'Параметр URL, используемый для поиска темы по её URL.',
        'channel_title' => 'Страница Категории',
        'channel_desc' => 'Имя страницы, используемое для нажатия на категорию.'
    ]
];
