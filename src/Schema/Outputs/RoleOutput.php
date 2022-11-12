<?php

namespace SecurityApi\Schema\Outputs;

use LqGrAphi\Schema\BaseOutput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Role;

class RoleOutput extends BaseOutput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createOutputFieldsFromClass(Role::class),
		]);
	}
}
