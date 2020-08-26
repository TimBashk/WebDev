<?
	class AuthClass{
		
		protected  $login = "demo";
		protected  $password = "demo";
		
		public function auth(){
			$log = $this->login;
			$pass = $this->password;
			$token = "";
			$buffer = "";
			
			
			$apiAuth = 'https://vrdemo.virtreg.ru/vr-api/?method=authLogin&params={"login":"'.$log.'","password":"'.$pass.'"}';
			
			$buffer = file_get_contents($apiAuth);
			$data = json_decode($buffer,true);
			$token = $data['result']['token'];
			return $token;			
		}
	}
?>