<?
	class ClientClass{
		
		public function clientCreate($token,$legal,$name,$bday,$type,$series,$number,$issuer,$issued,$emails = array(),$phones = array(),$ind,$country,$city,$street){
			
			
			
			$apiClient = 'https://vrdemo.virtreg.ru/vr-api/?method=clientCreate&params=';
			
			$apiClient .='{"auth":{"token":"'.$token.'"},';
            $apiClient .='"client":{"legal":"'.$legal.'","nameLocal":"'.urlencode($name).'","birthday":"'.$bday.'",';
            $apiClient .='"identity":{"type":"passport","series":"'.$series.'","number":"'.$number.'","issuer":"'.$issuer.'","issued":"'.$issued.'"},';
            $apiClient .='"emails":["'.$emails.'"],"phones":["'.urlencode($phones).'"],';
            $apiClient .='"addressLocal":{"index":"'.$ind.'","country":"'.$country.'","city":"'.$city.'","street":"'.urlencode($street).'"}}}';
			
			$buffer = "";
			$clientId = "";
			
			$buffer = file_get_contents($apiClient);
			$data = json_decode($buffer,true);
			$token = $data['result']['id'];
			return $id;			
		}
	}
?>