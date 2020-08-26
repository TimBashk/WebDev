<?
class DomainClass{
	
	public function domainCreate($token,$domainName,$clientId){
			
			$res = "";
			
			$apiDomainCreate = 'https://vrdemo.virtreg.ru/vr-api/?method=domainCreate&params={"auth":{"token":"'.$token.'"},"clientId":'.$clientId.',"domain":{"name":"'.$domainName.'"}}';
			$res = file_get_contents($apiDomainCreate);
			$res = json_decode($res,true);
			
			return $res;
		}
}
?>