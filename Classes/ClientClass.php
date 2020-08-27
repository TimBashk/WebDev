<?
	class ClientClass{
		
		public function clientCreate($token,$legal,$name,$bday,$type,$series,$number,$issuer,$issued,$emails = array(),$phones = array(),$ind,$country,$city,$street){
			
			
			
			$apiClient = 'https://vrdemo.virtreg.ru/vr-api/';
			
			$apiClient .='?method=clientCreate&params={"auth":{"token":"'.$token.'"},';
            $apiClient .='"client":{"legal":"'.$legal.'","nameLocal":"'.urlencode($name).'","birthday":"'.$bday.'",';
            $apiClient .='"identity":{"type":"passport","series":"'.$series.'","number":"'.$number.'","issuer":"'.$issuer.'","issued":"'.$issued.'"},';
            $apiClient .='"emails":["'.$emails.'"],"phones":["'.$phones.'"],';
            $apiClient .='"addressLocal":{"index":"'.$ind.'","country":"'.$country.'","city":"'.$city.'","street":"'.urlencode($street).'"}}}';
			
			//$buffer = file_get_contents($apiAuth);
			//$data = json_decode($buffer,true);
			//$token = $data['result']['token'];
			return $apiClient;			
		}
	}
?>