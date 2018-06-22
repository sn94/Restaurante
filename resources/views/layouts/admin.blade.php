<!doctype html>
<html lang="en">
    <head><meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="author" content="Marx JMoura">
        <meta name="description" content="Admin 4B. Open source and free admin template built on top of Bootstrap 4. Quickly customize with our Sass variables and mixins.">
        <title>Admin Dashboard</title>
        <link rel="icon" href="./favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
        {!!Html::style('admin/dist/admin4b.min.css')!!}
        <!--
        <link href="<?= config("app.url")?>:8000/admin/dist/admin4b.min.css" rel="stylesheet">
        -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
      
        
        
        </head>
    
    
    <body>
        <div class="app">
            
        
        
        
            <div class="app-body">
                <div class="app-sidebar sidebar-slide-left">
                        <div class="text-right">
                            <button type="button" class="btn btn-sidebar" data-dismiss="sidebar"><span class="x"></span></button></div>
                  <div class="sidebar-header">
                      <img src="{!!URL::to('admin/docs/assets/img/john-doe.png')!!}" class="user-photo">
                        <p class="username">{!!Auth::user()->name!!}<br><small>Administrator</small></p>
                    </div>
                    <ul id="sidebar-nav" class="sidebar-nav">
                        <li class="sidebar-nav-btn"><a href="./index.html" class="btn btn-block btn-outline-light">Get started</a></li>
                      
                        
                        @if( Auth::user()->id == 1)
                        <li class="sidebar-nav-group"><a href="#content" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-doc"></i> Users</a>
                            <ul id="content" class="collapse" data-parent="#sidebar-nav">
                                <li><a href="{!!URL::to('/usuario')!!}" class="sidebar-nav-link">List</a></li>
                                <li><a href="{!!URL::to('/usuario/create')!!}" class="sidebar-nav-link">Create</a></li>
                            </ul></li>
                       
                       @endif
                            <li class="sidebar-nav-group"><a href="#device-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-screen-tablet"></i>Ciudades</a>
                                    <ul id="device-controls" class="collapse" data-parent="#sidebar-nav">
                                        <li><a href="{!!URL::to('/states')!!}" class="sidebar-nav-link">Departamentos</a></li>
                                        <li><a href="{!!URL::to('/towns')!!}" class="sidebar-nav-link">Ciudades</a></li>
                                    </ul></li>
                           
                            <li class="sidebar-nav-group"><a href="#forms" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-pencil"></i> Movies</a>
                                        <ul id="forms" class="collapse" data-parent="#sidebar-nav">
                                            <li><a href="{!!URL::to('/pelicula')!!}" class="sidebar-nav-link">List</a></li>
                                            <li><a href="{!!URL::to('/pelicula/create')!!}" class="sidebar-nav-link">Create</a></li>
                                             
                                        </ul></li>
                         
                                        
                                        
                                            <li class="sidebar-nav-group"><a href="#input-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-note"></i> Input controls</a>
                                                <ul id="input-controls" class="collapse" data-parent="#sidebar-nav">
                                                    <li><a href="./pages/input-controls/checkbox.html" class="sidebar-nav-link">Checkbox</a></li>
                                                    <li><a href="{!!URL::to('/movie/create')!!}" class="sidebar-nav-link">Input date</a></li>
                                                    <li><a href="./pages/input-controls/input-group.html" class="sidebar-nav-link">Input group</a></li>
                                                    <li><a href="./pages/input-controls/input-suggestion.html" class="sidebar-nav-link">Input suggestion</a></li>
                                                    <li><a href="./pages/input-controls/label.html" class="sidebar-nav-link">Label</a></li>
                                                    <li><a href="./pages/input-controls/radio-button.html" class="sidebar-nav-link">Radio button</a></li
                                                    ><li><a href="./pages/input-controls/toggle-switch.html" class="sidebar-nav-link">Toggle switch</a></li>
                                                </ul></li>
                                                
                                                <li class="sidebar-nav-group"><a href="#layout" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-layers"></i> Layout</a>
                                                    <ul id="layout" class="collapse" data-parent="#sidebar-nav">
                                                        <li><a href="./pages/layout/sidebar.html" class="sidebar-nav-link">Sidebar</a></li>
                                                        <li><a href="./pages/layout/spinner.html" class="sidebar-nav-link">Spinner</a></li>
                                                        <li><a href="./pages/layout/tabs.html" class="sidebar-nav-link">Tabs</a></li>
                                                        <li><a href="./pages/layout/theming.html" class="sidebar-nav-link">Theming</a></li>
                                                    </ul>
                                                </li>
                                                
                                                <li class="sidebar-nav-group"><a href="#reference" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-notebook"></i> Reference</a>
                                                    <ul id="reference" class="collapse" data-parent="#sidebar-nav">
                                                        <li><a href="./pages/reference/callout.html" class="sidebar-nav-link">Callout</a></li>
                                                        <li><a href="./pages/reference/code-highlight.html" class="sidebar-nav-link">Code highlight</a></li>
                                                    </ul></li></ul>
                                                <div class="sidebar-footer"><a href="./pages/content/chat.html" data-toggle="tooltip" title="Support"><i class="fa fa-comment"></i> </a>
                                                    <a href="./pages/content/settings.html" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i> </a>
                                                    <a href="./pages/content/signin.html" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i></a>
                                                </div></div>
                                                
 
 <div class="app-content">
                                        
                                <!-- NAVBAR-->
 <nav class="navbar navbar-expand navbar-light bg-white">
          <button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="fa fa-bars"></i></button>
          <div class="navbar-brand">Admin 4B &middot; <a href="https://github.com/marxjmoura/admin4b" class="text-dark" data-toggle="tooltip" data-placement="right" title="Fork me on GitHub"><i class="fa fa-github"></i></a></div>
           <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary">3</span> <i class="fa fa-bell-o"></i></a>
            <div class="dropdown-menu dropdown-menu-right"><a href="/logout" class="dropdown-item">
                                                                        <small class="dropdown-item-title">Log out</small><br>
                                                                        <div>Exit from here</div></a>
             <div class="dropdown-divider"></div><a href="./pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (yesterday)</small>
                                                                        <br><div>Lorem ipsum dolor sit amet...</div></a>
             <div class="dropdown-divider"></div>
            <a href="./pages/content/notification.html" class="dropdown-item">
                                                                        <small class="text-secondary">Lorem ipsum (12/25/2017)</small><br>
                                                                        <div>Lorem ipsum dolor sit amet...</div></a>
        <div class="dropdown-divider"></div>
        <a href="./pages/content/notifications.html" class="dropdown-item dropdown-link">See all notifications</a></div></li></ul>
        </nav>
         <!-- end navbar -->
                                
              
       <!-- Breadcrumb  --->
       @section('breadcrumb_sec')
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"> @yield('breadcrumb_title') </li>
        </ol>
        </nav>
       @show
       
       
       
        <div class="container-fluid">
            
            @yield('content')
            
            
        </div>
         
      
 </div>
            
                         </div>
        
        </div>
        
       
        
       {!!Html::script('admin/dist/admin4b.min.js')!!}
        {!!Html::script('admin/docs/assets/js/admin4b.docs.js')!!}
         
 

        @section('scripts')
        @show
        
        
    </body>
</html>