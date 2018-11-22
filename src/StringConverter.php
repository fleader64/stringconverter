<?php

namespace Fleader64;

/**
 * Class StringConverter
 * @package Fleader64
 */
class StringConverter
{

    /**
     * @param $string
     * @return string
     */
    public function getWordOrderedString($string)
    {
        $arr = explode(' ',$string);

        array_walk($arr,function(&$val,$key) {
            $str_arr = preg_split('//u',$val,-1,PREG_SPLIT_NO_EMPTY);
            sort($str_arr);
            $val = implode('',$str_arr);
        });

        return implode(' ',$arr);

    }
}