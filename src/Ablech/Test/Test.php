<?php

namespace Ablech\Test;
use Ablech\Animals\Bird;



class Test{
	
	public function throwFromTheRoof(Bird $bird){
		try{
			$bird->fly();
		}catch (\Exception $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}