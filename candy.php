<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Theme: Candy</title>
        <link rel="stylesheet" type="text/css" href="css/candy/bootstrap.css">
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <!--background: rgba(0, 0, 0, 0) linear-gradient(90deg, #d3959b 10%, #bfe6ba 90%) repeat scroll 0 0; candy-->
    <body>
        <style>
            h3{
                margin-top: 10px!important;
            }
            .carousel-caption {
                /*background: transparent!important;*/
                bottom: 0;
                color: #fff!important;
                padding-bottom: 5px;
                padding-top: 5px;
                position: relative;
                text-align: center;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
                z-index: 10;
                left: 0;
                right: 0;
            }
            .carousel-caption {
                background:rgba(0, 0, 0, 0.8);
            }




            /*------------------------------------*/

            .navbar-default {
                background-color: #c6e5ff;
                border-color: #8db600;
            }
            .navbar {
                border-radius: 0;
            }

            .navbar-default .navbar-brand {
                color: #ff0028;
            }
            .navbar-default .navbar-nav > li > a {
                color: red;
            }
            .navbar-default .navbar-nav > li > a:hover {
                color: blue;
            }
            .navbar-brand:hover{
                color: #4B5320!important;
            }
            .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
                background-color: #a5d6ff;
                color: #FF0028!important;
            }
            .navbar-default {
                background-color: #c6e5ff;
                border-color: #fbceb1;
            }
            .navbar-default .navbar-nav > .active > a {
                background-color: #a5d6ff;
                color: #007FFF;
            }
            .navbar-default .navbar-nav > .active > a:hover {
                background-color: #a5d6ff;
                color: #7f18ce;
            }
            .dropdown-menu > li > a:hover {
                background-color: #E3DAC9;
            }
            .caret{
                background-color: #A5D6FF;
            }

            .carousel-inner > .item > img{
                width: 100%;
            }
            .imgbuttonb {
                height: 32px;
                position: absolute;
                left: 32px;
                top: 50%;
                width: 32px;
            }
            .imgbuttonf {
                height: 32px;
                position: absolute;
                right: 32px;
                top: 50%;
                width: 32px;
            }
            .carousel-caption {
                background: #e3dac9 none repeat scroll 0 0;
            }
            label {
                color: #A52A2A!important;
            }
            .form-control {
                background-color: lavender;
                border: 1px solid #fbceb1;
                border-radius: 0;
                color: #555;
                height: 34px;
            }
            .form-control::-moz-placeholder {
                color: #955cce;
                opacity: 1;
            }
            .modal-content{
                background-color: lightgray;
            }
            textarea{
                resize: none;
            }
            a{
                color: #955cce;  
            }
            a:hover{
                color: #7F18CE;
                text-decoration: none!important;
                cursor: pointer;
            }
            .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
                border: 1px solid #955cce;
            }
            .table-hover > tbody > tr:hover{
                background-color: #FFFF99;
                cursor: pointer;
            }

            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
                background-color: #337AB7;
                border-color: #ddd #ddd transparent;
                border-image: none;
                border-style: solid;
                border-width: 1px;
                color: #fff;
                cursor: pointer;
            }
            .well{
                background-color: #E5E5E5; 
            }
            .panel-default > .panel-heading + .panel-collapse > .panel-body {
                background-color: #E5E5E5; 
            }

            .panel-title > a{

                color: #7f18ce;
            }     
            .panel-title > a:hover{

                color: #337ab7;
            }     
        </style>
        <script>
            $('#myModal').on('shown.bs.modal', function() {
                $('#myInput').focus();
            });
        </script>

        <div class="container">

            <!--heading tag-->
            <div class="row form-group">
                <div class="col-md-12">
                    <h2>AraiHazar Pilot High School</h2>
                    <h4>Araihazar, Narayangonj</h4>
                </div>
            </div>
            <!--navbar tag-->
            <div class="row form-group">
                <div class="col-md-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Multi Level <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Level 1</a></li>
                                        <li class="dropdown-submenu"> <a tabindex="-1" href="#">More options</a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Level 2</a>
                                                </li>
                                                <li class="dropdown-submenu"> <a href="#">More..</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Level 3</a>
                                                        </li>
                                                        <li><a href="#">Level 3</a>
                                                        </li>
                                                        <li class="dropdown-submenu"> <a href="#">More..</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Level 4</a>
                                                                </li>
                                                                <li><a href="#">Level 4</a>
                                                                </li>
                                                                <li class="dropdown-submenu"> <a href="#">More..</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Level 5</a>
                                                                        </li>
                                                                        <li><a href="#">Level 5</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level 2</a>
                                                </li>
                                                <li><a href="#">Level 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>

            <!--carousel slider-->
            <div class="row form-group">
                <div class="col-md-12">
                    <div id="carousel_slider" class="carousel slide" data-ride="carousel">
                        <!--                         Indicators 
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel_slider" data-slide-to="0"></li>
                                                    <li data-target="#carousel_slider" data-slide-to="1"></li>
                                                    <li data-target="#carousel_slider" data-slide-to="2"></li>
                                                </ol>-->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/1.jpg">
                                <div class="carousel-caption">
                                    <h3>Caption 1</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/2.jpg">
                                <div class="carousel-caption">
                                    <h3>Caption 2</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/3.jpg">
                                <div class="carousel-caption">
                                    <h3>Caption 3</h3>
                                </div>
                            </div>
                        </div>

                        <a data-slide="next" href="#carousel_slider">
                            <img class="imgbuttonf"  src="images/frontArrow.png">
                        </a>
                        <a data-slide="prev" href="#carousel_slider">
                            <img class="imgbuttonb" src="images/backArrow.png">
                        </a>
                    </div>
                </div>
            </div>

            <!-- msg box-->
            <div class="row form-group">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <img class="img-responsive" src="images/chairmain.jpg" alt="Hello World">
                        <h4>Chairman's Message!</h4>
                        <p style="font-size: 14px;">The magnificently designed Rajuk Uttara Model College stands proudly on the Dhaka-Mymensing Road in the heart.</p>
                        <p><a class="btn btn-primary btn-sm pull-right" href="" role="button">Learn more</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="images/chairmain.jpg" alt="Hello World">
                        <div class="caption">
                            <h4>Head Teacher's Message!</h4>
                            <p>The magnificently designed Rajuk Uttara Model College stands proudly on the Dhaka-Mymensing Road in the heart.</p>
                            <p><a class="btn btn-primary btn-sm pull-right" href="" role="button">Learn more</a></p><br>
                        </div>
                    </div>
                </div>
            </div>

            <!--form-->
            <div class="row form-group">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Description:</label>
                            <textarea class="form-control" rows="1" placeholder="Say something about yourself"></textarea>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for everything">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" type="button">Go!</button>
                                </span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label>Check me out:</label><br>
                    <input type="checkbox"> Remember me
                </div>
                <div class="col-md-3">
                    <label>Gender:</label>
                    <div class="radio">
                        <input type="radio" > Male
                    </div>
                    <div class="radio">
                        <input type="radio"> Female
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Country:</label>
                    <select class="form-control">
                        <option>Australia</option>
                        <option>Bangladesh</option>
                        <option>Canada</option>
                        <option>Denmark</option>
                        <option>England</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Modal:</label><br>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    This is a demo modal.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label>Badge</label><br>
                    <a href="#">Inbox <span class="badge">42</span></a>
                    <button class="btn btn-primary" type="button">
                        Messages <span class="badge">4</span>
                    </button>
                </div>
                <div class="col-md-6">
                    <label>Breadcrumb</label>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                        <li class="active">Data</li>
                    </ol>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label>Paragraph:</label>
                    <p class="text-justify">Ea sit inani delicata, vix tempor omnesque id, aeterno feugiat docendi ne usu. Ut mel percipit quaerendum, facer mollis ex sed, ei iudico mollis disputando eos. Vel ea mutat possim voluptaria, amet illud philosophia eos te, ius eu inermis referrentur liberavisse. Sit id menandri moderatius.
                        Id natum saperet delectus sit. Sea eu nihil vocibus, sea cu sonet accusamus, nobis nusquam voluptatibus ad cum. At habemus democritum has, praesent erroribus reformidans ne per, erant harum his an. Eum et facer oblique luptatum. Partem atomorum est ea.
                    </p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <label>Unordered list:</label>
                    <ul>
                        <li>Ideal School and College</li>
                        <li>Viqarunnisa Noon School</li>
                        <li>Rajuk Uttara Model School & College</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <label>Ordered list:</label>
                    <ol>
                        <li>Holy Cross Girls' High School</li>
                        <li>Rifles Public School and College</li>
                        <li>Rajuk Uttara Model School & College</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <label>Anchor list:</label>
                    <ul class="list-unstyled">
                        <li><a>Saint Joseph Higher Secondary School</a></li>
                        <li><a>St. Gregory's High School</a></li>
                        <li><a>Chittagong Collegiate School and College</a></li>
                    </ul>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label>Table:</label>
                    <table class="table table-bordered table-hover">
                        <tr class="non_hover">
                            <td >One</td>
                            <td>Two</td>
                            <td>Three</td>
                            <td>Four</td>
                            <td>Five</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>i</td>
                            <td>ii</td>
                            <td>iii</td>
                            <td>iv</td>
                            <td>v</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <label>Result, news & notice board</label><br>

                    <!-- nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#result" aria-controls="result" role="tab" data-toggle="tab">Result</a></li>
                        <li role="presentation"><a href="#events" aria-controls="messages" role="tab" data-toggle="tab">News & Events</a></li>
                        <li role="presentation"><a href="#notice" aria-controls="messages" role="tab" data-toggle="tab">Notice Boad</a></li>
                    </ul>

                    <!-- tab panes -->
                    <div class="tab-content" style="margin-top: 10px;">
                        <div role="tabpanel" class="tab-pane active form-group" id="result">
                            <table class="table table-bordered table-hover">
                                <tr class="non_hover">
                                    <td>Serial</td>
                                    <td>Exam</td>
                                    <td>Year</td>
                                    <td>Position</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>JSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>HSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="events">
                            This is News & Events Section.
                        </div>
                        <div role="tabpanel" class="tab-pane" id="notice">
                            Welcome to Notice Board.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Result, news & notice board</label><br>
                    <!-- nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#resultpills" aria-controls="resultpills" role="tab" data-toggle="tab">Result</a></li>
                        <li role="presentation"><a href="#eventspills" aria-controls="messages" role="tab" data-toggle="tab">News & Events</a></li>
                        <li role="presentation"><a href="#noticepills" aria-controls="messages" role="tab" data-toggle="tab">Notice Boad</a></li>
                    </ul>

                    <!-- tab panes -->
                    <div class="tab-content" style="margin-top: 10px;">
                        <div role="tabpanel" class="tab-pane active form-group" id="resultpills">
                            <table class="table table-bordered table-hover">
                                <tr class="non_hover">
                                    <td>Serial</td>
                                    <td>Exam</td>
                                    <td>Year</td>
                                    <td>Position</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>JSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>HSC</td>
                                    <td>2015</td>
                                    <td>1st</td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="eventspills">
                            This is Pills News & Events Section.
                        </div>
                        <div role="tabpanel" class="tab-pane" id="noticepills">
                            Welcome to Pills Notice Board.
                        </div>
                    </div>
                </div>
            </div>
            <!--landing text area:-->
            <div class="row form-group">
                <div class="col-md-12">
                    <label> Landing Text Area:</label><br>
                    <a class="btn btn-primary btn-sm" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-target
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            Hello World
                        </div>
                    </div>
                </div>
            </div>
            <!--collapsible text area:-->
            <div class="row form-group">
                <div class="col-md-12">
                    <label> Collapsible Area:</label><br>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--buttons:-->
            <div class="row form-group">
                <div class="col-md-6">
                    <label>All Buttons:</label><br>
                    <button type="button" class="btn btn-primary btn-sm">Default</button>
                    <button type="button" class="btn btn-primary btn-sm">Primary</button>
                    <button type="button" class="btn btn-primary btn-sm">Success</button>
                    <button type="button" class="btn btn-primary btn-sm">Info</button>
                    <button type="button" class="btn btn-primary btn-sm">Warning</button>
                    <button type="button" class="btn btn-primary btn-sm">Danger</button>
                </div>
                <div class="col-md-6">
                    <label>Button's Size:</label><br>
                    <button type="button" class="btn btn-primary btn-sm">lg button</button>
                    <button type="button" class="btn btn-primary btn-sm">md button</button>
                    <button type="button" class="btn btn-primary btn-sm">sm button</button>
                    <button type="button" class="btn btn-primary btn-sm">xs button</button>
                </div>
            </div>
            <!--buttons group:-->
            <div class="row form-group">
                <div class="col-md-4">
                    <label>Button Group:</label><br>
                    <div class="btn-group" role="group" aria-label="Hello World">
                        <button type="button" class="btn btn-primary btn-sm">Left</button>
                        <button type="button" class="btn btn-primary btn-sm">Middle</button>
                        <button type="button" class="btn btn-primary btn-sm">Right</button>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="btn-group btn-group-justified" role="group" aria-label="Hello World">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary btn-sm">Left</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary btn-sm">Middle</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary btn-sm">Right</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--pagination group-->
            <div class="row form-group">
                <div class="col-md-3">
                    <label>Pagination</label><br>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li>
                                <a href="" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav>
                        <ul class="pager">
                            <li><a href="">Previous</a></li>
                            <li><a href="">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav>
                        <ul class="pager">
                            <li class="previous"><a href=""><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="">Newer <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav>
                        <ul class="pager">
                            <li class="previous disabled"><a href=""><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="">Newer <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!--progress bar-->
            <div class="row form-group">
                <div class="col-md-12">
                    <label>Progress Bar</label><br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                </div>
            </div>

            <!--images-->
            <div class="row form-group">
                <div class="col-md-3">
                    <label>Images shapes:</label><br>
                    <img src="images/4.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-md-3">
                    <img src="images/5.jpg" class="img-rounded" alt="Responsive image">
                </div>
                <div class="col-md-3">
                    <img src="images/5.jpg" class="img-circle" alt="Responsive image">
                </div>
                <div class="col-md-3">
                    <img src="images/4.jpg" class="img-thumbnail" alt="Responsive image">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>

            <!--footer-->
            <div class="row form-group">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <li><a>Home </a></li>
                        <li><a>Library </a></li>
                        <li><a>Reports</a></li>
                        <li><a>Journal</a></li>
                        <li><a>Books</a></li>
                        <li><a>Admission</a></li>
                        <li><a>Academics</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-offset-10 col-md-2">
                <a href="index.php">
                    <input class="btn btn-primary btn-sm btn-sm" type="button" data-dismiss="modal" aria-hidden="true" value="Go Back">
                </a>
            </div>
        </div>
    </body>
</html>