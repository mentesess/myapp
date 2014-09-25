<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../style/myCss.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../style/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        function GetClock(){
            tday  =new Array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi");
            d = new Date();
            nday   = d.getDay();
            nmonth = d.getMonth();
            ndate  = d.getDate();
            nyear = d.getYear();
            nhour  = d.getHours();
            nmin   = d.getMinutes();
            if(nyear<1000) nyear=nyear+1900;

            if(nmin <= 9){nmin="0"+nmin}


            document.getElementById('clockbox').innerHTML=" "+ndate+"/"+(nmonth+1)+"/"+nyear+" "+tday[nday]+" "+nhour+":"+nmin+"";
            setTimeout("GetClock()", 1000);
        }
        window.onload=GetClock;

        function SetActivate(param){
            if(param==1)

                document.getElementById('menu1').className="active";
            else if(param==2)
                document.getElementById('menu2').className="active";

        }

    </script>
    <title></title>
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menteses</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Anasayfa</a></li>
                <li><a href="#about">Hakkında</a></li>
                <li><a href="#contact">İletişim</a></li>
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu" role="menu">-->
<!--                        <li><a href="#">Action</a></li>-->
<!--                        <li><a href="#">Another action</a></li>-->
<!--                        <li><a href="#">Something else here</a></li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li class="dropdown-header">Nav header</li>-->
<!--                        <li><a href="#">Separated link</a></li>-->
<!--                        <li><a href="#">One more separated link</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a id="clockbox"></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>