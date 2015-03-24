<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
        <meta name="author" content="Alvarez.is - BlackTie.co">
        <link rel="shortcut icon" href="/assets/pratt/ico/favicon.png">

        <title>{$g.sitename}</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/pratt/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/assets/pratt/css/main.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <script src="/assets/pratt/js/jquery.min.js"></script>
        <script src="/assets/pratt/js/smoothscroll.js"></script>


    </head>

    <body data-spy="scroll" data-offset="0" data-target="#navigation">

        <!-- Fixed navbar -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>{$g.sitename}</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home" class="smothscroll">首页</a></li>
                        <li><a href="#desc" class="smothscroll">用途</a></li>
                        <li><a href="#showcase" class="smothScroll">特点</a></li>
                        <li><a href="#customers" class="smothScroll">典型客户</a></li>
                        <li><a href="#contact" class="smothScroll">联系我们</a></li>
                        <li style="position:absolute; right: 50px;"><a href="{site_url('/page/register')}" class="smothscroll">注册</a></li>
                        <li style="position:absolute; right: 0px;"><a href="{site_url('/page/Login')}" class="smothscroll">登录</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>


        <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>学我</b></h1>
                        <h3>一个制订学习计划，分享的地方</h3>
                        <br>
                    </div>

                    <div class="col-lg-2">
                        <h5>便捷的操作</h5>
                        <p>轻松定制你自己的学习计划.</p>
                        <img class="hidden-xs hidden-sm hidden-md" src="/assets/pratt/img/arrow1.png">
                    </div>
                    <div class="col-lg-8">
                        <img class="img-responsive" src="/assets/pratt/img/app-bg.png" alt="">
                    </div>
                    <div class="col-lg-2">
                        <br>
                        <img class="hidden-xs hidden-sm hidden-md" src="/assets/pratt/img/arrow2.png">
                        <h5>实时的分享</h5>
                        <p>分享和收获你的学习成果</p>
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->


        <section id="desc" name="desc"></section>
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>用途</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="/assets/pratt/img/intro01.png" alt="">
                        <h3>分享</h3>
                        <p>分享你的学习内容和计划</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="/assets/pratt/img/intro02.png" alt="">
                        <h3>计划</h3>
                        <p>合理安排你的时间和任务</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="/assets/pratt/img/intro03.png" alt="">
                        <h3>高效</h3>
                        <p>大数据帮你分析你的学习行为</p>
                    </div>
                </div>
                <br>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
        <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="centered">特点</h1>
                    <br>
                    <br>
                    <div class="col-lg-6 centered">
                        <img class="centered" src="/assets/pratt/img/mobile.png" alt="">
                    </div>

                    <div class="col-lg-6">
                        <h3>Some Features</h3>
                        <br>
                        <!-- ACCORDION -->
                        <div class="accordion ac" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        First Class Design
                                    </a>
                                </div><!-- /accordion-heading -->
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        Retina Ready Theme
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        Awesome Support
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        Responsive Design
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>			
                        </div><!-- Accordion -->
                    </div>
                </div>
            </div><!--/ .container -->
        </div><!--/ #features -->


        <section id="showcase" name="showcase"></section>
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="centered">Some Screenshots</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/assets/pratt/img/item-01.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="/assets/pratt/img/item-02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>	
            </div><!-- /container -->
        </div>	
        <section id="customers" name="customers"></section>
        <div id="customers">
            <div class="container">
                <div class="col-lg-5">
                    <h3>Address</h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>Drop Us A Line</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain"> 
                        <div class="form-group">
                            <label for="name1">Your Name</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Your Text</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>

        <section id="contact" name="contact"></section>
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3>Address</h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>Drop Us A Line</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain"> 
                        <div class="form-group">
                            <label for="name1">Your Name</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Your Text</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>


        <div id="c">
            <div class="container">
                <p>Created by <a href="/">{$g.sitename}</a></p>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/assets/pratt/js/bootstrap.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 3500
            })
        </script>
    </body>
</html>
