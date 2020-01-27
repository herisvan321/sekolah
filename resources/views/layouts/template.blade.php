<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="{{asset('/img/logo.png')}}" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('/assets/css/theme-default.css')}}"/>
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('/w3.css')}}"/>
        <script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/jquery/jquery.min.js')}}"></script>
    </head>
    <body>
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{{url('/home/')}}">
                        <!-- <img src="{{asset('/img/logo.png')}}" style="width: 38px"> -->
                        {{ config('app.name', 'Laravel') }} </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li> 
                    
                    @include('includes.menuSuperAdmin')
                </ul>
            </div>
            <div class="page-content" >
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li> 
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-user"></span></a>
                        <div class="panel panel-info animated zoomIn xn-drop-left xn-panel-dragging ui-draggable">
                            <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title"> Profil</h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" >
                                <a href="{{url('/home/setting')}}" class="list-group-item"><span class="fa fa-user"></span> Name 
                                <span class="pull-right"></span>
                                </a>
                                <a href="{{url('/home/setting')}}" class="list-group-item"><span class="fa fa-envelope"></span> Email 
                                <span class="pull-right"></span>
                                </a>
                                <a href="{{url('/home/setting')}}" class="list-group-item"><span class="fa fa-heart-o"></span> Status 
                                <span class="pull-right"></span>
                                </a>
                            </div>   
                            <div class="panel-footer text-center">
                                <a href="{{url('/home/setting')}}"><span class="fa fa-cog"></span> Setting</a>
                            </div>                   
                        </div>                        
                    </li>   
                    <li class="xn-icon-button pull-right">
                        <a href="{{url('/home/pencarian/data')}}" ><span class="fa fa-search"></span></a>
                    </li>              
                </ul>
                <div class="page-content-wrap" >
                    <div class="" >
                       <br>
                       <div class="container">
                           @include('includes.pesan')
                       </div>
                        @yield('main')
                    </div>
                </div>      
            </div>         
        </div>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>      
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                           
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('/assets/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('/assets/js/actions.js')}}"></script>    
        <script type='text/javascript' src="{{ asset('/assets/js/plugins/icheck/icheck.min.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/morris/raphael-min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/morris/morris.min.js')}}"></script>       
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('/assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('/assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
        <script type='text/javascript' src="{{ asset('/assets/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/owl/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/settings.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/demo_charts_rickshaw.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/demo_dashboard.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/assets/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        
    </body>
</html>