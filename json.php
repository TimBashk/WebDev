<?
include_once('Classes/AuthClass.php');
include_once('Classes/DomainClass.php');

$auth = new AuthClass();
$domain = new DomainClass();

$token = $auth->auth();

echo '<pre>';
echo $domain->domainCreate($token,"School1.ru",4);
echo '</pre>';

?>