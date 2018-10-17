<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <title>{$activity['title']}详情</title>
    <link rel="stylesheet" href="/sites/m/content/themes/h5/css/xiangxi.css">
</head>
<body>
<div class="content"  style="background-image: url(/sites/m/content/themes/h5/images/activity_bac.png);">
    <div style="width: 0.6rem;height: 0.15rem;margin: 0.1rem;border-radius: 0.03rem;font-size: 0.11rem;display: inline-block;">
        <a href="/sites/m/index.php?m=activity&c=index&a=init"><img src="/sites/m/content/themes/h5/images/go_back_index_pages.png"></a>
    </div>
    <div style="display: inline-block;float: right;width: 0.6rem;height: 0.15rem;margin: 0.1rem;border-radius: 0.03rem;font-size: 0.11rem;text-align: right;">
        <a style="text-decoration : none;color: #ffffff;opacity: 0.65;" href="/sites/m/index.php?m=lottery&c=index&a=init">去抽奖</a>
    </div>
    <div>
        <video id="video_content_c" src="{$activity['content']}" width="100%" height="211px" style="background-color: #000;" controls></video>
    </div>
    <div class="user_msg" style="padding: 0.1rem 0.1rem">
        <div class="user_logo"><img src="/sites/m/content/themes/h5/images/touxiang.png"></div>
        <div class="user_name">{$activity['user_name']}</div>
    </div>
    <div class="content_title" style="padding: 0 0.1rem">{$activity['title']}</div>
    <div class="content_zan" style="padding: 0 0.1rem">{if $activity['is_like']} {$activity['is_like']} {else} 0 {/if}人支持</div>
    <div class="content_sure" data-user_like='{$activity["user_like"]}' data-activity_url="{$like_url}">支持</div>
</div>
<script src="/sites/m/content/themes/h5/js/jquery.min.js"></script>
<script>
    $(function () {
        $(document).ready(function () {
            var is_clicking = $('.content_sure').attr('data-user_like');
            if (is_clicking == 1) {
                $('.content_sure').css("background","#dddddd");
                $('.content_sure').text("已支持");
            }   
        });
        $('.content_sure').click(function (){
            var is_clicking = $('.content_sure').attr('data-user_like');
            if( is_clicking == 0){
                var activity_url = $('.content_sure').attr('data-activity_url');
                // $.ajaxSettings.async = false;
                    $.get(activity_url,function (res) {
                        // console.log("-----------------");
                        // console.log(res);
                        $('.content_sure').css("background","#dddddd");
                        $('.content_sure').text("已支持");
                        // var zhi_chi_num = $('#zhi_chi_unm_p').text();
                        // zhi_chi_num++;
                        // $('#zhi_chi_unm_p').text(zhi_chi_num);n
                    });
                // $.ajaxSettings.async = true;
            }else{
                alert("出错了，请重试...");
            }
            window.location.reload();
        });
    });
</script>
</body>
</html>
