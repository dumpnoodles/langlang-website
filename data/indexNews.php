<?php
$json = json_decode(file_get_contents("php://input"), true);
$categoryId = $json['categoryId'];
$dataItem = null;
if($categoryId == 1){
    $dataItem = array(
        array(
            'id' => 10,
            'imgUrl' => 'xxxxxxx',
            'title' => '覆盖全国2000家口腔门诊的公益医疗合作协议在北京签订',
            'time' => '2019-11-18 12:00:03',
            'dec' => '朗朗医疗投资有限公司（以下简称朗朗医疗投资）、北京深蓝安康科技发展有限公司（以下简称深蓝安康）与名医看牙-深圳茗医口腔医生集团（以下简称名医看牙）三方就公益医疗在北京签订合作框架协议！'
        ),
        array(
            'id' => 11,
            'imgUrl' => 'xxxxxxx',
            'title' => '成都站∣国际化高端口腔连锁品牌——茁悦口腔加入“关爱口腔 健康中国”公益活动',
            'time' => '2019-11-28 12:00:03',
            'dec' => '2019年11月28日，“关爱口腔 健康中国”公益活动成都站启动暨授牌仪式正式举行。四川省各界热衷公益活动的老领导们、主办方朗朗医疗投资有限公司副总裁兼事业支持部总经理张靖先生、财务总监李生国先生、公益活动唯一指定种植体合作企业——西班牙泰科股份公司中国区总经理兼首席代表孙慧东先生、深圳市中金信富股权投资有限公司总经理兼华西牙科口腔护理项目组副组长刘麒麟先生、朗朗口腔事业合伙人简阳百年蕾氏牙科董事长朱英女士及中英人寿、招商银行等各界相关领导、业内人士共同出席了活动。'
        ),
        array(
            'id' => 45,
            'imgUrl' => 'xxxxxxx',
            'title' => '震撼开启！“关爱口腔 健康中国”公益活动平顶山站来了！',
            'time' => '2019-12-03 13:05:20',
            'dec' => '6月16日下午，河南省平顶山市广播电视台演播大厅座无虚席、高朋满座。由中国保健协会指导，中国保健协会健康服务与研究专业委员会、朗朗医疗投资有限公司主办的“关爱口腔 健康中国”公益活动平顶山站启动仪式隆重举行！'
        )
    );
}

if($categoryId == 2){
    $dataItem = array(
        array(
            'id' => 58,
            'imgUrl' => 'xxxxxxx',
            'title' => '华西&朗朗战略合作新进展！看看他俩你就明白了',
            'time' => '2019-12-27 13:05:20',
            'dec' => '2019年12月， 西班牙加泰罗尼亚国际大学副教授Dr.Alberto Monje以第一作者发表在《临床口腔种植研究》——一个全球影响力很高的牙科专业杂志上的论文《种植体稳定性指标在监测进行性种植体周围骨质流失中的诊断准确性：犬的实验研究》，其实验结果对比显示：Ticare的植入物具有更好的骨结合或稳定性。'
        ),
        array(
            'id' => 345,
            'imgUrl' => 'xxxxxxx',
            'title' => '“我当小牙医，给爸爸妈妈看牙”',
            'time' => '2019-12-08',
            'dec' => '六一儿童节，“小牙医公益活动”在大连西岗朗朗富来慕口腔门诊部举行，10名儿童在爸爸妈妈的陪伴下进行了生动的小牙医职业体验'
        ),
        array(
            'id' => 34545,
            'imgUrl' => 'xxxxxxx',
            'title' => '深圳朗朗口腔富诚门诊部匠心打造“小小牙医”，萌宝通关献爱平安冠军团队',
            'time' => '2019-12-12 12:00:03',
            'dec' => '作为世界500强公司销售冠军团队的成员，弘龙18部的美妈们平时可没少通关，无数次的实战话术、场景演练，才练就美妈们专业、自信、当之无愧的冠军姿态。而作为冠军妈妈的宝宝，这一次，换萌宝来通关啦！'
        ),
        array(
            'id' => 3453,
            'imgUrl' => 'xxxxxxx',
            'title' => '朗朗口腔“小小牙医”，助力平安三十周年客户回馈',
            'time' => '2019-12-17 13:05:20',
            'dec' => '上周开始，朗朗口腔携手平安人寿各地分公司举办“朗朗小小牙医”系列职业体验活动，在助力平安三十周年回馈客户的同时，大力普及口腔保健理念，开展口腔教育。'
        )
    );
}

if($categoryId == 3){
    $dataItem = array(
        array(
            'id' => 676,
            'imgUrl' => 'xxxxxxx',
            'title' => '公益前线 | 精益口腔21周年庆“健康+公益”暖动郑州',
            'time' => '2019-12-21',
            'dec' => '12月21日上午，“关爱口腔 健康中国”公益活动郑州站正式启动！作为郑州市的服务站代表，恰逢二十一周年庆的精益口腔，承诺将以专业的技术实力、不忘公益的初心推广和普及口腔健康知识，守护好患者的每一颗牙齿。'
        ),
        array(
            'id' => 865,
            'imgUrl' => 'xxxxxxx',
            'title' => '公益前线 | “健康鹰城 感恩母亲”公益活动传递爱',
            'time' => '2019-12-24 12:00:03',
            'dec' => '12月24日当天上午,“关爱口腔 健康中国” 平顶山市公益服务站牙乐福口腔门诊举行“健康鹰城，感恩母亲”公益活动，牙乐福口腔门诊向河南省孝文化促进会平顶山委员会捐赠价值100万元的西班牙进口牙种植体。'
        ),
        array(
            'id' => 3456,
            'imgUrl' => 'xxxxxxx',
            'title' => '【公示】“关爱口腔 健康中国”公益使者名单',
            'time' => '2019-12-29 13:05:20',
            'dec' => '上周开始，朗朗口腔携手平安人寿各地分公司举办“朗朗小小牙医”系列职业体验活动，在助力平安三十周年回馈客户的同时，大力普及口腔保健理念，开展口腔教育。'
        )
    );
}


if($categoryId == 4){
    $dataItem = array(
        array(
            'id' => 231,
            'imgUrl' => 'xxxxxxx',
            'title' => '公益前线∣泉云口腔20年华诞“公益+健康”',
            'time' => '2019-11-28 13:05:20',
            'dec' => '11月28日下午1时30分，“关爱口腔 健康中国”莱阳市公益服务站泉云口腔隆重举行20年华诞公益感恩盛典，用公益的理念、前沿的技术、空前的福利、精彩的演出让梨乡新老客户尽享爱心之行。'
        ),
        array(
            'id' => 785,
            'imgUrl' => 'xxxxxxx',
            'title' => '朗朗雅博尔口腔十五周年庆，感恩有您！',
            'time' => '2019-11-25 13:05:20',
            'dec' => '朗朗雅博尔口腔十五周年庆，感恩有您！朗朗雅博尔口腔十五周年庆，感恩有您！朗朗雅博尔口腔十五周年庆，感恩有您！朗朗雅博尔口腔十五周年庆，感恩有您！朗朗雅博尔口腔十五周年庆，感恩有您！'
        )
    );
}

$result = array(
    'resCode' => 0,
    'data' => $dataItem,
    'message' => 'OK'
);
exit(json_encode($result));
?>