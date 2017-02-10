<?php
/**
 * There is an array with some numbers. All numbers are equal except for one. Try to find it!

  find_uniq([1, 1, 1, 2, 1, 1]); // => 2
  find_uniq([0, 0, 0.55, 0, 0]); // => 0.55
  It’s guaranteed that array contains 3 or more numbers.
 *
 * 给定一个元素大于3的数组，找出不同的一个元素
 *
 * @filename Find the unique number.php
 * @encoding UTF-8
 * @datetime 2017-2-6 14:03:53
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
echo <<<EOT
find_uniq([1, 1, 1, 2, 1, 1]); // => 2
find_uniq([0, 0, 0.55, 0, 0]); // => 0.55
EOT;

// My Solutions（我的方案）
function find_uniq($a)
{
    return array_search(1, array_count_values(array_map('strval', $a)));
}
// About（关于）

//1、题目意思很明确，就是找出出现了一次的项，因此array_count_values是再适合不过的了
//2、值得注意的是，array_count_values这个函数并不支持浮点数-。-，所以需要把浮点数转成字符串，这样就不会报错了