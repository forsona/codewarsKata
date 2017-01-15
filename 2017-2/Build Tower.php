<?php
/**
 * Build Tower

  Build Tower by the following given argument:
  number of floors (integer and always greater than 0).

  Tower block is represented as *

  Python: return a list;
  JavaScript: returns an Array;
  C#: returns a string[];
  PHP: returns an array;
  C++: returns a vector<string>;
  Haskell: returns a [String];
  Have fun!
 *
 * 给定层数，打印一个塔，php返回一个数组
 * 
 * @filename Build Tower.php
 * @encoding UTF-8
 * @datetime 2017-1-15 18:37:58
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
echo <<<EOT
for example, a tower of 3 floors looks like below
[
  '  *  ',
  ' *** ',
  '*****'
]
EOT;

// My Solutions（我的方案）
function tower_builder($n)
{
    return array_map(function($num) use ($n) {
        return str_repeat(' ', $n - $num).str_repeat('*', 2 * $num - 1).str_repeat(' ',
                $n - $num);
    }, range(1, $n));
}
// About（关于）

// 1、使用range创造一个数组，因为array_map是代替foreach而不是for的
// 2、剩下的就是数学计算