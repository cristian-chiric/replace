<?php

namespace Crawler\Filter;

use FilterService\Core\AbstractFilter;
use Crawler\Filter\Replace\TestClass;

class Replace extends AbstractFilter {

	public function apply($params) {
		return TestClass::test();
	}

}
