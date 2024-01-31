<?php
namespace Repository;
use Core\DB\DbConnection;
/**
 * @throws \Exception
 */
function getTagList():array
{
    $connection = DbConnection::getDbConnection();

    $query = "SELECT `ID`,`Title` from TAG";

    $result = mysqli_query($connection, $query);

    if (!$result)
    {
        throw new Exception(mysqli_error($connection));
    }
    $tags = [];

    while ($row = mysqli_fetch_assoc($result))
    {
        $tags[] = new \Up\Models\Tag($row['ID'], $row['Title'],null);
    }

    return $tags;
}
?>