<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Schema\Types;

class SecurityPermissionMutation extends \LqGrAphi\Schema\CrudMutation
{
	public function getClass(): string
	{
		return \Security\DB\Permission::class;
	}

	public function getCreateInputName(): string
	{
		return 'SecurityPermissionCreateInput';
	}

	public function getUpdateInputName(): string
	{
		return 'SecurityPermissionUpdateInput';
	}
}
