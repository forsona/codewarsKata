<?php

/**
 * 【Split Strings】：分割字符串
 */
/**
 * 问题描述：写一个solution函数，把字符串打散成两个为一组，遇到奇数个的组，就在第二位补下划线“_”
 */
/**
 * 栗子：
 */
//solution('abc') // should return ['ab', 'c_']
//solution('abcdef') // should return ['ab', 'cd', 'ef']

/**
 * 我的方案：
 */
function solution($str)
{
    return array_map(function($data) {
        return str_pad($data, 2, '_', STR_PAD_RIGHT);
    }, str_split($str, 2));
}

/**
 * 我的思路：
 * 1、继续之前的装逼做法，我们使用array_map代替foreach
 * 2、补全这个很明显对应了函数str_pad
 * 3、打散，自然也是需要str_split函数的
 * 4、所以就是，先按照两个一组打散（str_split），然后用array_map循环，用str_pad在末尾补全下划线
 */