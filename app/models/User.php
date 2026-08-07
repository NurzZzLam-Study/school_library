<?php

require_once __DIR__ . '/BaseModel.php';

class User extends BaseModel
{
    /**
     * Nama tabel
     */
    private string $table = 'users';

    /**
     * Cari user berdasarkan ID
     */
    public function findById(int $id): ?array
    {

    }

    /**
     * Cari user berdasarkan username
     */
    public function findByUsername(string $username): ?array
    {
        $sql = "SELECT * FROM {$this->table} WHERE username = ? LIMIT 1";
    
        $statement = $this->db->prepare($sql);
    
        $statement->bind_param("s", $username);
    
        $statement->execute();
    
        $result = $statement->get_result();
    
        $user = $result->fetch_assoc();
    
        $statement->close();
    
        return $user ?: null;
    }
    /**
     * Ambil semua role milik user
     */
    public function getRoles(int $userId): array
    {

    }

    /**
     * Ambil semua permission milik user
     */
    public function getPermissions(int $userId): array
    {

    }
}