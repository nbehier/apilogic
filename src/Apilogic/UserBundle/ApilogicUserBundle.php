<?php

namespace Apilogic\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApilogicUserBundle extends Bundle
{
	public function getParent()
  	{
    	return 'FOSUserBundle';
  	}
}
