<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>河南嘉展商贸有限公司</title>
<link href="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/style.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/js/jquery.js" type="text/javascript"></script>
<script src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/js/nav1.js" language="JavaScript"></script>
<script src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/js/nav2.js" language="JavaScript"></script>
<!--jiaodian-->
<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

            <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
            <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
            <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
<script type="text/javascript">
$(function() {
    var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
    var len = $("#focus ul li").length; //获取焦点图个数
    var index = 0;
    var picTimer;
    
    //以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
    var btn = "<div class='btnBg'></div><div class='btn'>";
    for(var i=0; i < len; i++) {
        btn += "<span></span>";
    }
    btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
    $("#focus").append(btn);
    $("#focus .btnBg").css("opacity",0.5);

    //为小按钮添加鼠标滑入事件，以显示相应的内容
    $("#focus .btn span").css("opacity",0.4).mouseenter(function() {
        index = $("#focus .btn span").index(this);
        showPics(index);
    }).eq(0).trigger("mouseenter");

    //上一页、下一页按钮透明度处理
    $("#focus .preNext").css("opacity",0.2).hover(function() {
        $(this).stop(true,false).animate({"opacity":"0.5"},300);
    },function() {
        $(this).stop(true,false).animate({"opacity":"0.2"},300);
    });

    //上一页按钮
    $("#focus .pre").click(function() {
        index -= 1;
        if(index == -1) {index = len - 1;}
        showPics(index);
    });

    //下一页按钮
    $("#focus .next").click(function() {
        index += 1;
        if(index == len) {index = 0;}
        showPics(index);
    });

    //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
    $("#focus ul").css("width",sWidth * (len));
    
    //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
    $("#focus").hover(function() {
        clearInterval(picTimer);
    },function() {
        picTimer = setInterval(function() {
            showPics(index);
            index++;
            if(index == len) {index = 0;}
        },4000); //此4000代表自动播放的间隔，单位：毫秒
    }).trigger("mouseleave");
    
    //显示图片函数，根据接收的index值显示相应的内容
    function showPics(index) { //普通切换
        var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
        $("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
        //$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
        $("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
    }
});

</script>

<!--jiaodian-->
<!--切换-->
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}
//-->
</script>
<!--切换-->
</head>

<body>

<!--top-->
<div class="top_bg">
 <div class="log_nav">
  <div class="log_ad">
   <ol><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r1_c21.jpg" /></ol>
   <!--nav-->
   <div class="nav_main">
  <div class="nav">
            <div class="menu nav_menu">
                <ul class="nav1" style="font-size: 100px;font-weight: 700;color: black">
                                  
                      <li class="mainlevel"><a 
                                        
                            href="/"
                                              >首页</a>
                          <ul>
                                                              </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_2"
                        
                                     >新闻</a>
                          <ul>
                                            
                              <li><a href="list_10">政经要闻</a></li>
                            
                
                              <li><a href="list_11">区域新闻</a></li>
                            
                
                              <li><a href="list_12">金融投资</a></li>
                            
                
                              <li><a href="list_13">公司产业</a></li>
                            
                                  </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_3"
                        
                                     >评论</a>
                          <ul>
                                                              </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_4"
                        
                                     >观察</a>
                          <ul>
                                            
                              <li><a href="list_14">观察家</a></li>
                            
                
                              <li><a href="list_15">专栏作家</a></li>
                            
                
                              <li><a href="list_16">记者专栏</a></li>
                            
                                  </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_5"
                        
                                     >多媒体</a>
                          <ul>
                                            
                              <li><a href="list_17">欢乐财经</a></li>
                            
                
                              <li><a href="list_18">半上流社会那些事</a></li>
                            
                
                              <li><a href="list_19">橙色视点</a></li>
                            
                                  </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_6"
                        
                                     >生活</a>
                          <ul>
                                                              </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_7"
                        
                                     >电子报</a>
                          <ul>
                                                              </ul>
                      </li>
                  
                
                      <li class="mainlevel"><a 
                                                    href="list_8"
                        
                                     >活动</a>
                          <ul>
                                                              </ul>
                      </li>
                  
                            
                </ul>
            </div>
            </div>
  </div>
 </div>
</div>
</div>

 <div id="focus">
        <ul>
            <li><a href="http://www.#.com/" target="_blank"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r3_c1.jpg"  /></a></li>
            <li><a href="http://www.#.com/" target="_blank"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r3_c1.jpg"  /></a></li>
            <li><a href="http://www.#.com/" target="_blank"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r3_c1.jpg"  /></a></li>
        </ul>
</div>
<!--信息-->
<!--信息-->
<div class="main_pest">
 <!--left-->
 <div class="main_pest_left">
  <div class="main_pest_left_top">
   <p>贵金属投资 </p>
  </div>
  <div class="main_pest_left_bot">
   <ul>
    <li><a href="#" id="li_bg">投资特点 + </a></li>
    <li><a href="#">交易细则 + </a></li>
    <li><a href="#">盈亏计算 + </a></li>
    <li><a href="#">权益保障 + </a></li>
   </ul>
  </div>
  <!--lainxi-->
  <div class="pset_con_bg">
   <dl>
    <dt>
     <img src="<?php echo __ROOT__?>/<?php echo __TEMPLATE__?>/images/list_r7_c3.jpg" />
    </dt>
    <dd>
     <a href="#"><img src="<?php echo __ROOT__?>/<?php echo __TEMPLATE__?>/images/list_r9_c2.jpg" /></a>
     <a href="#"><img src="<?php echo __ROOT__?>/<?php echo __TEMPLATE__?>/images/list_r10_c2.jpg" /></a>
    </dd>
    <dd>
    电话：0371-86592917<br />
地址：河南省郑州市民航路15号企业一号大厦
    </dd>
   </dl>
  </div>
  <!--lainxi-->
  <div class="pset_con_ad">
   <a href="#"><img src="<?php echo __ROOT__?>/<?php echo __TEMPLATE__?>/images/list_r12_c1.jpg" /></a>
  </div>
 </div>
 <!--left-->
 <!--right-->
 <div class="main_pest_right">
  <div class="main_pest_right_top">
  <img src="<?php echo __ROOT__?>/<?php echo __TEMPLATE__?>/images/list_r4_c7.jpg" /> 当前位置:<a href="/">首页</a> > <a href="#"><?php echo $cms['catname']?></a>
  </div>
  <div class="main_pest_news">
      <!--1-->
      <div class="bt1">
                  <h2><?php echo $cms['title']?></h2>
                 
     </div>
     <div class="con1">
                      <p>
                        <?php echo $cms['content']?>
                      </p>
                    
                </div>
                <div class="fenpian1">
                    <ul>
                              <?php
 $id= (int)$_GET['id'];//5   6789
        $pre = Db::table('article')->where("id",'<',$id)->orderBy('id','DESC')->first();

        $next = Db::table('article')->where("id",'>',$id)->orderBy('id','ASC')->first();
        if($pre)
        {
          $preLink = "<li><a href='".U('Home/Index/article',array('id'=>$pre['id']))."'>".$pre['title']."</a></li>";   
        }
        else{
            $preLink="没有了";
        }

        if($next)
        {
          $nextLink = "<li><a href='".U('Home/Index/article',array('id'=>$next['id']))."'>".$next['title']."</a></li>";   
        }
        else{
            $nextLink="没有了";
        }
        echo $preLink.$nextLink;
        ?>
                    </ul>
                </div>
      <!--1-->
      <!--1-->
  </div>
 </div>
 <!--right-->
</div>
<!--信息-->
<!--信息-->
<!--合作单位-->
<div class="team_main">
 <ol>
  <img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index1_r42_c12.jpg" />
 </ol>
 <ul>
  <li><a href="#"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r48_c20.jpg"  /></a></li>
  <li><a href="#"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r48_c24.jpg" /></a></li>
  <li><a href="#"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r48_c20.jpg"  /></a></li>
  <li><a href="#"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r48_c24.jpg" /></a></li>
  <li><a href="#"><img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/index_r48_c20.jpg"  /></a></li>
 </ul>
</div>
<!--合作单位-->
<!--链接-->
<div class="links">
<b>友情链接：</b> <a href="#">腾讯财经网</a> 新浪财经网 天津贵金属交易所 天津煜展贵金属 凤凰黄金 金融界 东方财富网 腾讯黄金 和讯黄金 新浪财经 南方稀贵金属交易所
</div>
<!--链接-->
<!--版权-->
<div class="copy_bg">
 <div class="copyright">
  <dl>
   <dt>
    <img src="http://localhost/Hausaufgabe/PHP_Hausaufgabe/self_cms/template/self/images/indeh_r50_c8.jpg" />
   </dt>
   <dd>
   <a href="#">人才招聘</a> | <a href="#">隐私申明</a> | <a href="#">常见问题</a> | <a href="#">联系我们</a> | <a href="#">网站地图</a><br />
Copyright(c)2012-2013 www.0371au.com All Rights Reserved   免费服务热线：0371-55013581 豫ICP备12024871号-1
   </dd>
  </dl>
 </div>
</div>
<!--版权-->
</body>
</html>
