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

	public function getCreateInputName(): string
	{
		return 'SecurityRoleCreateInput';
	}

	public function getUpdateInputName(): string
	{
		return 'SecurityRoleUpdateInput';
	}
}
