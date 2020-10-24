<?php
class Category
{
  // Constructor
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // DB stuff
  private $conn;
  private $table = 'categories';

  // Properties
  public $id;
  public $name;
  public $created_at;

  // Get categories
  public function read()
  {
    // Create query
    $query = 'SELECT
      id,
      name,
      created_at
    FROM
      ' . $this->table . '
    ORDER BY
      created_at DESC
    ';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute query
    $stmt->execute();

    return $stmt;
  }
}