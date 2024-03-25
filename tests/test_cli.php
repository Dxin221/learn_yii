<?php
// 要替换的文本
$text = "Hello, my name is {name} and I am {age} years old.";

// 定义替换规则，用花括号包裹的内容将被替换为对应的变量的值
$pattern = '/\{(\w+)\}/';

// 定义替换回调函数
function replaceCallback($matches) {
   echo "<pre>";print_r($matches);
    // $matches[0] 匹配到的完整字符串，$matches[1] 匹配到的子组
    $key = $matches[1];
    $values = [
        'name' => 'Alice',
        'age' => 30
    ];
    // 如果找到对应的键值，返回替换后的值，否则保持原样
    return isset($values[$key]) ? $values[$key] : $matches[0];
}

// 执行替换操作
$result = preg_replace_callback($pattern, 'replaceCallback', $text);

// 输出结果
echo $result;
