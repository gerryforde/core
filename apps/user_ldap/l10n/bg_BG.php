<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Неуспешно изчистване на mapping-ите.",
"Failed to delete the server configuration" => "Неуспешен опит за изтриване на сървърната конфигурация.",
"The configuration is valid and the connection could be established!" => "Валидна конфигурация, връзката установена!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Конфигурацията е валидна, но Bind-а неуспя. Моля, провери сървърните настройки, потребителското име и паролата.",
"The configuration is invalid. Please have a look at the logs for further details." => "Невалидна конфигурация. Моля, разгледай докладите за допълнителна информация.",
"No action specified" => "Не е посочено действие",
"No configuration specified" => "Не е посочена конфигурация",
"No data specified" => "Не са посочени данни",
" Could not set configuration %s" => "Неуспешно задаване на конфигруацията %s",
"Deletion failed" => "Неуспешно изтриване",
"Take over settings from recent server configuration?" => "Използвай настройките от скорошна сървърна конфигурация?",
"Keep settings?" => "Запази настройките?",
"{nthServer}. Server" => "{nthServer}. Сървър",
"Cannot add server configuration" => "Неуспешно добавяне на сървърна конфигурация.",
"mappings cleared" => "mapping-и създадени.",
"Success" => "Успех",
"Error" => "Грешка",
"Please specify a Base DN" => "Моля, посочи Base DN",
"Could not determine Base DN" => "Неуспешно установяване на Base DN",
"Please specify the port" => "Mоля, посочи портът",
"Configuration OK" => "Конфигурацията е ОК",
"Configuration incorrect" => "Конфигурацията е грешна",
"Configuration incomplete" => "Конфигурацията не е завършена",
"Select groups" => "Избери Групи",
"Select object classes" => "Избери типове обекти",
"Select attributes" => "Избери атрибути",
"Connection test succeeded" => "Успешен тест на връзката.",
"Connection test failed" => "Неуспешен тест на връзката.",
"Do you really want to delete the current Server Configuration?" => "Наистина ли искаш да изтриеш текущата Сървърна Конфигурация?",
"Confirm Deletion" => "Потвърди Изтриването",
"_%s group found_::_%s groups found_" => array("%s открита група","%s открити групи"),
"_%s user found_::_%s users found_" => array("%s октрит потребител","%s октрити потребители"),
"Could not find the desired feature" => "Не е открита желанта функция",
"Invalid Host" => "Невалиден Сървър",
"Server" => "Сървър",
"User Filter" => "User Filter",
"Login Filter" => "Login Filter",
"Group Filter" => "Group Filter",
"Save" => "Запиши",
"Test Configuration" => "Тествай Конфигурацията",
"Help" => "Помощ",
"Groups meeting these criteria are available in %s:" => "Групи спазващи тези критерии са разположени в %s:",
"only those object classes:" => "само следните типове обекти:",
"only from those groups:" => "само от следните групи:",
"Edit raw filter instead" => "Промени raw филтъра",
"Raw LDAP filter" => "Raw LDAP филтър",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Филтърът посочва кои LDAP групи ще имат достъп до %s инсталацията.",
"groups found" => "открити групи",
"Users login with this attribute:" => "Потребителски профили с този атрибут:",
"LDAP Username:" => "LDAP Потребителско Име:",
"LDAP Email Address:" => "LDAP Имел Адрес:",
"Other Attributes:" => "Други Атрибути:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Заявява филтърът, който да бъде приложен при опит за вписване. %%uid замества потребителското име в полето login action. Пример: \"uid=%%uid\".",
"1. Server" => "1. Сървър",
"%s. Server:" => "%s. Сървър:",
"Add Server Configuration" => "Добави Сървърна Конфигурация",
"Delete Configuration" => "Изтрий Конфигурацията",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Протоколът не задължителен освен ако не изискваш SLL. В такъв случай започни с ldaps://",
"Port" => "Порт",
"User DN" => "User DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN на потребителят, с който ще стане свързването, пр. uid=agent,dc=example,dc=com. За анонимен достъп, остави DN и Парола празни.",
"Password" => "Парола",
"For anonymous access, leave DN and Password empty." => "За анонимен достъп, остави DN и Парола празни.",
"One Base DN per line" => "По един Base DN на ред",
"You can specify Base DN for users and groups in the Advanced tab" => "Можеш да настроиш Base DN за отделни потребители и групи в разделителя Допълнителни.",
"Limit %s access to users meeting these criteria:" => "Ограничи достъпа на %s до потребители покриващи следните критерии:",
"The filter specifies which LDAP users shall have access to the %s instance." => "Филтърът посочва кои LDAP потребители ще имат достъп до %s инсталацията.",
"users found" => "открити потребители",
"Back" => "Назад",
"Continue" => "Продължи",
"Expert" => "Експерт",
"Advanced" => "Допълнителни",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Предупреждение:</b> Приложенията user_ldap и user_webdavauth са несъвместими. Може да изпитате неочквано поведение. Моля, поискайте системния администратор да изключи едното приложение.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Предупреждение:</b> PHP LDAP модулът не е инсталиран, сървърът няма да работи. Моля, поискай системният админстратор да го инсталира.",
"Connection Settings" => "Настройки на Връзката",
"Configuration Active" => "Конфигурацията е Активна",
"When unchecked, this configuration will be skipped." => "Когато не е отметнато, тази конфигурация ще бъде прескочена.",
"Backup (Replica) Host" => "Backup (Replica) Host",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Задай незадължителен резервен сървър. Трябва да бъде реплика на главния LDAP/AD сървър.",
"Backup (Replica) Port" => "Backup (Replica) Port",
"Disable Main Server" => "Изключи Главиния Сървър",
"Only connect to the replica server." => "Свържи се само с репликирания сървър.",
"Case insensitive LDAP server (Windows)" => "Нечувствителен към главни/малки букви LDAP сървър (Windows)",
"Turn off SSL certificate validation." => "Изключи валидацията на SSL сертификата.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Не е пропоръчително, ползвай само за тестване. Ако връзката работи само с тази опция, вмъкни LDAP сървърния SSL сертификат в твоя %s сървър.",
"Cache Time-To-Live" => "Кеширай Time-To-Live",
"in seconds. A change empties the cache." => "в секунди. Всяка промяна изтрива кеша.",
"Directory Settings" => "Настройки на Директорията",
"User Display Name Field" => "Поле User Display Name",
"The LDAP attribute to use to generate the user's display name." => "LDAP атрибутът, който да бъде използван за генериране на видимото име на потребителя.",
"Base User Tree" => "Base User Tree",
"One User Base DN per line" => "По един User Base DN на ред",
"User Search Attributes" => "Атрибути на Потребителско Търсене",
"Optional; one attribute per line" => "По желание; един атрибут на ред",
"Group Display Name Field" => "Поле Group Display Name",
"The LDAP attribute to use to generate the groups's display name." => "LDAP атрибутът, който да бъде използван за генерирането на видмото име на групата.",
"Base Group Tree" => "Base Group Tree",
"One Group Base DN per line" => "По един Group Base DN на ред",
"Group Search Attributes" => "Атрибути на Групово Търсене",
"Group-Member association" => "Group-Member асоциация",
"Nested Groups" => "Nested Групи",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "Когато е включени, се подържат групи в групи. (Работи единствено ако членът на групата притежава атрибута DNs).",
"Paging chunksize" => "Размер на paging-а",
"Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" => "Размерът използван за връщането на големи резултати от LDAP търсения като изброяване на потребители или групи. (Стойност 0 изключва paged LDAP търсения в тези ситуации).",
"Special Attributes" => "Специални Атрибути",
"Quota Field" => "Поле за Квота",
"Quota Default" => "Детайли на Квотата",
"in bytes" => "в байтове",
"Email Field" => "Поле за Имейл",
"User Home Folder Naming Rule" => "Правило за Кръщаване на Потребителската Папка",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Остави празно за потребителско име (по подразбиране). Иначе, посочи LDAP/AD атрибут.",
"Internal Username" => "Вътрешно Потребителско Име",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "По подразбиране вътрешното потребителско име ще бъде създадено от UUID атрибутът. Това гарантира, че потребителското име ще бъде уникално, и че няма да се наложи да се конвертират символи. Вътрешното потребителско име ще бъде ограничено да използва само следните символи: [ a-zA-Z0-9_.@- ]. Другите символи ще бъдат заменени със техните ASCII еквиваленти или ще бъдат просто пренебрегнати. Ако има сблъсъци ще бъде добавено/увеличено число. Вътрешното потребителско име се използва, за да се идентифицира вътрешно потребителя. То е и директорията по подразбиране на потребителя. Също така е част от отдалечените URL-и, на пример за всички *DAV услуги. С тази настройка може да бъде променено всичко това. За да постигнеш подобно държание на това, което беше в ownCloud 5 въведи съдържанието на user display name атрибутът тук. Остави го празно да се държи, както по подразбиране. Промените ще се отразят само на новодобавени(map-нати) LDAP потребители.",
"Internal Username Attribute:" => "Атрибут на Вътрешното Потребителско Име:",
"Override UUID detection" => "Промени UUID откриването",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "По подразбиране, UUID атрибутът ще бъде автоматично намерен. UUID се използва, за да се идентифицират еднозначно LDAP потребители и групи. Също така, вътрешното име ще бъде генерирано базирано на UUID, ако такова не е посочено по-горе. Можеш да промениш тази настройка и да използваш атрибут по свой избор. Трябва да се увериш, че атрибутът, който си избрал може да бъде проверен, както за потребителите така и за групите, и да е уникален. Промените ще се отразят само на новодобавени(map-нати) LDAP потребители.",
"UUID Attribute for Users:" => "UUID Атрибут за Потребителите:",
"UUID Attribute for Groups:" => "UUID Атрибут за Групите:",
"Username-LDAP User Mapping" => "Username-LDAP User Mapping",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "Потребителските имена се използват, за да се запази и зададат (мета)данни. За да може да се идентифицира и разпознае потребител, всеки LDAP потребител ще има вътрешно потребителско име. Налага се map-ване от вътрешен потребител към LDAP потребител. Създаденото потребителско име се map-ва към UUID-то на LDAP потребител. В допълнение DN се кешира, за да се намали LDAP комункацията, но не се използва за идентифициране. Ако DN се промени, промяната ще бъде открита. Вътрешното име се използва навсякъде. Изтриването на map-ванията ще се отрази на всички LDAP конфигурации! Никога не изчиствай map-ванията на производствена инсталация, а само докато тестваш и експериментираш.",
"Clear Username-LDAP User Mapping" => "Изчисти Username-LDAP User Mapping",
"Clear Groupname-LDAP Group Mapping" => "Изчисти Groupname-LDAP Group Mapping"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
