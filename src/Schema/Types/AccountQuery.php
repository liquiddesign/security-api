<?php

namespace SecurityApi\Schema\Types;

use LqGrAphi\Schema\CrudQuery;
use Security\DB\Account;

class AccountQuery extends CrudQuery
{
	public function getClass(): string
	{
		return Account::class;
	}
}
