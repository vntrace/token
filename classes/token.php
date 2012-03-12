<?php
class Token{
	public static function authen($token){
		
		$api_auth_url = Kohana::$config->load('token.api_auth_url');

		$request = Request::factory($api_auth_url);

		$request->headers('Clgt-Auth-Key', $token);

		$response = $request->execute();

		if($response->status() == 200) return true;

		return false;
	}
}