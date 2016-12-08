<?php

/**
 * 【Convert an array of strings to array of numbers】：把字符串构成的数组转成数字
 */
/**
 * 问题描述：哦不！有一些有趣的（其实作者想说“糟糕的”吧）给你的API返回数据里的数组的数字是字符串形式的！
 * 你需要重写整个数组把它们（指那些字符串）转成正确的数据类型（我觉得作者是java程序员，PHP才不管类型的）
 * 创建一个函数
 * 让数组里的字符形式的数字转成数字
 */
/**
 * 栗子：
 */
//ie:["1", "2", "3"] to [1, 2, 3]
/**
 * 其他：也可以正常转化float类型
 */

/**
 * 我的方案：
 */
function toNumberArray(array $stringArray)
{
    return array_map(function($string) {
        return (float) $string;
    }, $stringArray);
}

/**
 * 我的思路：
 * 1、说白了就是一个强制类型转化，同样的，我们可以用array_map代替foreach循环
 * 2、剩下的就是把字符串强制转化为数字，而且支持float，直接float一下不就好了（-。-不难啊）
 * 3、更古怪的方法：PHP在运算时，强制把字符串转为数字运算，利用这个特点，我们只要对字符串进行数字0的操作就可以了！方案二如下：
 */
function toNumberArray2(array $stringArray)
{
    return array_map(function($string) {
        return $string + 0;
    }, $stringArray);
}
