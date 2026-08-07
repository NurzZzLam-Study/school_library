<?php

require_once __DIR__ . '/../config/Database.php';

abstract class BaseModel
{
    protected mysqli $db;

    public function __construct()
    {
        $database = new Database();

        $this->db = $database->connect();
    }

    /**
     * Menjalankan prepared statement.
     */
    protected function execute(string $sql, string $types = "", array $params = []): mysqli_result|bool
    {
        $statement = $this->db->prepare($sql);

        if (!$statement) {
            throw new Exception($this->db->error);
        }

        if (!empty($params)) {
            $statement->bind_param($types, ...$params);
        }

        $statement->execute();

        $result = $statement->get_result();

        $statement->close();

        return $result ?: true;
    }

    /**
     * Mengambil satu baris data.
     */
    protected function first(string $sql, string $types = "", array $params = []): ?array
    {
        $result = $this->execute($sql, $types, $params);

        if ($result instanceof mysqli_result) {
            return $result->fetch_assoc() ?: null;
        }

        return null;
    }

    /**
     * Mengambil banyak data.
     */
    protected function get(string $sql, string $types = "", array $params = []): array
    {
        $rows = [];

        $result = $this->execute($sql, $types, $params);

        if ($result instanceof mysqli_result) {

            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;
    }
}