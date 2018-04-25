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
    <link rel="shortcut icon" type="image/x-icon" href="/Public/img/aiermart.ico" media="screen" />
    <!-- CSS -->
    <link rel="stylesheet" href="/Public/css/owl.carousel.css">
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/css/ionicons.min.css">
    <link rel="stylesheet" href="/Public/css/animate.css">
    <link rel="stylesheet" href="/Public/css/responsive.css">
    <link rel="stylesheet" href="/Public/css/style.css">

    <!-- Js -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Ur1fqTosAMyUFxDaIjN9WgVR05GC7DfW"></script>
    <script src="/Public/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="/Public/js/vendor/jquery-1.10.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="/Public/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/owl.carousel.min.js"></script>
    <script src="/Public/js/min/waypoints.min.js"></script>
    <script src="/Public/js/jquery.counterup.js"></script>
    <script src="/Public/js/plugins.js"></script>
    <script src="/Public/js/main.js"></script>
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
                              <img src="/Public/img/logo.png" alt="Logo">
                          </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="/Home/Index/cn_index.html">首页</a></li>
                            <li><a href="/Home/Index/cn_advantages.html">优势</a></li>
                            <li><a href="/Home/Index/cn_products.html">产品</a></li>
                            <li><a href="/Home/Index/cn_contact.html">联系方式</a></li>
                            <li><a href="/Home/Index/index.html">English</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header close -->


    

        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Drop Us A Note</h1>
                  <p>Don’t just take our word for it. Check out some of our latest work.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
        <form action="<?php echo U('Index/check_verify');?>" method="post">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group">
                      <input id="name" name="name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input id="email" name="email" type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject">
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group">
                      <textarea id="content" name="content" class="form-control" rows="2" placeholder="Your Message"></textarea>
                    </div>
                  <div class="row block">
                    <div class="col-md-6" style="padding-left: -15px; padding-bottom: 15px;">
                      <input id="j_verify" name="j_verify" type="text" placeholder="Verification code" style="padding: 6px 12px;">
                    </div>
                    <div class="col-md-6">
                      <img id="verify_img" src="<?php echo U('index/verify', array());?>" class="m" alt="点击更换" title="点击更换">
                    </div>
                  </div>
                    <button class="btn btn-default" type="submit">发送消息</button>

                </div>
              </div>
             </form>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>联 系 方 式</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-user"></i> 黄经理
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i> Email: sales@aiermart.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>电话: (+86)0512-53371508
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>电话: (+86)0512-53371508
                    </li>
                    <li>
                      <i class="fa fa-mobile"></i>手机: (+86)13776178696
                    </li>
                    <li>
                      <i class="fa fa-mobile"></i>手机: (+86)18906220299
                    </li>
                    <li>
                      <i class="fa fa-map-marker"></i> 地址: 太仓市城厢镇常胜北路33号10幢
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>百度地图位置</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>





    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu" align="left">
              <div class="row">
                <div class="col-md-4">
                  <a href="https://shop1373855369737.1688.com">
                    <i class="fa fa-shopping-cart"></i>  Alibaba: Aier Mart
                  </a>
                </div>
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
              </div>
              <p></p>

              <div class="row">
                <div class="col-md-4">
                  <a href="https://www.instagram.com/aiermart/">
                    <i class="fa fa-instagram"></i>  Instagram: Aiermart
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://www.linkedin.com/in/qingwei-huang-31355b152/">
                    <i class="fa fa-linkedin"></i>  LinkedIn：Qingwei Huang
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="" data-toggle="modal" data-target="#wechatModal">
                    <i class="fa fa-wechat"></i>  WeChat: 爱尔玛特激光焊翅片管/激光焊翅片管换热器
                  </a>
                </div>
              </div>
              <p></p>
              <div class="row">
                <div class="col-md-4">
                  <a href="https://weibo.com/u/6357455817?refer_flag=1001030101_">
                    <i class="fa fa-weibo"></i>  Weibo: 爱尔玛特激光焊翅片管
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="https://www.youtube.com/channel/UC6nwOoS3IEOw2p38e7Wpzgw?view_as=subscriber">
                    <i class="fa fa-youtube"></i>  YouTube：Aiermart FinnedTube
                  </a>
                </div>

                <div class="col-md-4"><!-- <i class="fa fa-google"></i>Google+: qingwei huang --></div>
              </div>
            </div>
            <p>Copyright &copy; 2018.Company AIERMART All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="wechatModal" tabindex="-1" z-index="10" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">微信公众号：</h4>
          </div>
          <div class="modal-body" style="text-align: center;">
            <img src="/Public/img/wechat.png" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          </div>
        </div>
      </div>
    </div>

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