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
                        <h1>Just some of our latest projects.</h1>
                        <p>Don’t just take our word for it. Check out some of our latest work.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Portfolio Start -->
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
              <div class="col-md-12">

                <div class="block">
                  <div class="portfolio-menu">
                    <ul>
                        <li class="filter" data-filter=".Single-layer" id="Single-layer">单层螺旋盘管</li>
                        <li class="filter" data-filter=".double-layer" id="double-layer">双层螺旋盘管</li>
                        <li class="filter" data-filter=".bent" id="bent">弯管</li>
                        <li class="filter" data-filter=".logding" id="logding">倒伏</li>
                        <li class="filter" data-filter=".straight" id="straight">直管</li>
                        <li class="filter" data-filter=".transection" id="transection">斜切面</li>
                        <!-- <li class="filter" data-filter=".Video">Video</li> -->
                    </ul>
                  </div>
                  <div class="portfolio-contant">
                    <ul id="portfolio-contant-active">
                      <!-- 单层螺旋管 -->
                      <li class="mix Single-layer" >
                          <img id="img" class="min" src="/Public/img/portfolio/danceng/1.jpg" alt="" onclick="openModal();currentSlide(1)">
                      </li>
                      <li class="mix Single-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/danceng/2.jpg" alt="" onclick="openModal();currentSlide(2)">
                      </li>
                      <li class="mix Single-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/danceng/3.jpg" alt="" onclick="openModal();currentSlide(3)">
                      </li>


                      <!-- 双层螺旋管 -->
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/1.jpg" alt="" onclick="openModal();currentSlide(4)">
                      </li>
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/2.jpg" alt="" onclick="openModal();currentSlide(5)">
                      </li>
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/3.jpg" alt="" onclick="openModal();currentSlide(6)">
                      </li>
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/4.jpg" alt="" onclick="openModal();currentSlide(7)">
                      </li>
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/5.jpg" alt="" onclick="openModal();currentSlide(8)">
                      </li>
                      <li class="mix double-layer">
                          <img id="img" class="min" src="/Public/img/portfolio/shuangceng/6.jpg" alt="" onclick="openModal();currentSlide(9)">
                      </li>
                      <!-- 弯管 -->
                      <li class="mix bent">
                          <img id="img" class="min" src="/Public/img/portfolio/wanguan/1.jpg" alt="" onclick="openModal();currentSlide(10)">
                      </li>
                      <li class="mix bent">
                          <img id="img" class="min" src="/Public/img/portfolio/wanguan/2.jpg" alt="" onclick="openModal();currentSlide(11)">
                      </li>

                      <!-- 倒伏 -->
                      <li class="mix logding">
                          <img id="img" class="min" src="/Public/img/portfolio/daofu/1.jpg" alt="" onclick="openModal();currentSlide(12)">
                      </li>
                      <li class="mix logding">
                          <img id="img" class="min" src="/Public/img/portfolio/daofu/2.jpg" alt="" onclick="openModal();currentSlide(13)">
                      </li>
                      <li class="mix logding">
                          <img id="img" class="min" src="/Public/img/portfolio/daofu/3.jpg" alt="" onclick="openModal();currentSlide(14)">
                      </li>
                      <li class="mix logding">
                          <img id="img" class="min" src="/Public/img/portfolio/daofu/4.jpg" alt="" onclick="openModal();currentSlide(15)">
                      </li>
                      <!-- 直管 -->
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/1.jpg" alt="" onclick="openModal();currentSlide(16)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/2.jpg" alt="" onclick="openModal();currentSlide(17)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/3.jpg" alt="" onclick="openModal();currentSlide(18)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/4.jpg" alt="" onclick="openModal();currentSlide(19)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/5.jpg" alt="" onclick="openModal();currentSlide(20)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/6.jpg" alt="" onclick="openModal();currentSlide(21)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/7.jpg" alt="" onclick="openModal();currentSlide(22)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/8.jpg" alt="" onclick="openModal();currentSlide(23)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/9.jpg" alt="" onclick="openModal();currentSlide(24)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/10.jpg" alt="" onclick="openModal();currentSlide(25)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/11.jpg" alt="" onclick="openModal();currentSlide(26)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/12.jpg" alt="" onclick="openModal();currentSlide(27)">
                      </li>
                      <li class="mix straight">
                          <img id="img" class="min" src="/Public/img/portfolio/zhiguan/13.jpg" alt="" onclick="openModal();currentSlide(28)">
                      </li>
                      <!-- 斜切面 -->
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/1.jpg" alt="" onclick="openModal();currentSlide(29)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/2.jpg" alt="" onclick="openModal();currentSlide(30)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/3.jpg" alt="" onclick="openModal();currentSlide(31)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/4.jpg" alt="" onclick="openModal();currentSlide(32)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/5.jpg" alt="" onclick="openModal();currentSlide(33)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/6.jpg" alt="" onclick="openModal();currentSlide(34)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/7.jpg" alt="" onclick="openModal();currentSlide(35)">
                      </li>
                      <li class="mix transection">
                          <img id="img" class="min" src="/Public/img/portfolio/xieqie/8.jpg" alt="" onclick="openModal();currentSlide(36)">
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

<section id="lightbox">
                  <div id="myModal" class="mymodal" style="color:white;">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                      <div class="mymodal-content">
<!-- 单层管 -->
                        <div class="mySlides">
                          <img src="/Public/img/source/danceng/1.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/danceng/2.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/danceng/3.jpg" style="width:100%">
                        </div>
<!-- 双层管 -->
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/1.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/2.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/3.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/4.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/5.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <img src="/Public/img/source/shuangceng/6.jpg" style="width:100%">
                        </div>
                        <div class="caption-container">
                          <p id="caption"></p>
                        </div>
<!-- 弯管 -->
                      <div class="mySlides">
                        <img src="/Public/img/source/wanguan/1.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/wanguan/2.jpg" style="width:100%">
                      </div>
<!-- 倒伏 -->
                      <div class="mySlides">
                        <img src="/Public/img/source/daofu/1.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/daofu/2.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/daofu/3.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/daofu/4.jpg" style="width:100%">
                      </div>
<!-- 直管 -->
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/1.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/2.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/3.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/4.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/5.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/6.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/7.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/8.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/9.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/10.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/11.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/12.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/zhiguan/13.jpg" style="width:100%">
                      </div>
<!-- 斜切面 -->
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/1.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/2.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/3.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/4.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/5.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/6.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/7.jpg" style="width:100%">
                      </div>
                      <div class="mySlides">
                        <img src="/Public/img/source/xieqie/8.jpg" style="width:100%">
                      </div>

                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
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