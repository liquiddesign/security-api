<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudMutation;
use Security\DB\Role;

class RoleMutation extends CrudMutation
{
	public function getClass(): string
	{
		return Role::class;
	}
}
