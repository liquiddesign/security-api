<?php

namespace SecurityApi\Resolvers;

use LqGrAphi\Resolvers\CrudResolver;
use Security\DB\Role;

class RoleResolver extends CrudResolver
{
	public function getClass(): string
	{
		return Role::class;
	}
}
