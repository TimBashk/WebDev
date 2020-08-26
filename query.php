<?
$apiAuth = 'https://vrdemo.virtreg.ru/vr-api/?method=authLogin&params={"login":"demo","password":"demo"}';
$buffer = file_get_contents($apiAuth);

$apiEcho = 'https://vrdemo.virtreg.ru/vr-api/?method=rpc.echo&params={"type":"тип","object":{"key1":"value1","key2":"value2"},"array":[5,4,3]}';
$data = json_decode($buffer,true);
$token = $data['result']['token'];


$apiCreateClient = 'https://vrdemo.virtreg.ru/vr-api/?method=clientCreate&params={"auth":{"token":"'.$token.'"},"client":{"legal":"person","nameLocal":"'.urlencode("Иванов Иван Ивановичч").'","birthday":"19800401","identity":{"type":"passport","series":"АА","number":"123456","issuer":"Сибай","issued":"19960401"},"emails":["ivanov@ivanov.ru"],"phones":["'.urlencode("+7 999 228 90 89").'"],"addressLocal":{"index":"123456","country":"RU","city":"Сибай","street":"Кооннопарковая"}}}';
	
	
$apiDomainCreate = 'https://vrdemo.virtreg.ru/vr-api/?method=domainCreate&params={"auth":{"token":"'.$token.'"},"clientId":472,"domain":{"name":"sibay102.ru"}}';
$buffer = file_get_contents($apiCreateClient);

$data = json_decode($buffer,true);
$jsonerror = 'Uncown Error';

switch (json_last_error()){
	
	case JSON_ERROR_NONE:
	$jsonerror = '';
	break;
	
	case JSON_ERROR_DEPTH:
	$jsonerror = 'LIMIT STECK MAX DEPTH';
	break;
	
	case JSON_ERROR_STATE_MISMATCH:
	$jsonerror = 'UNCORRECT DATA';
	break;
	
	case JSON_ERROR_CTRL_CHAR:
	$jsonerror = 'UNCORRECT CTRL CHARS';
	break;

	case JSON_ERROR_SYNTAX:
	$jsonerror = 'SYNTAX ERROR, UNCORRECT JSON';
	break;
	
	case JSON_ERROR_UTF8:
	$jsonerror = 'UNCORRECT UTF8 SYMBOLS';
	break;
	
	default:
	$jsonerror = 'UNCOWN ERROR';
}

if($jsonerror != ''){
	echo $jsonerror;
}else{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
?>

