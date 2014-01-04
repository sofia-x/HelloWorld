<?php

class Writer
{


public function Write($test)
{
    return $test;
}


}

$writer = new Writer();
echo $writer->Write("meow");