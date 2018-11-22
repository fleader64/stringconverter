<?php

use \PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase
{
    public function testCorrectConvert(){
        $converter = new \Fleader64\StringConverter();
        $this->assertEquals('elmno aegnor aaabnn aelpp' , $converter->getWordOrderedString('lemon orange banana apple'));
        $this->assertEquals('илмно аеилнпсь аабнн бклооя',  $converter->getWordOrderedString('лимон апельсин банан яблоко'));
        $this->assertEquals('ααββγγ αααβββγγγ', $converter->getWordOrderedString('αβγαβγ αβγαβγαβγ'));
    }
}