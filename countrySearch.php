<?php
$jsonUrl = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json';
$jsonData = file_get_contents($jsonUrl);

$phoneCodes = json_decode($jsonData, true);
$phoneNumber = normalizePhoneNumber($_POST["phone"]);

$matched = false;
$country = "";

function normalizePhoneNumber($phoneNumber)
{
    if ($phoneNumber[0] !== '+') {
        $phoneNumber = '+' . $phoneNumber;
    }
    $phoneNumber = str_replace('-', '', $phoneNumber);
    $phoneNumber = str_replace(' ', '', $phoneNumber);
    return $phoneNumber;
}

function checkPhoneNumber($phoneNumber, $mask)
{
    for ($i = 0; $i < strlen($mask); $i++) {
        if ($mask[$i] === '#') {
            if (!is_numeric($phoneNumber[$i])) {
                return false;
            }
        } else {
            if ($phoneNumber[$i] !== $mask[$i]) {
                return false;
            }
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($phoneCodes as $item) {
        $item['mask'] = str_replace('-', '', $item['mask']);
        $mask = $item['mask'];
        $matched = checkPhoneNumber($phoneNumber, $mask);
        if ($matched) {
            $country = $item['name_en'];
            break;
        }
    }

    // Возвращаемся на исходную страницу с результатами
    header("Location: index.php?country=" . urlencode($country) . "&matched=" . urlencode($matched));
    exit();
}
?>
