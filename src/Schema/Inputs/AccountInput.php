<?php

namespace SecurityApi\Schema\Inputs;

use LqGrAphi\Schema\BaseInput;
use LqGrAphi\Schema\BaseType;
use LqGrAphi\Schema\ClassInput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Account;

class AccountInput extends BaseInput implements ClassInput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createRelationInputFieldsFromClass(Account::class, forceOptional: [BaseType::ID_NAME], includeId: true),
		]);
	}
	public static function getClass(): string
	{
		return Account::class;
	}
}
