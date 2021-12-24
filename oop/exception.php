<?php
function getItemFromBook($book, $key)
{
    if (empty($book) || !key_exists($key, $book)) {
        throw new InvalidArgumentException("数组为空或者对应索引不存在！");
    }
    return $book[$key];
}
try {
    $val = getItemFromBook($book, 'desc');
} catch (Exception $exception) {
    echo $exception->getMessage();
    exit();
}
var_dump($val);