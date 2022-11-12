<?php

namespace SecurityApi\Schema\Outputs;

use LqGrAphi\Schema\BaseOutput;
use LqGrAphi\Schema\TypeRegister;
use Security\DB\Account;

class AccountOutput extends BaseOutput
{
	public function __construct(TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createOutputFieldsFromClass(Account::class),
		]);
	}
}
