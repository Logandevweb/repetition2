<?php
namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "select *
    from books
    order by created_at desc
    limit 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
