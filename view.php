<?php
$text = $_POST["text"];
$right = array("貴","し","ぶ","で","応","ス","雑",'貨','見',"潰","め","キ","ぞ","舐","絶","対","得","溜","達","jp","NHK","XPERIA","円","LINEpay","PayPay","Twitter","ツイッター","instagram","インスタ","ライン","LINE","line","風","なさい","強","東京","シリコンバレー","google","グーグル","Google","スカイツリー","SKY TREE","TOKYO","ハ","amazon","アマゾン","乘","黑","snapdragon","SD","PUBG","労働","ラーメン","🇯🇵","🇰🇷","🇺🇸","🇬🇧","🇷🇺","🇩🇪","🇮🇳","🇿🇦","🇧🇷","オ");
$correct = array("贵","レ","ふ","て",'应','ヌ','杂',"货","见","溃","ぬ","ギ","そ","舐","绝","对","慧","贮","们","cn","CCTV","HUAWEI","人民元","alipay","WechatPay","weibo","ウェイボ","Tiktok","Tiktok","wechat","wechat","wechat","风","しなさい","强","深圳","深圳","百度","百度","百度","上海中心","shanghai tower","上海","八゜","亚马逊","亚马逊","乘","黑","Kirin","NM","荒野行動","極度勞動","うーメソ","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","才");
$nright = str_replace($text,$right,$correct);
echo($nright);
?>