<?php
/**
 * Find the sum of the odd numbers within an array, after cubing the initial integers.
 * This function will return undefined (NULL in PHP) if any of the values aren't numbers.
 * 计算一个数组里所有奇数的立方的和，如果数组中任何一项不是数字，返回null（PHP）
 *
 * Note
 * 
 * @filename Sum of Odd Cubed Numbers.php
 * @encoding UTF-8
 * @datetime 2017-1-5 22:22:36
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）

28 === cube_odd([1, 2, 3, 4]);

// My Solutions（我的方案）

function cube_odd($a)
{
    return in_array(null,
            array_map(function($data) {
                return is_numeric($data) ? $data : null;
            }, $a), true) ? null : array_sum(array_map(function($num) {
                return abs($num % 2) == 1 ? $num * $num * $num : 0;
            }, $a));
}
// About（关于）

/**
 * 1、惯例：一行（差点就写不出来了，不过确实有点复杂）
 * 2、其实是用array_map去先遍历一次，如果存在非数字的，就直接返回null，然后再用array_map去计算奇数，然后用array_num求数组的和
 * 3、可以使用pow函数去算立方
 */