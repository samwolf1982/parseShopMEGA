<?php
$url = "http://www.drupal.ru/"; // это адрес, по которому скрипт передаст данные методом POST. Как видно, здесь указаны переменные, которые будут переданы через GET 
$parse_url = parse_url($url); // при помощи этой функции разбиваем адрес на массив, который будет содержать хост, путь и список переменных. 
$path = $parse_url["path"]; // путь до файла(/patch/file.php) 
if($parse_url["query"]) // если есть список параметров 
$path .= "?" . $parse_url["query"]; // добавляем к пути до файла список переменных(?var=23&var2=54) 
$host= $parse_url["host"]; // тут получаем хост (test.ru) 
$data = "var3=test&var4=".urlencode("еще тест"); // а вот тут создаем список переменных с параметрами. Эти данные будут переданы через POST. Все значения переменных обязательно нужно кодировать urlencode ("еще тест") 

$fp = fsockopen($host, 80, $errno, $errstr, 10); 
if ($fp) 
{ 
  $out = "POST ".$path." HTTP/1.1\n"; 
  $out .= "Host: ".$host."\n"; 
  $out .= "Referer: ".$url."/\n"; 
  $out .= "User-Agent: Opera\n"; 
  $out .= "Content-Type: application/x-www-form-urlencoded\n"; 
  $out .= "Content-Length: ".strlen($data)."\n\n"; 
  $out .= $data."\n\n"; 

  fputs($fp, $out); // отправляем данные 

  // после отправки данных можно получить ответ сервера и прочитать информацию выданную файлом, в который отправили данные... 
  // читаем данные построчно и выводим их. Конечно, эти данные можно использовать по своему усмотрению. 
  while($gets=fgets($fp,2048)) 
  { 
    print $gets; 
  } 
  fclose($fp); 
}