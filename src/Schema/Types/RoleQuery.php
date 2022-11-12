<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudQuery;
use Security\DB\Role;

class RoleQuery extends CrudQuery
{
	public function getClass(): string
	{
		return Role::class;
	}
}
