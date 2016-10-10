<?php
namespace Psychedex\Models\Repositories\Repository;

use Psychedex\Models\Entities\EffectArticles as Entity;

class EffectArticles
{

	/**
	 * @param $effect_index_id
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getByEffectIndexId($effect_index_id)
	{
		return Entity::query()
		             ->where('effect_index_id = :effect_index_id:')
		             ->bind(['effect_index_id' => $effect_index_id])
		             ->limit('1')
		             ->execute();
	}

	/**
	 * @param string $order
	 * @param string $rows
	 * @param string $position
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getByTimestampModified($order, $rows, $position)
	{
		return Entity::query()
			->limit("{$position},{$rows}")
			->orderBy("timestamp_modified {$order}")
			->execute();
	}

}
