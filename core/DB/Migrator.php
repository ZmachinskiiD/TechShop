<?php

namespace Core\DB;

use Exception;
use Core\DB\DbConnection;
use Up\Services\ConfigurationService;

class Migrator
{
    private static string $configPath = __DIR__ . "/../../config/dbtime-config.txt";
    private static string $migrationsPath = __DIR__ . "/../../src/Migrations/";

    public static function getConfigPath(): string
    {
        return self::$configPath;
    }

    public static function getMigrationsPath(): string
    {
        return self::$migrationsPath;
    }

    /**
     * @throws Exception
     */
    public static function executeMigrations(): void
    {
//        var_dump(self::getConfigPath());
//        var_dump("\n");
//        var_dump(self::getMigrationsPath());
        if (!file_exists(self::getConfigPath()))
        {
            $dbConfigFile = fopen(self::getConfigPath(), "wb");

            fwrite($dbConfigFile, 0);
            fclose($dbConfigFile);
        }
        $queries = "";

        $DbTime = file_get_contents(self::getConfigPath());
        $migrationsDir = scandir(self::getMigrationsPath());

        $migrations = array_slice($migrationsDir, 2);
        $connection = DbConnection::get();

        foreach ($migrations as $migration)
        {
            $migrationTime = strtotime(substr($migration, 0, -4));

            if ($migrationTime > $DbTime)
            {
                $query = file_get_contents(self::getMigrationsPath() . $migration);

                $queries .= $query;
                file_put_contents(self::getConfigPath(), $migrationTime);

            }
        }
        if ($queries !== "")
        {
            if (!mysqli_multi_query($connection, $queries))
            {
                throw new \RuntimeException(mysqli_error($connection));
            }

        }
    }
}