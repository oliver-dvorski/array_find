<?php

function array_find(array $items, callable $comparator): mixed
{
    foreach ($items as $item) {
        if ($comparator($item)) {
            return $item;
        }
    }

    return null;
}
