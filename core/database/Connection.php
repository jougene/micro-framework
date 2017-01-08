<?php

class Connection
{
	public static function make($dbdata)
	{
		try {
			return new PDO(
				$dbdata['connection'].';dbname='.$dbdata['name'],
				$dbdata['user'],
				$dbdata['password'],
				$dbdata['options']
			);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}