<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 验证语言行
    |--------------------------------------------------------------------------
    |
    | 以下语言行包含验证器类使用的默认错误消息。部分规则存在多个版本，
    | 例如大小规则。请随意在此处调整每个消息。
    |
    */
    
    /*
    | https://gist.github.com/yukimunet/7d65e2272c70b804f73a4dc68cb5f1c0
    */

    'accepted'             => '请接受:attribute。',
    'active_url'           => '请提供有效的URL地址。',
    'after'                => '请提供:date之后的日期。',
    'after_or_equal'       => '请提供:date之后或等于:date的日期。',
    'alpha'                => '请只输入英文字母。',
    'alpha_dash'           => '请只输入英文字母、数字、破折号和下划线。',
    'alpha_num'            => '请只输入英文字母和数字。',
    'array'                => '请提供一个数组。',
    'before'               => '请提供:date之前的日期。',
    'before_or_equal'      => '请提供:date之前或等于:date的日期。',
    'between'              => [
        'numeric' => '请提供:min到:max之间的数字。',
        'file'    => '请提供:min到:max KB之间的文件。',
        'string'  => '请提供:min到:max个字符的字符串。',
        'array'   => '请提供:min到:max个元素的数组。',
    ],
    'boolean'              => '请提供一个布尔值。',
    'confirmed'            => ':attribute与确认字段不匹配。',
    'date'                 => '请提供一个正确格式的日期。',
    'date_format'          => '请提供格式为":format"的日期。',
    'different'            => '请提供一个不同于:other的值。',
    'digits'               => '请提供:digits位的数字。',
    'digits_between'       => '请提供:min到:max位的数字。',
    'dimensions'           => '图片尺寸不正确。',
    'distinct'             => '提供的:attribute已经存在。',
    'email'                => '请提供一个有效的电子邮件地址。',
    'exists'               => '提供的:attribute不存在。',
    'file'                 => '请提供一个文件。',
    'filled'               => '请提供一个非空值。',
    'image'                => '请提供一个图片文件。',
    'in'                   => '请提供:values中的一个值。',
    'in_array'             => ':attribute不在:other中。',
    'integer'              => '请提供一个整数。',
    'ip'                   => '请提供一个有效的IP地址。',
    'ip4'                  => '请提供一个有效的IPv4地址。',
    'ip6'                  => '请提供一个有效的IPv6地址。',
    'json'                 => '请提供一个有效的JSON字符串。',
    'max'                  => [
        'numeric' => '请提供一个不大于:max的数字。',
        'file'    => '请提供一个不大于:max KB的文件。',
        'string'  => '请提供一个不超过:max个字符的字符串。',
        'array'   => '请提供一个不超过:max个元素的数组。',
    ],
    'mimes'                => '请提供:values格式的文件。',
    'mimetypes'            => '请提供:values格式的文件。',
    'min'                  => [
        'numeric' => '请提供一个不小于:min的数字。',
        'file'    => '请提供一个不小于:min KB的文件。',
        'string'  => '请提供一个至少:min个字符的字符串。',
        'array'   => '请提供一个至少:min个元素的数组。',
    ],
    'not_in'               => '请提供:values之外的值。',
    'numeric'              => '请提供一个数字。',
    'present'              => '请提供一个当前时间。',
    'regex'                => '请提供一个符合规则的:attribute。',
    'required'             => '请提供:attribute。',
    'required_if'          => '当:other为:value时，请提供:attribute。',
    'required_if_ex'       => '当:other已指定时，请提供:attribute。',
    'required_unless'      => '除非:other为:values，否则请提供:attribute。',
    'required_with'        => '当:values中的任意项已指定时，请提供:attribute。',
    'required_with_all'    => '当:values中的所有项已指定时，请提供:attribute。',
    'required_without'     => '当:values中的任意项未指定时，请提供:attribute。',
    'required_without_all' => '当:values中的所有项未指定时，请提供:attribute。',
    'same'                 => ':attribute与:other不匹配。',
    'size'                 => [
        'numeric' => '请提供一个大小为:size的数字。',
        'file'    => '请提供一个大小为:size KB的文件。',
        'string'  => '请提供一个长度为:size的字符串。',
        'array'   => '请提供一个包含:size个元素的数组。',
    ],
    'string'               => '请提供一个字符串。',
    'timezone'             => '请提供一个有效的时区。',
    'unique'               => ':attribute已经存在。',
    'uploaded'             => ':attribute上传失败。',
    'url'                  => '请提供一个有效的URL地址。',
    'summary_condition'    => '此汇总类型只适用于数值字段。',
    'class_requirement'    => '要使用此插件，请先安装以下库：:composer',

    /*
    |--------------------------------------------------------------------------
    | 自定义验证语言行
    |--------------------------------------------------------------------------
    |
    | 在这里，您可以为属性指定自定义的验证消息，使用约定"attribute.rule"来命名行。
    | 这使得为给定的属性规则指定特定的自定义语言行变得更加快速。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'options.regex_validate' => [
            'regular_expression' => '不是一个有效的正则表达式。',
        ],
        'child_custom_table_id' => [
            'loop_relation' => '已经关联到另一个表。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自定义验证属性
    |--------------------------------------------------------------------------
    |
    | 以下语言行用于将属性占位符替换为更易于阅读的内容，例如“电子邮件地址”而不是“email”。
    | 这只是让我们的消息更清晰一些。
    |
    */

    'attributes' => [
        'action_settings' => [
            'notify_action_target' => '通知对象',
        ],
    ],

];
