<?php
/**
 * Move all exclamation marks to the end of the sentence
 * 把所有的感叹号都移动到句子的结尾
 *
 * Note
 * Please don't post issue about difficulty or duplicate.
 * 
 * @filename Move all exclamation marks to the end of the sentence.php
 * @encoding UTF-8
 * @datetime 2017-1-5 22:02:14
 * @author forsona <2317216477@qq.com>
 * @link http://github.com/forsona
 */
// Examples（栗子）

remove("Hi!") === "Hi!";
remove("Hi! Hi!") === "Hi Hi!!";
remove("Hi! Hi! Hi!") === "Hi Hi Hi!!!";
remove("Hi! !Hi Hi!") === "Hi Hi Hi!!!";
remove("Hi! Hi!! Hi!") === "Hi Hi Hi!!!!";

// My Solutions（我的方案）

function remove($s)
{
    return str_replace('!', '', $s).str_repeat('!', substr_count($s, '!'));
}
// About（关于）

/**
 *  1、啊~隔了很久（github上显示是28天）终于又回来了，这次用了netbeans的模板，之前咋没有想到呢？-。-
 *  2、写这个的主要目的是……证明我来过~你们也看到了，这些代码都是很简单的呢
 *  3、翻译什么的，能解释清楚题目意思就ok，对吧
 *  4、按照惯例的一句话代码，这里的一句话指的是，不使用赋值号“=”
 *  5、以后可能会写一些lua的代码（php也不会忘记的好伐）
 *  6、新年快乐~
 */
/**
 * 依旧是字符串处理的一个栗子，多看看手册应该可以发现php确实有很多现成的
 */

/**
 * 下面这个答案是我看到别人的，这个答案说明了一点，看手册要仔细啊！！
 * 解释：str_replace的第四个参数是用来得到被替换次数的参数，因此……
 */
function remove2($s)
{
    return str_replace("!", "", $s, $c).str_repeat('!', $c);
}
