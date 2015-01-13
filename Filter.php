<?php

namespace FilterService\Filters\Replace;

use FilterService\Core\AbstractFilter;
use FilterService\Filters\Replace\TestClass;

class Filter extends AbstractFilter {

	public function apply($params) {
		return TestClass::test();
	}

}