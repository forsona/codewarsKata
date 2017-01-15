<?php

/**
 * Description:

  If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

  Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.

  Note: If the number is a multiple of both 3 and 5, only count it once.
  Courtesy of ProjectEuler.net
 *
 * 如果我们列出10以内3和5的倍数的数字，我们得到3，5，6，9，和为23
 * 给出你的解决方案，使得返回某个数字内3和5的倍数的数字的和
 *
 * 注意：如果一个数字同时是3和5的倍数，那么只计算一次
 * 
 * @filename Multiples of 3 and 5.php
 * @encoding UTF-8
 * @datetime 2017-1-15 18:42:43
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
// My Solutions（我的方案）
function solution($number)
{
    return array_sum(array_map(function($data) {
            return ($data % 3 == 0 || $data % 5 == 0) ? $data : 0;
        }, range(1, $number - 1)));
}
// About（关于）

// 1、只计算一次这种要求刚好符合循环一次的特点，因此还是可以用range函数创建一个数组
// 2、注意需要减一，因为是某个数字以内