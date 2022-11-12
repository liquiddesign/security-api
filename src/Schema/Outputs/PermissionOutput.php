<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Schema\Outputs;

class PermissionOutput extends \LqGrAphi\Schema\BaseOutput
{
	public function __construct(\LqGrAphi\Schema\TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createOutputFieldsFromClass(\Security\DB\Permission::class),
		]);
	}
}
