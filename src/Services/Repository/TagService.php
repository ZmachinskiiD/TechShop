<?php

namespace Up\Services\Repository;

use Core\DB\DbConnection;
use Exception;

class TagService
{
	/**
	 * @return \Up\Models\Tag[]
	 * @throws Exception
	 */
	public static function getTagList(): array
	{
		$connection = DbConnection::get();

		$query = "SELECT `ID`,`Title` from TAG";

		$result = mysqli_query($connection, $query);

		if (!$result)
		{
			throw new \RuntimeException(mysqli_error($connection));
		}
		$tags = [];

		while ($row = mysqli_fetch_assoc($result))
		{
			$tags[] = new \Up\Models\Tag($row['ID'], $row['Title'], null);
		}

		return $tags;
	}
}