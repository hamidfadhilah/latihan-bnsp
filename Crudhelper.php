<?php

class CrudHelper
{

    private $db;
    private $table;

    public function __construct($db, $table)
    {
        $this->db    = $db;
        $this->table = $table;
    }

    public function create($data)
    {
        // Menyiapkan data untuk INSERT
        $columns = implode(",", array_keys($data));
        $values  = "'" . implode("','", array_values($data)) . "'";

        // Membangun query
        $sql = "INSERT INTO " . $this->table . " (" . $columns . ") VALUES (" . $values . ")";

        // Mengeksekusi query
        if ($this->db->query($sql) === true) {
            return true;
        } else {
            return false;
        }
    }

    public function read($where = null)
    {
        // Membangun query
        $sql = "SELECT * FROM " . $this->table;
        if ($where != null) {
            $sql .= " WHERE " . $where;
        }

        // Mengeksekusi query
        $result = $this->db->query($sql);

        // Mengembalikan data dalam bentuk array
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function update($data, $where)
    {
        // Menyiapkan data untuk UPDATE
        $updates = [];
        foreach ($data as $key => $value) {
            $updates[] = "$key='$value'";
        }
        $updateString = implode(",", $updates);

        // Membangun query
        $sql = "UPDATE " . $this->table . " SET " . $updateString . " WHERE " . $where;

        // Mengeksekusi query
        if ($this->db->query($sql) === true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($where)
    {
        // Membangun query
        $sql = "DELETE FROM " . $this->table . " WHERE " . $where;

        // Mengeksekusi query
        if ($this->db->query($sql) === true) {
            return true;
        } else {
            return false;
        }
    }
}
