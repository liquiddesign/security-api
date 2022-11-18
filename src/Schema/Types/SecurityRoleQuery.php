<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudQuery;
use Security\DB\Role;

class SecurityRoleQuery extends CrudQuery
{
	public function getClass(): string
	{
		return Role::class;
	}
}
