<?php

namespace FilterService\Filters\Replace;

use FilterService\Core\AbstractFilter;

class Filter extends AbstractFilter {

	public function apply($params) {
		return 'v1.0.0';
	}

}