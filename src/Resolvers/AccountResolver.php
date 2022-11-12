<?php

namespace SecurityApi\Resolvers;

use LqGrAphi\Resolvers\CrudResolver;
use Security\DB\Account;

class AccountResolver extends CrudResolver
{
	public function getClass(): string
	{
		return Account::class;
	}
}
