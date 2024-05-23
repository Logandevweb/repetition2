<?php
namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "select *, b.id as bookID, a.id as authorID
    from books b
    inner join authors a on b.author_id = a.id
    order by b.created_at desc
    limit 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
