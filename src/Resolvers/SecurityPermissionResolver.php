<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Resolvers;

class SecurityPermissionResolver extends \LqGrAphi\Resolvers\CrudResolver
{
	public function getClass(): string
	{
		return \Security\DB\Permission::class;
	}
}
