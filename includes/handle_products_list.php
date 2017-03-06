<?php


/*
 * $database query
 */

$items = $db->query('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                     FROM items
                     LEFT JOIN categories
                     ON items.category = categories.id')->fetchAll();
