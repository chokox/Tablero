<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <style type="text/css">
 
        body{
            background: #ffefef;
        }
        #consulta{
            display: none;
            font-size: 12px;
            background: #d5d8dd;
            margin-bottom: 15px;
        }
        .container_12{
            background: #1b89da;
            border: 5px solid #fff;
        }
        #cuerpo{
            margin-top: 10px;
        }
        #cabecera{
            margin-top: 10px;
            background: #111;
            color: #fff;
            margin-left: 0px;
        }
        .mostrar{
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 22px;
            cursor: pointer;
        }
        pre{
            border: 1px solid #111;
            background: #fff;
            margin-left: -60px;
            margin-right: 30px;
        }
        #consulta_sql{
            margin: 20px 0px;
        }
        h3{
            font-size: 18px;
            text-align: center;
            color: #9e0606;
        }
    </style>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $(".mostrar").click(function(){
            $(this).next('#consulta').slideToggle();
        });
    })
</script>
<body>
    <div class="container_12">
 
        <div class="mostrar grid_12">imagenes agresiones</div>
        <div class="grid_12" id="consulta">
 
            <div class="grid_12" id="cabecera">
                <div class="grid_1">nombre</div>
               
               
                <div class="grid_2">imagen</div>
               
            </div>
            <?php

            echo '<pre>';
            print_r($agresiones);
            print_r($agresiones);
            ?>
           
            </div>
        </div>
 
    
    
   
</body>
</html>