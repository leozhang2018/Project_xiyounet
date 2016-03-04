<?php
/* 显示所有用户的信息
 * */

$host = "115.28.219.231";
$port = 3306;
$name = "demo";
$password = "YEmH3378sTn7kwN794C9H9mxiwQcLK";
$basename = "eb_lms";
$sql_con = mysqli_connect($host, $name, $password);
if (!$sql_con) {
    die("链接远程数据库失败" . mysqli_error($sql_con));
}

mysqli_select_db($sql_con, $basename);
mysqli_set_charset($sql_con, "utf8");
$ret = mysqli_query($sql_con, "SELECT * FROM member  WHERE status='active' ORDER BY member_id ASC");
if (!$ret) {
    die("数据库查询失败" . mysqli_error($sql_con));
}
$date = null;
while ($value = mysqli_fetch_assoc($ret)) {
    $date[] = $value;
}


?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>成员列表</title>
  <meta name="description" content="MemberList">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/remodal.css">
  <link rel="stylesheet" href="css/remodal-default-theme.css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <style>
    .remodal-bg.with-red-theme.remodal-is-opening,
    .remodal-bg.with-red-theme.remodal-is-opened {
      filter: none;
    }

    .remodal-overlay.with-red-theme {
      background-color: #f44336;
    }

    .remodal.with-red-theme {
      background: #fff;
    }
  </style>
</head>
<body>

<!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="../index.html"><img src="img/logo.png" height="40" width="168" alt="Association of Network and Technology"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="../index.html">主页</a></li>
          <li><a href="http://blog.xiyounet.org">专栏</a></li>
          <li><a href="http://lib.xiyounet.org">网协图书馆</a></li>
          <li><a href="../about.html">关于</a></li>
          <li><a href="../contact.html">联系我们</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div> 
  <!-- /.navbar -->

<header id="head" class="secondary"></header>
<section class="namecard" id="member">

    <div class="container">
        <!-- start of MemberList -->
        <div class="u-textCenter">
            <h3>成员列表</h3>
        </div>

        <div id="page" class="row">
            <!--Start of u-textCenter-->
            <div class="u-textCenter">



                <!--Start of Grid-cell-->
                <?php
                $i = 0;
                foreach ($date as $row) {
                    $i++;
                    $name = $row['firstname'] . $row['lastname'];
                    ?>

                    <!--Start of Grid-cell-->
                    <div class="col-lg-3  col-md-3 col-sm-4 col-xs-4 Profile ">
                        <figure class="profile-figure">
                            <!-- 连接至模态框编号 -->
                            <a href="#No_<?php echo $i ?>"><img src="<?php echo $row['portrait'] ?>"
                                                                alt="<?php echo $name ?>"
                                                                class="img-circle img-circle-hover"
                                                                width="100" height="100"></a>
                        </figure>
                        <h4 class="Text Text--spacedSmall">
                            <?php echo $name ?>
                        </h4>

                        <p class="Text Text--small"><?php echo $row['job_title'] ?></p>

                        <!-- Start of modal -->
                        <div class="remodal" data-remodal-id="No_<?php echo $i ?>" role="dialog"
                             aria-labelledby="modal1Title"
                             aria-describedby="modal1Desc">
                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                            <div><!-- start of description in modal -->
                                <img src="" alt="" class="img-circle"
                                     width="100"
                                     height="100">

                                <h3 class="Text Text--spacedSmall"></h3>

                                <p class="Text Text--small" ></p>

                                <p class="self--descript">
                                </p>

                                <hr>
                                <!-- 社交信息 -->
                                <div class="social_link">
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>
                                    <span><a href="#"><i class=""></i></a></span>

                                </div>

                            </div>
                            <!-- Enb of description in modal-->
                            <br>
                        </div>
                        <!-- Enb of modal -->
                    </div>
                    <!--End of Grid-cell-->

                    <?php

                }
                ?>




            </div>
            <!--End of u-textCenter-->
        </div>
        <!-- End of Grid -->
    </div>
    <!--End of container-->
</section>
<!--End of section-->



<!-- footer -->
<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">联系我们</h3>
                    <div class="widget-body">
                        <address>陕西省西安市长安区西安邮电大学 东区 FZ130 </address>
                        <p><b>邮箱:</b><a href="mailto:#">admin@xiyouant.org</a><br></p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow Us</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a class="social-btn bspopover" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"data-content="<img src=../assets/images/wechat.jpg style='width: 140px; height: 140px;'>" data-original-title="" title="">
                                <i class="fa fa-weixin fa-2"></i>
                            </a>
                            <a href="https://github.com/xiyouant" target="_blank"><i class="fa fa-github fa-2"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">内容许可</h3>
                    <div class="widget-body">
                        <p>本站由 <a href="https://www.digitalocean.com/?refcode=3c8422b30f9d">DigitalOcean</a> 提供服务器支持 七牛 提供 CDN 存储服务</p>
                        <p>除特别说明外，用户内容均采用
                            <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-sa/3.0/cn/">知识共享署名-相同方式共享 3.0 中国大陆许可协议</a>进行许可</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="../index.html">主页</a> |
                            <a href="http://blog.xiyounet.org">专栏</a> |
                            <a href="http://lib.xiyounet.org">网协图书馆</a> |
                            <a href="../contact.html">联系我们</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-center">Copyright &copy; 2010-2015 西安邮电大学网络科技协会. 当前呈现版本 15.10.09</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>
<!-- End of footer -->

<!-- 自定义关闭模态框事件 -->
<!-- You can define the global options -->
<script>
    // window.REMODAL_GLOBALS = {
    //   NAMESPACE: 'remodal',
    //   DEFAULTS: {
    //     hashTracking: true,
    //     closeOnConfirm: true,
    //     closeOnCancel: true,
    //     closeOnEscape: true,
    //     closeOnOutsideClick: true,
    //     modifier: ''
    //   }
    // };
</script>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://cdn.staticfile.org/jquery/2.1.1-rc2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="http://7xng41.com1.z0.glb.clouddn.com/assets/js/bootstrap.min.js"></script>
<script src="http://7xng41.com1.z0.glb.clouddn.com/assets/js/headroom.min.js"></script>
<script src="http://7xng41.com1.z0.glb.clouddn.com/assets/js/jQuery.headroom.min.js"></script>
<script src="http://7xng41.com1.z0.glb.clouddn.com/assets/js/template.js"></script>
<script src="js/addData.js"></script>
<!--  popover initialization -->
<script>$(function () {$('[data-toggle="popover"]').popover()})</script>
<!-- Load remodal.js -->
<script src="js/remodal.js"></script>

<!-- Events -->
<script>
    $(document).on('opening', '.remodal', function () {
        console.log('opening');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('closing', '.remodal', function (e) {
        console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('closed', '.remodal', function (e) {
        console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('confirmation', '.remodal', function () {
        console.log('confirmation');
    });

    $(document).on('cancellation', '.remodal', function () {
        console.log('cancellation');
    });

    //  Usage:
    //  $(function() {
    //
    //    // In this case the initialization function returns the already created instance
    //    var inst = $('[data-remodal-id=modal]').remodal();
    //
    //    inst.open();
    //    inst.close();
    //    inst.getState();
    //    inst.destroy();
    //  });

    //  The second way to initialize:
    $('[data-remodal-id=modal2]').remodal({
        modifier: 'with-red-theme'
    });
</script>

</body>
</html>
