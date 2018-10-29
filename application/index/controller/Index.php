<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function pinyin()
    {
        vendor('overtrue.pinyin.src.Pinyin');
        $pinyin = new \Overtrue\Pinyin\Pinyin();

        echo '<br/>';
        echo '<span style="font-weight: bold;">一、拼音数组</span>';
        echo '<br/>';
        echo '1.带着希望去旅行，比到达终点更美好';
        $str = $pinyin->convert('带着希望去旅行，比到达终点更美好');
        dump($str);
        echo '2.带着希望去旅行，比到达终点更美好';
        echo '带声调转化:带着希望去旅行，比到达终点更美好';
        $str = $pinyin->convert('带着希望去旅行，比到达终点更美好', PINYIN_TONE);
        dump($str);
        echo '3.带着希望去旅行，比到达终点更美好';
        $str = $pinyin->convert('带着希望去旅行，比到达终点更美好', PINYIN_ASCII_TONE);
        dump($str);

        echo '<br/>';
        echo '<span style="font-weight: bold;">二、生成用于链接的拼音字符串</span>';
        echo '<br/>';
        echo '1.带着希望去旅行';
        $str = $pinyin->permalink('带着希望去旅行'); // dai-zhe-xi-wang-qu-lyu-xing
        dump($str);
        echo '2.带着希望去旅行';
        $str = $pinyin->permalink('带着希望去旅行', '.'); // dai.zhe.xi.wang.qu.lyu.xing
        dump($str);

        echo '<br/>';
        echo '<span style="font-weight: bold;">三、获取首字符字符串</span>';
        echo '<br/>';
        echo '1.带着希望去旅行';
        $str = $pinyin->abbr('带着希望去旅行'); // dzxwqlx
        dump($str);
        echo '2.带着希望去旅行';
        $str = $pinyin->abbr('带着希望去旅行', '-'); // d-z-x-w-q-l-x
        dump($str);
        echo '3.你好2018！';
        $str = $pinyin->abbr('你好2018！', PINYIN_KEEP_NUMBER); // nh2018
        dump($str);
        echo '4.Happy New Year! 2018！';
        $str = $pinyin->abbr('Happy New Year! 2018！', PINYIN_KEEP_ENGLISH); // HNY2018
        dump($str);

        echo '<br/>';
        echo '<span style="font-weight: bold;">四、翻译整段文字为拼音,将会保留中文字符：，。 ！ ？ ： “ ” ‘ ’ 并替换为对应的英文符号。</span>';
        echo '<br/>';
        echo '1.带着希望去旅行，比到达终点更美好！';
        $str = $pinyin->sentence('带着希望去旅行，比到达终点更美好！');// dai zhe xi wang qu lyu xing, bi dao da zhong dian geng mei hao!
        dump($str);
        echo '2.带着希望去旅行，比到达终点更美好！';
        $str = $pinyin->sentence('带着希望去旅行，比到达终点更美好！', PINYIN_TONE);// dài zhe xī wàng qù lǚ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo!
        dump($str);

        echo '<br/>';
        echo '<span style="font-weight: bold;">五、翻译姓名:姓名的姓的读音有些与普通字不一样，比如 ‘单’ 常见的音为 dan，而作为姓的时候读 shan。</span>';
        echo '<br/>';
        echo '1.单某某';
        $str = $pinyin->name('单某某'); // ['shan', 'mou', 'mou']
        dump($str);
        echo '2.单某某';
        $str = $pinyin->name('单某某', PINYIN_TONE); // ["shàn","mǒu","mǒu"]
        dump($str);
    }
}
