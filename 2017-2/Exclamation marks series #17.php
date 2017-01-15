<?php
/**
 * Description
 *
 * 给定一些感叹号和问号组成的字符串，感叹号权重2，问号权重3，计算两个字符串的权重和
 * 如果左边的大，就返回“Left”，小“Right”，一样“Balance”
 * 
 * @filename Exclamation marks series #17.php
 * @encoding UTF-8
 * @datetime 2017-1-15 18:48:54
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */

// Examples（栗子）

// My Solutions（我的方案）
function balance($l, $r)
{
    return strlen(str_replace('?', '111', str_replace('!', '11', $l))) > strlen(str_replace('?',
                '111', str_replace('!', '11', $r))) ? 'Left' : (
        strlen(str_replace('?', '111', str_replace('!', '11', $l))) == strlen(str_replace('?',
                '111', str_replace('!', '11', $r))) ? 'Balance' : 'Right'
        );
}
// About（关于）

// 1、其实这题用赋值语句会更好
// 2、由于两个字符串处理规则一样，因此也可以使用array_map