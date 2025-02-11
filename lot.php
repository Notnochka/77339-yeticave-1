<?php

require_once 'data.php';

/** @var string $userName */
/** @var mysqli $db */

$categories = getCategories($db);

$lotId = getLotId($db);
$lot = getLotById($db, $lotId);

$content = includeTemplate('lot.php', [
    'categories' => $categories,
    'userName' => $userName,
    'lot' => $lot
]);

$lotTitle = $lot['title'];

$layoutContent = includeTemplate('layout.php', [
    'content' => $content,
    'title' => $lotTitle,
    'userName' => $userName,
    'categories' => $categories,
]);

print($layoutContent);
