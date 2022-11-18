<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Schema\Inputs;

class SecurityPermissionCreateInput extends \LqGrAphi\Schema\BaseInput
{
	public function __construct(\LqGrAphi\Schema\TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createCrudCreateInputFieldsFromClass(\Security\DB\Permission::class),
		]);
	}
}
