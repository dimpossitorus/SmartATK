<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartATK</title>
        <!-- Bootstrap -->
        <!-- If you are online, or will deploy this to server, uncomment this part
        <!-- Latest compiled and minified CSS
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


        -->
        <!-- If you are offline, uncomment this part -->
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/mystyles.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <div class ="row row-header">
                <div class="col-xs-12 col-sm-4 col-sm-offset-8">
                    <h1 id="title">SmartATK</h1>
                </div>
            </div>

            <div class="row row-content">
                <div class="col-xs-12 col-sm-3">
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav nav-pills nav-stacked na">
                            <li><a href="editstock.php">Edit Data Stok</a></li>
                            <li class="active"><a href="usage.php">Pemakaian ATK</a></li>
                            <li><a href="data.php">Lihat Data</a></li>
                            <li><a href="stats.php">Statistik</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row row-content">
                        <div class="col-xs-12">
                            <h2>Pemakaian ATK</h2>
                            <form class="form-horizontal" action="#" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-3 control-label">Nama Pengguna</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <label for="userID" class="col-sm-3 control-label">Nomor Pengguna</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="userID" placeholder="User ID">
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <label for="category" class="col-sm-3 control-label">Kategori User</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="Category" placeholder="User Category">
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-offset-7 col-sm-2">
                                      <button type="submit" class="btn btn-default"><img src="img/submit.png" style="width:24px;height:24px;"/></button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-footer">
                <div class ="col-xs-12 col-sm-4">
                    
                </div>
                <div class ="col-xs-12 col-sm-4">
                    <p>Sistem Informasi ATK </p>
                    <p> Sarana dan Prasarana Institut Teknologi Bandung </p>
                </div>            
                <div class ="col-xs-12 col-sm-4">
                    <p> Copyright 2016.</br>Sofspot Software House </p>
                </div>
            </div>
        </div>
    </body>
</html>