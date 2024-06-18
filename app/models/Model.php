<?php

namespace app\models;

use app\classes\Connection;

abstract class Model
{
  protected $db_connection;

  public function __construct()
  {
    $this->db_connection = Connection::connect();
  }

  public function all()
  {
    $sql = "SELECT * FROM {$this->table}";

    $list = $this->db_connection->prepare($sql);
    $list->execute();

    return $list->fetchAll();
  }

  public function find($field, $value)
  {
    $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";

    $list = $this->db_connection->prepare($sql);
    $list->bindValue(1, $value);
    $list->execute();

    return $list->fetch();
  }

  public function delete($field, $value)
  {
    $sql = "DELETE FROM {$this->table} WHERE {$field} = ?";

    $delete = $this->db_connection->prepare($sql);
    $delete->bindValue(1, $value);
    $delete->execute();

    return $delete->rowCount();
  }
}
