<?php

class Database
{
    /**
     * Konfigurasi Database
     */
    private string $host = "localhost";
    private string $database = "school_library_db";
    private string $username = "root";
    private string $password = "";

    /**
     * Menyimpan satu koneksi database
     */
    private ?mysqli $connection = null;

    /**
     * Mengembalikan koneksi database
     */
    public function connect(): mysqli
    {
        if ($this->connection === null) {

            $this->connection = new mysqli(
                $this->host,
                $this->username,
                $this->password,
                $this->database
            );

            if ($this->connection->connect_error) {
                die("Database Connection Failed : " . $this->connection->connect_error);
            }

            $this->connection->set_charset("utf8mb4");
        }

        return $this->connection;
    }
}