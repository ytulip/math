<?php
$n = 6;
$m = 5;
$list = range(1,$n);
$obj = new ArrayObject($list);
$iterator = $obj->getIterator();

while (true)
{
    for($i = 1;$i < $m;$i++)
    {
        $iterator->next();
        if( !$iterator->valid())
        {
            $iterator->seek(0);
        }
    }

    echo $iterator->current();
    $key = $iterator->key();
    $iterator->next();
    if( !$iterator->valid())
    {
        $iterator->seek(0);
    }
    $obj->offsetUnset($key);

    if($obj->count() <= 1)
    {
        echo $iterator->current();
        exit;
    }

}
