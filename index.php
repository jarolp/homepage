<!DOCTYPE html>
<?php require_once './function.php'; ?>
<html  lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Homepage | Jarosław Wowra</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta name="keywords" content="Jarosław Wowra, Rybnik, Informatyka, Strony WWW, Internet, CMS, Szablony, Wizytówki" />
        <meta name="description" content="Strona domowa Jarosława Wowra" />
        <meta name="distribution" content="global" />
        <meta name="robots" content="all" />
        <meta name="Googlebot" content="all" />
        <meta name="copyright" content="Jarosław Wowra" />
        <meta name="classification" content="Homepage &amp; IT Webdevelopment" />
        <meta name="rating" content="general" />
        <meta name="page-topic" content="Strona domowa Jarosława Wowra" />
        <meta name="page-type" content="Info &amp; IT Webdevelopment" />
        <meta name="Identifier-URL" content="http://www.jarek.zeref.pl" />
        <meta name="Author" content="Jarosław Wowra">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
        <link rel="stylesheet" type="text/css" href="boots/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-85733099-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <div class="navbar-header">
                  <div class="img-toggle">
                      <img src="img/profile.png" width="50">
                  </div>
                    <div class="homepage">Homepage</div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a data-move="data-move" class="active" href="#home">O mnie</a></li>
                    <li><a data-move="data-move" href="#portfolio">Portfolio</a></li>
                    <li><a data-move="data-move" href="#contact">Kontakt</a></li>
                  </ul>
                </div>
              </div>
        </nav>
        <header id="home">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">                        
                        <div class="info-text">
                            <div class="avatar">
                                <img class="img-responsive" src="img/me.jpg" alt="Jarosław Wowra" title="Jarosław Wowra">
                            </div>
                            <div class="hello">
                                <p>WITAJ!!<br />Nazywam się Jarosław Wowra</p>
                           </div>
                            <div class="clearfix"></div>
                            <hr class="star-light clearfix">
                            <p>Jestem absolwentem studiów magisterskich Uniwersytetu Ekonomicznego w Katowicach, kierunku informatyka i ekonometria.</p>
                            <p>Tworzenie stron WWW to dla mnie świetna zabawa, a do każdej stworzonej strony WWW podchodzę profesjonalnie i indywidualnie.</p>
                            <p>Mam na swoim koncie kilka ciekawych projektów które można zobaczyć poniżej.</p>
                            <p>Zapraszam również do odwiedzenia mojego <a href="https://github.com/jarolp" target="_blank">gitHuba</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 text-center hidden-xs">
                        <img src="img/profile.png" alt="" title="">
                    </div>
                </div>
            </div>
        </header>
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <p class="main-text">PORTFOLIO</p>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a class="img" href="http://www.lukasz-kubiak.pl" style="background-image: url('img/kubiak.png');" />
                           <div class="description">
                               http://www.lukasz-kubiak.pl
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a class="img" href="http://www.arteria.intu.pl" style="background-image: url('img/arteria.png');" >
                            <div class="description">
                               http://www.arteria.intu.pl
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a class="img" href="http://www.dzieciecemozliwosci.pl" style="background-image: url('img/dzieci.png');">
                            <div class="description">
                               http://www.dzieciecemozliwosci.pl
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a class="img" href="http://www.ubojnia-twist.pl" style="background-image: url('img/twist.png');">
                            <div class="description">
                               http://www.ubojnia-twist.pl
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <p class="main-text">KONTAKT</p>
                    <div>
                    <?php my_contact() ?>
                    </div>
                    <div class="container form-group">
                        <form id="contactform">
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12 relative">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Imie i nazwisko" required="required">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 relative">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Adres e-mail" required="required">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 relative">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Numer telefonu">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 relative">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Temat wiadomości">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 pc-response"><div class="response"></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12 relative">
                                    <textarea class="form-control" name="textmessage" id="textmessage" placeholder="Treść wiadomości.."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="button" id="submit" name="submit" class="btn btn-primary btn-block">WYŚLIJ</button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mobile-response"><div class="response"></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row container">
                    <div class="pull-left">
                        <p>Copyright © 2016 <?php $date=date('Y'); if ($date>2016) { echo '- '.$date;} ?> | Jarosław Wowra</p>
                        <p>HTML5 | CSS3 | JavaScript | PHP | MySQL </p>
                        <p>Junior Web Developer</p>
                    </div>  
                    <div class="pull-right">
                        <?php my_contact() ?>
                    </div>  
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>