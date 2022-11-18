<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudMutation;
use Security\DB\Role;

class SecurityRoleMutation extends CrudMutation
{
	public function getClass(): string
	{
		return Role::class;
	}
}
