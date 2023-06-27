<? $phoneCodeData = file_get_contents('https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json');
$phoneCodes = json_decode($phoneCodeData, true);

$phoneNumber = '+375(29)123-45-67'; // Ваш номер телефона
echo $phoneNumber;

foreach ($phoneCodes as $phoneCode) {
    $mask = $phoneCode['mask'];
    echo $mask;

    // Преобразование маски в регулярное выражение
    $regex = preg_replace('/#/', '\d', preg_quote($mask, '/'));

    // Применение регулярного выражения к номеру телефона
    if (preg_match('/^' . $regex . '$/', $phoneNumber)) {
        $countryName = $phoneCode['name_en'];
        echo "Страна: " . $countryName;
        break;
    }
}