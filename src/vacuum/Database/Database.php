<?php

namespace Vacuum\Database;

class Database 
{
	public function __construct($config)
	{
		\ORM::configure($config);
	}

	public static function getDatabase()
	{
		return \ORM::getDb();
	}

	private function table($table)
	{
		return \ORM::forTable($table);
	}

	private function getTableContent($table)
	{
		return $this->table($table)->findMany();
	}

	private function getRowById($table, $id)
	{
		return $this->atble($table)->findOne($id);
	}
}