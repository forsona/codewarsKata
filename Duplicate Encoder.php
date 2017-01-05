<?php

/**
 * The goal of this exercise is to convert a string to a new string
 * where each character in the new string is '(' if that character appears only once in the original string,
 * or ')' if that character appears more than once in the original string.
 * Ignore capitalization when determining if a character is a duplicate.
 * 这道题的目的是转化一个字符串成为一个新的字符串，规则是，如果原字符串的字符只出现了一次，那么替换成“(”,
 * 多余一次的话，就替换成“)”
 *
 *
 * Note
 * 
 * @filename Duplicate Encoder.php
 * @encoding UTF-8
 * @datetime 2017-1-5 22:55:58
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
//"din" => "((("
//"recede" => "()()()"
//"Success" => ")())())"
//"(( @" => "))(("
// My Solutions（我的方案）
function duplicate_encode($word)
{
    return implode('',
        array_map(function($char) use ($word) {
            return substr_count(strtolower($word), $char) == 1 ? '(' : ')';
        }, str_split(strtolower($word))));
}
// About（关于）

/**
 * 1、为了实现一句话，这里重复调用了n次strtolower函数，正确的做法应该是保存成一个临时的变量，嗯……一句话，一句话
 * 2、implode和str_split（或者explode）应该是数组和字符串转化中用的最多的，这里继续通过强大的array_map去处理循环，
 *    当然，你首先需要把字符串转成数组
 */

