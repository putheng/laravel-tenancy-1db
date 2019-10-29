<?php

namespace App\Tenant;

class TenantManager
{
	protected $tenant;

	public function setTenant($tenant)
	{
		$this->tenant = $tenant;
	}

	public function getTenant()
	{
		return $this->tenant;
	}
}