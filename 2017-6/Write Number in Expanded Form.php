<?php
/**
 * You will be given a number and you will need to return it as a string in Expanded Form. For example:

  expanded_form(12); // Should return "10 + 2"
  expanded_form(42); // Should return "40 + 2"
  expanded_form(70304); // Should return "70000 + 300 + 4"
  NOTE: All numbers will be whole numbers greater than 0.
 *
 * 给定一个大于0的数字，返回一个字符串表示它的展开式
 * 
 * @filename Write Number in Expanded Form.php
 * @encoding UTF-8
 * @datetime 2017-2-6 14:26:35
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
echo <<<EOT
expanded_form(12); // Should return "10 + 2"
expanded_form(42); // Should return "40 + 2"
expanded_form(70304); // Should return "70000 + 300 + 4"
EOT;

// My Solutions（我的方案）
function expanded_form($n)
{
    return implode(' + ',
        array_filter(array_map(function($data) use ($n) {
                static $pos;
                return pow(10, count(str_split($n)) - $pos++ - 1) * $data;
            }, str_split($n))));
}
// About（关于）

//1、为了不使用赋值号我也是够丧心病狂的了！为了记录array_map循环的位置，这里使用了static去保存
//2、注意，$pos并没有赋初始值，而且不会有php错误，这个可以注意一下
