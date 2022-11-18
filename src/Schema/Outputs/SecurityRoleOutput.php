<?php

namespace SecurityApi\Schema\Outputs;

use LqGrAphi\Schema\BaseOutput;
use LqGrAphi\Schema\ClassOutput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Role;

class SecurityRoleOutput extends BaseOutput implements ClassOutput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createOutputFieldsFromClass($this::getClass()),
		]);
	}

	/**
	 * @return class-string<\StORM\Entity>
	 */
	public static function getClass(): string
	{
		return Role::class;
	}
}
