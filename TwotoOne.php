<?php

/**
 * 【Two to One】：二合一
 */
/**
 * 问题描述：把两个只从a到z的字符串，s1和s2，返回一个尽可能长的，排好序的，包含了所有在s1和s2出现过的字符的字符串，每种字符只能出现一次
 */
/**
 * 栗子：
 */
//a = "xyaabbbccccdefww"
//b = "xxxxyyyyabklmopq"
//longest(a, b)->"abcdefklmopqwxy"
//
//a = "abcdefghijklmnopqrstuvwxyz"
//longest(a, a)->"abcdefghijklmnopqrstuvwxyz"

/**
 * 我的方案：
 */
function longest($a, $b)
{
    return implode('', array_intersect([
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
            ], array_unique(str_split($a . $b))));
}

/**
 * 我的思路：
 * 1、做完Mumbling这个题目的时候，我看了好多别人的代码，很多都是一句话搞定的，于是……我中毒了，所以才有了这样的答案
 * 2、基于上面的装逼思路，sort函数不是返回一个排序好的数组，而是对原数组重排，所以我放弃了sort函数去排序！
 * 3、注意到题目中说的，只有a-z的字符串！辣么，我可以直接用一串排序好的数组去做交集得到排序之后的数组
 * 4、所以就是，先把两个字符串拼接（.），然后打散（str_split），去重（array_unique），求交集（array_intersect），最后合并（implode）
 */