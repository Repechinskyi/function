
/*
*  Получения курса валют в реальном времени
*/

$date = date("Ymd");
$url = "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=EUR&date={$date}&json";
$sr = file_get_contents($url);
$sr = json_decode($sr, true);
$euro = $sr[0]['rate'];

echo $euro;
