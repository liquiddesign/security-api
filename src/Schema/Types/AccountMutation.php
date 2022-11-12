<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudMutation;
use Security\DB\Account;

class AccountMutation extends CrudMutation
{
	public function getClass(): string
	{
		return Account::class;
	}
}
