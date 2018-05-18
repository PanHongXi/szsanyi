<?php
function facegif($content)
{
    $arr = ['[糗大了]', '[示爱]', '[晕]', '[酷]', '[流泪]', '[饿了]', '[闭嘴]', '[做鬼脸]', '[馋]', '[坏笑]', '[抓狂]', '[呵呵]', '[淡定]', '[冷汗]', '[色]', '[惊讶]', '[希望]', '[伤心]', '[微笑]', '[惊吓]', '[哈哈]', '[吃饭]', '[观察]', '[高兴]', '[皱眉]', '[大囧]', '[邪恶]', '[锁眉]', '[惊喜]', '[小怒]', '[无语]', '[傻笑]', '[黑线]', '[喜极而泣]', '[口水]', '[不说话]', '[抽烟]', '[汗]', '[尴尬]', '[小眼睛]', '[龇牙]', '[亲亲]', '[哭泣]', '[大吃一惊]', '[流汗]', '[不高兴]', '[得意]', '[阴脸]', '[装大款]', '[吐舌]', '[暗地观察]', '[吐血]', '[脸红]', '[肿包]', '[抠鼻]', '[赞一个]', '[中指]', '[期待]', '[倒地]', '[火冒三丈]', '[吐]', '[喷水]', '[喷血]', '[蜡烛]', '[想一想]', '[认真听讲]', '[不好意思]', '[欢呼]', '[便便]', '[鼓掌]', '[深思]', '[害羞]', '[苦恼]', '[长草]', '[无所谓]', '[咽气]', '[投降]', '[没看见]', '[击掌]', '[献黄瓜]', '[献花]', '[撞墙]', '[中刀]', '[中枪]'];

    foreach ($arr as $k => $v) {
        $nameGif = FACE_GIF . $k . '.gif';
        $srcGif = '<img src="'.$nameGif.'"/>';
        $content = str_replace($v, $srcGif, $content);
    }

    return $content;
}

//function getSeoVersion($phrase) {
//    return preg_replace('/[^a-z0-9_-]/i', '', strtolower(str_replace(' ', '-', trim($phrase))));
//}
//
//// example usage:
//echo getSeoVersion("German cars are amazing.");