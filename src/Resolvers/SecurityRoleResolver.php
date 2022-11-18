<?php

namespace SecurityApi\Resolvers;

use LqGrAphi\Resolvers\CrudResolver;
use Security\DB\Role;

class SecurityRoleResolver extends CrudResolver
{
	public function getClass(): string
	{
		return Role::class;
	}
}
