<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class Effect
{

	// Article

	/**
	 * @param $effect_index_id
	 * @return mixed
	 */
	public function getByEffectIndexId($effect_index_id)
	{
		return Repositories::getEffectArticlesRepository()
			->getByEffectIndexId($effect_index_id);
	}

	/**
	 * @param string $order
	 * @param string $rows
	 * @param string $position
	 * @return mixed
	 */
	public function getByTimestampModified($order = 'DESC', $rows = '10', $position = '0')
	{
		return Repositories::getEffectArticlesRepository()
			->getByTimestampModified($order,$rows,$position);
	}

	// ToDo: Class
	// ToDo: Domain
	// ToDo: Index
	// ToDo: Transformation

}
