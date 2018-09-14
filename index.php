<!DOCTYPE html>
<html>
<head>
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/lib/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

                                $('#full_day').click(function(){
                                                var a = new XMLHttpRequest();
                                                a.open("GET","./scripts_p/full_day_p.php");
                                                a.onreadystatechange=function(){
                                                                if(a.readyState==4){
                                                                                if(a.status == 200){
                                                                                    swal("Полный день", "Операция успешно выполнена", "success");
                                                                                }
                                                                                else swal("Полный день", "Операция не выполнена!", "error");
                                                                }
                                                }
                                                a.send();
                                });
                                $('#short_day').click(function(){
                                                var a = new XMLHttpRequest();
                                                a.open("GET","./scripts_p/short_day_p.php");
                                                a.onreadystatechange=function(){
                                                                if(a.readyState==4){
                                                                                if(a.status == 200){
                                                                                    swal("Короткий день", "Операция успешно выполнена", "success");
                                                                                }
                                                                                else swal("Короткий день", "Операция не выполнена!", "error");
                                                                }
                                                }
                                                a.send();
                                });
                                $('#off').click(function(){
                                                var a = new XMLHttpRequest();
                                                a.open("GET","./scripts_p/off_p.php");
                                                a.onreadystatechange=function(){
                                                                if(a.readyState==4){
                                                                                if(a.status == 200){
                                                                                    swal("Выходной день", "Операция успешно выполнена", "success");
                                                                                }
                                                                                else swal("Выходной день", "Операция не выполнена!", "error");
                                                                }
                                                }
                                                a.send();
                                });
                                $('#zvonok').click(function(){
                                                var a = new XMLHttpRequest();
                                                a.open("GET","./scripts_p/script_p.php");
                                                a.onreadystatechange=function(){
                                                                if(a.readyState==4){
                                                                                if(a.status == 200){
                                                                                    swal("Тестовый звонок", "Операция успешно выполнена", "success");
                                                                                }
                                                                                else swal("Тестовый звонок", "Операция не выполнена!", "error");
                                                                }
                                                }
                                                a.send();
                                });


                                $('#zvonok_col').click(function(){
                                                var a = new XMLHttpRequest();
                                                a.open("GET","./scripts_p/script_col_p.php");
                                                a.onreadystatechange=function(){
                                                                if(a.readyState==4){
                                                                                if(a.status == 200){
                                                                                    swal("Тестовый звонок", "Операция успешно выполнена", "success");
                                                                                }
                                                                                else swal("Тестовый звонок", "Операция не выполнена!", "error");
                                                                }
                                                }
                                                a.send();
                                });


 
        });
    </script>
    <title>Звонки "РКИУ"</title>
    <link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="background-dark">
<div class="logo">
    <h4><a href="index.php">Умный <strong>ЗВОНОК</strong></a></h4>
</div>

  <div class="content container">
        <div class="row">
            <div class="col-md-12">
            <div class="content container">
        <div class="row">
            <div class="text-align-center ">

                <h2>Управление автоматической системой звонков</h2>

                <div id="real_time" class = "text-align-right">


    </div>
    </div>
<!--Интеграция колледжа-->


            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-star"></i>
                                Функционал
                        </h4>
                    </header>
                    <div class="body text-align-center">
                        <div class="well">
                            <div class="row">
                                <div class="col-xs-4">
                                <button type="button" class="btn btn-primary btn-lg" id="full_day" data-placement="top">
                                  Полный день
                                    </button>
                                </div>
                                <div class="col-xs-4">
                                    <button type="button" class="btn btn-primary btn-lg" id="short_day" data-placement="top">
                                  Короткий день
                                    </button>
                                </div>
                                <div class="col-xs-4">
                                <button type="button" class="btn btn-primary btn-lg" id="off" data-placement="top">
                                   Выходной день
                                    </button>
                                </div>
                            </div>
                        </div>

                            <div class="row margin-bottom text-align-center">
                                <div class="col-xs-12">
                                <div class="btn-group btn-group-justified">
                                <div class="btn-group">

                                    <button type="button" class="btn btn-danger" id="zvonok_col">
                                        Проверочный звонок (Колледж)
                                    </button>
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row margin-bottom text-align-center">
                                <div class="col-xs-12">
                                <div class="btn-group btn-group-justified">
                                <div class="btn-group">

                                    <button type="button" class="btn btn-danger" id="zvonok">
                                        Проверочный звонок (УИВЦ)
                                    </button>
                                    </div>
                                    </div>

                                </div>

                            </div>

                        <div id="history">
                </section>


    </div>

    <div class="col-md-6">
                <section class="widget">
                    <header>
                    
                        <h4>
                            <i class="fa fa-cogs"></i>
                            Текущее расписание
                        </h4>
                    </header>
                    <div class="body">
                        <div id="col_content">


        <script>
                function show()
                {
                        $.ajax({
                                url: "active_rasp.php",
                                cache: false,
                                success: function(html){
                                        $("#content").html(html);
                                }
                        });
                }
                function show_col()
                {
                    $.ajax({
                        url: "active_rasp_col.php",
                        cache: false,
                        success: function(html){
                            $("#col_content").html(html);
                        }
                    });
                }
                function realT()
                {
                    $.ajax({
                        url: "real_time.php",
                        cache: false,
                        success: function(html){
                            $("#real_time").html(html);
                        }
                    });
                }
                function hist()
                {
                    $.ajax({
                        url: "history.txt",
                        cache: false,
                        success: function(html){
                            $("#history").html(html);
                        }
                    });
                }

                $(document).ready(function(){
                        show();
                        setInterval('show()',1000);
                        show_col();
                        setInterval('show_col()',1000);
                        realT();
                        setInterval('realT()',1000);
                        hist();
                        setInterval('hist()',1000);
                });

        </script>

            </div>
                        <div id="content">
    </div>

    </div>

                
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
</div>
            
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
