<?php
class Token{

	// Determine valid key request
	// @return mixed
	// 	boolean false if not valid
	// 	array('key','user_id')
	public static function authen($key){
		$request = Request::factory(API_URL . API_AUTH_PATH)->method('POST');
		$request->headers('Clgt-Auth-Key', $key);

		$response = $request->execute();

		if($response->status() === 200){
			return json_decode($response->body(), true);
		}

		return false;
	}
}