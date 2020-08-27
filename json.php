<?
include_once('Classes/AuthClass.php');
include_once('Classes/DomainClass.php');
include_once('Classes/ClientClass.php');


$auth = new AuthClass();
$domain = new DomainClass();
$client = new ClientClass();

$token = $auth->auth();

$res = $client->clientCreate($token,'proprietor','Самарбаев Тимур Гайфуллович','1995-04-12','passport','AA','12345','Сибай','2009-09-10',('tim@yandex.ru'),('+7 909 789 10 10'),'456789','RU','Сибай','Коннопарковая');
echo 'id клиента = '.$res;
/*echo '<pre>';
echo $domain->domainCreate($token,"School1.ru",4);
echo '</pre>';*/

?>