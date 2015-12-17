<?php 

namespace Ablech\Animals;
use Ablech\Animals;

class Ostrich extends Bird{
	public function fly(){
		throw new \Exception("Ostrich doesnt fly\n");
	}
}