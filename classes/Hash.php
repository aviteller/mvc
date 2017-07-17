<?php

class Hash{
	public static function create($algo, $data, $salt){

		//stick to md5 for tut but change to sha256 later

		$context = hash_init($algo, HASH_HMAC, $salt);
		hash_update($context, $data);

		return hash_final($context);
	}
}