<?php

namespace SecurityApi\Schema\Inputs;

use LqGrAphi\Schema\BaseInput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Account;

class AccountUpdateInput extends BaseInput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createCrudUpdateInputFieldsFromClass(Account::class),
		]);
	}
}
