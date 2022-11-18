<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Schema\Inputs;

class SecurityPermissionUpdateInput extends \LqGrAphi\Schema\BaseInput
{
	public function __construct(\LqGrAphi\Schema\TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createCrudUpdateInputFieldsFromClass(\Security\DB\Permission::class),
		]);
	}
}
