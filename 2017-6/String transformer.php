<?php
/**
 * Given a string, return a new string that has transformed based on the input:

  Change case of every character, ie. lower case to upper case, upper case to lower case.
  Reverse the order of words from the input.
  For example:

  stringTransformer('Example Input')/string_transformer("Example Input")
  (depending on the language you are completing the Kata in) should return 'iNPUT eXAMPLE'

  You may assume the input only contain English alphabet and spaces.
 *
 * 给定一个字符串，根据以下规则转换输出：
 * 让大小写反转，并且倒序输出单词
 * 输入只包含英文字母和空格
 *
 * @filename String transformer.php
 * @encoding UTF-8
 * @datetime 2017-2-6 11:45:47
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）
echo <<<EOT
stringTransformer('Example Input')/string_transformer("Example Input")

iNPUT eXAMPLE
EOT;

// My Solutions（我的方案）

function string_transformer($s)
{
    return implode(' ',
        array_reverse(explode(' ',
                implode('',
                    array_map(function($data) {
                        return strtolower($data) == $data ? strtoupper($data) : strtolower($data);
                    }, str_split($s))))));
}

// About（关于）
//1、用str_split和implode在数组和字符串之间转化，并没有什么问题
//2、不过我看到了一个更加简洁的办法，利用异或（^），答案如下
//对这个答案给一个解释
//（1）一个变量按位异或自己的结果为0，即：a ^ a = 0；
//（2）一个变量按位异或0的结果为自己，即：a ^ 0 = a；
function string_transformer2($str)
{
    return implode(' ',
        array_reverse(explode(' ', strtolower($str) ^ strtoupper($str) ^ $str)));
}
