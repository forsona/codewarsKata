<?php

/**
 * 【Mumbling】：叽里咕噜（作者也不知道怎么描述题目）
 */
/**
 * 问题描述：这次没有题目，没有理论，下面的栗子会告诉你怎么写accum这个函数
 * （然后就给栗子，作者很耿直）
 */
/**
 * 栗子：
 */
//accum("abcd");    // "A-Bb-Ccc-Dddd"
//accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
//accum("cwAt");    // "C-Ww-Aaa-Tttt"

/**
 * 其他条件：这个函数的参数只是a到z和A到Z的字母
 */

/**
 * 我的方案：
 */
function accum($s)
{
    $list = str_split($s);
    $strArray = [];
    foreach ($list as $key => $row) {
        $pos = $key + 1;
        $strArray[] = ucfirst(strtolower(str_repeat($row, $pos)));
    }
    return implode('-', $strArray);
}

/**
 * 我的思路：
 * 1、先把字母一个一个打散：str_split
 * 2、然后按照字母的位置重复个数，刚好str_repeat可以派上用场
 * 3、得到的数组最后implode一下
 */
