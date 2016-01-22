<?php

namespace Admin\Service;

class VersionService extends Service
{
	public function getLatestVersion()
	{
		$res = D('Version')->getLatestVersion();
		return $res;
	}
} 