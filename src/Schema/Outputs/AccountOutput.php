<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace SecurityApi\Schema\Outputs;

class AccountOutput extends \LqGrAphi\Schema\BaseOutput implements \LqGrAphi\Schema\ClassOutput
{
	public function __construct(\LqGrAphi\Schema\TypeRegister $typeRegister)
	{
		parent::__construct([
			'fields' => $typeRegister->createOutputFieldsFromClass(\Security\DB\Account::class),
		]);
	}

	/**
	 * @return class-string<\StORM\Entity>
	 */
	public static function getClass(): string
	{
		return \Security\DB\Account::class;
	}
}
