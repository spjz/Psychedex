<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class Effect
{

	// Chemical Family

	/**
	 * @return mixed
	 */
	public function getByEffectIndexId()
	{
		return Repositories::getEffectArticlesRepository()
			->getByEffectIndexId();
	}

	/**
	 * @return mixed
	 */
	public function getByTimestampModified($order = 'DESC', $rows = '10', $position = '0')
	{
		return Repositories::getEffectArticlesRepository()
			->getByTimestampModified($order,$rows,$position);
	}

}
