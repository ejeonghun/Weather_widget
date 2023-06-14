<?php
$your_api = "YOUR-API-CODE";
$url = "https://api.openweathermap.org/data/2.5/group?id=1835327,1835847,1841610,1843125,1845106,1845105,1845789,1845788,1841597,1902028,1846265,1838524,1843561,1841808,1835235,1833747,1842616,1846266&appid={$your_api}&lang=kr&units=metric";
$weather_data = file_get_contents($url);
$json_data = json_decode($weather_data, true);

foreach($json_data["list"] as $city_data) {
    $city_name = $city_data["name"];
    $file_path = __DIR__ . "/{$city_name}.json";

    $city_json_data = json_encode($city_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($file_path, $city_json_data);

}
?>

