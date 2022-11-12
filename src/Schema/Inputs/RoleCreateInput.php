<?php

namespace SecurityApi\Schema\Inputs;

use LqGrAphi\Schema\BaseInput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Role;

class RoleCreateInput extends BaseInput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createCrudCreateInputFieldsFromClass(Role::class),
		]);
	}
}
