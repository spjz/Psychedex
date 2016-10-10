<?php

namespace Psychedex\Modules\Api\Controllers;

use Psychedex\Models\Services\Services;
use Phalcon\Http\Response;
use Psychedex\Models\Entities\ChemicalMoieties as Entity;

class ChemicalmoietiesController extends ControllerBase
{

	/**
	 * List all
	 *
	 * @return Response $response
	 */
	public function listAction()
	{
		$errors = [];
		$data = [];

		$result = Services::getChemicalService()->getMoieties();

		if (!count($result))
		{
			$status = [
				"code" => 200,
				"message" => "OK",
			];
			$errors[] = "No results";
		}
		else
		{
			$status = [
				"code" => 200,
				"message" => "OK",
			];
			foreach ($result as $row)
			{
				$data[] = [
					"id" => $row->id,
					"name" => $row->name,
					"image" => $row->image,
				];
			}
		}

		return $this->respond($status, $errors, $data);
	}

	/**
	 * Search by $ref
	 *
	 * @param int|string $ref
	 * @return Response $response
	 */
	public function searchAction($ref)
	{
		if (!is_numeric($ref))
		{
			$errors = [];
			$data = [];

			$result = Services::getChemicalService()->getMoietiesByName($ref);

			if (!count($result))
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
				$errors[] = "No results";
			}
			else
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
				foreach ($result as $row)
				{
					$data[] = [
						"id" => $row->id,
						"name" => $row->name,
						"image" => $row->image,
					];
				}
			}

			return $this->respond($status, $errors, $data);
		}
		else
		{

			$errors = [];
			$data = [];

			$result = Services::getChemicalService()->getMoietyById($ref);

			if (!count($result))
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
				$errors[] = "No results";
			}
			else
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
				foreach ($result as $row)
				{
					$data[] = [
						"id" => $row->id,
						"name" => $row->name,
						"image" => $row->image,
					];
				}
			}

			return $this->respond($status, $errors, $data);
		}
	}

	/**
	 * Insert row
	 *
	 * @return Response $response
	 */
	public function createAction()
	{
		$errors = [];
		$data = get_object_vars($this->request->getJsonRawBody());

		$entity = new Entity();

		foreach ($data as $key => $value)
		{
			!array_key_exists($key, Entity::columnMap())
				? $errors[] = "Unknown: " . $key
				: null
			;
		}

		if (!count($errors))
		{
			if ($entity->create($data))
			{
				$status = [
					"code" => 201,
					"message" => "Created",
				];

				$data['id'] = $entity->getId();
			}
			else
			{
				$status = [
					"code" => 409,
					"message" => "Conflict",
				];
				foreach ($entity->getMessages() as $message)
				{
					$errors[] = $message->getMessage();
				}
			}
		}
		else
		{
			$status = [
				"code" => 400,
				"message" => "Bad request",
			];
		}

		return $this->respond($status, $errors, $data);
	}

	/**
	 * Update by $id
	 *
	 * @param int $id
	 * @return Response $response
	 */
	public function updateAction($id)
	{

		$errors = [];
		$data = get_object_vars($this->request->getJsonRawBody());

		$entity = Entity::findFirst($id);

		foreach ($data as $key => $value)
		{
			!array_key_exists($key, Entity::columnMap())
				? $errors[] = "Unknown: " . $key
				: null
			;
		}

		if (!count($errors))
		{
			if ($entity->update($data))
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
			}
			else
			{
				$status = [
					"code" => 409,
					"message" => "Conflict",
				];
				foreach ($entity->getMessages() as $message)
				{
					$errors[] = $message->getMessage();
				}
			}
		}
		else
		{
			$status = [
				"code" => 400,
				"message" => "Bad request",
			];
		}

		return $this->respond($status, $errors, $data);
	}

	/**
	 * Delete by $id
	 *
	 * @param $id
	 * @return Response $response
	 * @internal param int $id
	 */
	public function deleteAction($id)
	{
		$errors = [];
		$data = [];

		$entity = Entity::findFirst($id);

		if ($entity)
		{

			if ($entity->delete())
			{
				$status = [
					"code" => 200,
					"message" => "OK",
				];
			}
			else
			{
				$status = [
					"code" => 409,
					"message" => "Conflict",
				];
				foreach ($entity->getMessages() as $message)
				{
					$errors[] = $message->getMessage();
				}
			}
		}
		else
		{
			$status = [
				"code" => 404,
				"message" => "Not found",
			];
		}

		return $this->respond($status, $errors, $data);
	}
}
