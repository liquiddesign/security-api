<?php

namespace SecurityApi;

use Security\DB\Account;
use Security\DB\Permission;
use Security\DB\Role;

class GeneratorScripts extends \LqGrAphi\GeneratorScripts
{
	public static function generate(\Composer\Script\Event $event): void
	{
		$types = [
			'permission' => Permission::class,
			'role' => Role::class,
			'account' => Account::class,
		];

		self::generateOutputs($types, __DIR__ . '/Schema/Outputs', 'SecurityApi\\Schema\\Outputs');
		self::generateCreateInputs($types, __DIR__ . '/Schema/Inputs', 'SecurityApi\\Schema\\Inputs');
		self::generateUpdateInputs($types, __DIR__ . '/Schema/Inputs', 'SecurityApi\\Schema\\Inputs');
		self::generateCrudQueries($types, __DIR__ . '/Schema/Types', 'SecurityApi\\Schema\\Types');
		self::generateCrudMutations($types, __DIR__ . '/Schema/Types', 'SecurityApi\\Schema\\Types');
		self::generateCrudResolvers($types, __DIR__ . '/Resolvers', 'SecurityApi\\Resolvers');
	}
}
