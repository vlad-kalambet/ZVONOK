<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  
    <title>Система управления "РКИУ"</title>
    <link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="background-dark">
<div class="logo">
    <h4><a href="index.php">Cloud <strong>Home</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="index.php#"><i class="fa fa-home"></i> <span class="name">Главная</span></a>
        </li>
        
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-asterisk"></i> <span class="name">Освещение</span></a>
            <ul id="stats-collapse" class="panel-collapse collapse">
                <li><a href="indoor.php#">Внутри</a></li>
                <li><a href="outdoor.php#">Снаружи</a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="klimat.php#"><i class="fa fa-magic"></i> <span class="name">Климат</span></a>
        </li>
        <li class="panel">
            <a href="oxr.php#"><i class="fa fa-table"></i> <span class="name">Охрана</span></a>
        </li>
        <li class="panel">
            <a href="statistic.php#"><i class="fa fa-bars"></i> <span class="name">Статистика</span></a>
        </li>
       

    </ul>
    <div id="sidebar-settings" class="settings">
        <button type="button"
                data-value="icons"
                class="btn-icons btn btn-transparent btn-sm">Свернуть</button>
        <button type="button"
                data-value="auto"
                class="btn-auto btn btn-transparent btn-sm">Авто</button>
    </div>
</nav>
<div class="wrap">
    <header class="page-header">
        <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    
                     <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    
                  
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                   
                    
                   
                </ul>


        </div>
    </header> 

    <div class="content container">
        <div class="row">
            <div class="col-md-12 text-align-center row margin-bottom">

                <h2 class="page-title">Видеонаблюдение.</h2>

<img style="-webkit-user-select: none;" src="http://10.10.6.220:50001/?action=stream">
<br>
<br>
<img style="-webkit-user-select: none;" src="http://10.10.6.220:50002/?action=stream">

<!--
<h3>Общий</h3>

    <button type="button" class="var1" id="clickON">ON</button>
    <button type="button" class="var1" id="clickOFF">OFF</button>
<br>
-->



                <!--<iframe width="860" height="615" src="https://www.youtube.com/embed/kMpXRi3PZYs" frameborder="0" allowfullscreen></iframe>-->
            </div>

        </div>
        <div class="row">
            <div class="col-md-11">     
                
            </div>
        </div>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
</div>

<!-- jquery and friends -->
<script src="lib/jquery/jquery-2.0.3.min.js"> </script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>


<!-- jquery plugins -->
<script src="lib/icheck.js/jquery.icheck.js"></script>
<script src="lib/sparkline/jquery.sparkline.js"></script>
<script src="lib/jquery-ui-1.10.3.custom.js"></script>
<script src="lib/jquery.slimscroll.js"></script>

<!-- d3, nvd3-->
<script src="lib/nvd3/lib/d3.v2.js"></script>
<script src="lib/nvd3/nv.d3.custom.js"></script>

<!-- nvd3 models -->
<script src="lib/nvd3/src/models/scatter.js"></script>
<script src="lib/nvd3/src/models/axis.js"></script>
<script src="lib/nvd3/src/models/legend.js"></script>
<script src="lib/nvd3/src/models/multiBar.js"></script>
<script src="lib/nvd3/src/models/multiBarChart.js"></script>
<script src="lib/nvd3/src/models/line.js"></script>
<script src="lib/nvd3/src/models/lineChart.js"></script>
<script src="lib/nvd3/stream_layers.js"></script>

<!--backbone and friends -->
<script src="lib/backbone/underscore-min.js"></script>
<script src="lib/backbone/backbone-min.js"></script>
<script src="lib/backbone/backbone.localStorage-min.js"></script>

<!-- bootstrap default plugins -->
<script src="lib/bootstrap/transition.js"></script>
<script src="lib/bootstrap/collapse.js"></script>
<script src="lib/bootstrap/alert.js"></script>
<script src="lib/bootstrap/tooltip.js"></script>
<script src="lib/bootstrap/popover.js"></script>
<script src="lib/bootstrap/button.js"></script>
<script src="lib/bootstrap/tab.js"> </script>
<script src="lib/bootstrap/dropdown.js"></script>

<!-- basic application js-->
<!--<script src="js/app.js"></script>-->
<script src="js/settings.js"></script>

<!-- page specific -->
<script src="js/index.js"></script>
<script src="js/chat.js"></script>

<script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender">Tikhon Laninga</div>
            <div class="text">
                <%- text %>
            </div>
        </div>
</script>

<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Фон</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <%= dark? 'active' : '' %>">Т</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <%= light? 'active' : '' %>">С</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Сторона</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <%= onRight? '' : 'active' %>">Лево</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <%= onRight? 'active' : '' %>">Право</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Меню</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <%= display? 'active' : '' %>">Показать</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <%= display? '' : 'active' %>">Скрыть</button>
        </div>
    </div>
    
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Свернуть</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Авто</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Авто</button>
    <% } %>
</script>

</body>
</html>
