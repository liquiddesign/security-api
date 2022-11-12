<?php

namespace SecurityApi\Schema\Inputs;

use LqGrAphi\Schema\BaseInput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Account;

class AccountCreateInput extends BaseInput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createCrudCreateInputFieldsFromClass(Account::class),
		]);
	}
}
