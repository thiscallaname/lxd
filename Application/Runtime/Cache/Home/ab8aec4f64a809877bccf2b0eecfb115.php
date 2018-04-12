<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!-- class="no-js" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="/lxd_think/Public/css/owl.carousel.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/style.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/ionicons.min.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/animate.css">
    <link rel="stylesheet" href="/lxd_think/Public/css/responsive.css">

    <!-- Js -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Ur1fqTosAMyUFxDaIjN9WgVR05GC7DfW"></script>
    <script src="/lxd_think/Public/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="/lxd_think/Public/js/vendor/jquery-1.10.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="/lxd_think/Public/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="/lxd_think/Public/js/bootstrap.min.js"></script>
    <script src="/lxd_think/Public/js/owl.carousel.min.js"></script>
    <script src="/lxd_think/Public/js/min/waypoints.min.js"></script>
    <script src="/lxd_think/Public/js/jquery.counterup.js"></script>
    <script src="/lxd_think/Public/js/plugins.js"></script>
    <script src="/lxd_think/Public/js/main.js"></script>
  </head>
  <body>




    <!-- Header Start -->
    <header>
        <div class="container" id="header">
            <div class="row">
                <div class="col-md-12">
                            <!-- header Nav Start -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="index.html">
                              <img src="/lxd_think/Public/img/logo.png" alt="Logo">
                          </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="/lxd_think/Home/Index/index.html">Home</a></li>
                            <li><a href="/lxd_think/Home/Index/advantages.html">Advantages</a></li>
                            <li><a href="/lxd_think/Home/Index/products.html">Products</a></li>
                            <li><a href="/lxd_think/Home/Index/contact.html">Contact</a></li>
                            <li><a href="/lxd_think/Home/Index/#">中文</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header close -->


    <p> <?php echo ($code); ?> </p>
<p><?php echo ($asd); ?></p>



    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu" align="left">
              <div class="row">
                <div class="col-md-4">
                  <a href="https://www.facebook.com/qinwei.huang.338?hc_location=friend_browser&fref=pymk">
                    <i class="fa fa-facebook"></i>  Facebook：Aiermart FinnedTube
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://plus.google.com/u/0/116383697646314866180">
                    <i class="fa fa-google"></i>  Google+: Aiermart FinnedTube
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://www.instagram.com/aiermart/">
                    <i class="fa fa-instagram"></i>  Instagram: aiermart
                  </a>
                </div>
              </div>
              <p></p>
              <div class="row">
                <div class="col-md-4">
                  <a href="https://shop1373855369737.1688.com">
                    <i class="fa fa-shopping-cart"></i>  Alibaba: https://shop1373855369737.1688.com
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="">
                    <i class="fa fa-wechat"></i>  Wechat: 爱尔玛特激光焊翅片管/激光焊翅片管换热器
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://weibo.com/u/6357455817?refer_flag=1001030101_">
                    <i class="fa fa-weibo"></i>  Weibo: 爱尔玛特激光焊翅片管
                  </a>
                </div>
              </div>
              <p></p>
              <div class="row">
                <div class="col-md-4"><i class="fa fa-youtube"></i>  Youtube：to be continued</div>
                <div class="col-md-4"><!-- <i class="fa fa-google"></i>Google+: qingwei huang --></div>
                <div class="col-md-4"><!-- <i class="fa fa-google"></i>Google+: qingwei huang --></div>
              </div>
            </div>
            <p>Copyright &copy; 2018.Company AIERMART All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>

<script type="text/javascript">
  // 百度地图API功能
  // alert("asd");
  var map = new BMap.Map("map");    // 创建Map实例
  var point = new BMap.Point(121.144851,31.478928);
  var marker = new BMap.Marker(point);
  map.addOverlay(marker);
  map.centerAndZoom(point, 10);  // 初始化地图,设置中心点坐标和地图级别
  //添加地图类型控件
  map.addControl(new BMap.MapTypeControl({
    mapTypes:[
            BMAP_NORMAL_MAP,
            BMAP_HYBRID_MAP
        ]}));
  map.setCurrentCity("苏州");          // 设置地图显示的城市 此项是必须设置的
  map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>