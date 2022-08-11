<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{'css/sidemenu.css'}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{'css/add_employee.css'}}">
    <link rel="stylesheet" href="{{'css/admin_profile.css'}}">
    <link rel="stylesheet" href="{{'css/attendance.css'}}">
    <link rel="stylesheet" href="{{'css/leave.css'}}">
    <link rel="stylesheet" href="{{'css/admin_dashboard.css'}}">
    <link rel="stylesheet" href="{{'css/employee_list.css'}}">
    <link rel="stylesheet" href="{{'css/dash_board.css'}}">
    <link rel="stylesheet" href="{{'css/employee_dashboard_card.css'}}">
    <script type="text/javascript" src="{{'js/demo.js'}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        *{
            color:black;
        }
        .notification{
            margin-right: 10px;
        }
        .drop{
            margin-left: 10px;
        }
        .header{
          float: right;
        }
        .first_div{
          background-color: rgba(191, 145, 104, 0.2);
          color: #ff9b44;
          border:solid 1px black;
          height: 90px;
          line-height: 55px;
          margin: 90px;
          text-align: center;
          width: 90px;
          border-radius: 100%; 
        }
          .div_row{
            border:solid 1px black;
        }
        .div_margin{
            margin: 20px; 
            width: 20%;
            padding-left: 50px;
        }
        .fa-cubes{
            color: #ff9b41;
        }
        .status_div{
            font-weight: 800;
            /* position: relative */
            /* position: inherit; */
            /* font-size: large; */
            /* display: block; */
            color: black;
        }
        .faicon_style{
            display: inline-block;
            border-radius:100% ;
            height:55px;
        }
        .main_status_div{
            /* border: 1px solid; */
            padding: 5px;
            box-shadow: 2px 2px #888888;
                    }
        .row_div{
            margin: 20px;
        }
        .side_menu_list{
            color: black;
        }
        /* second */
        .div_range{
            width: 210px;
            margin-left:60px;
            color: black;
            border-radius: 20px;
        }
        /* endsecond */
       .log_name_style{
           font-family:Verdana, Geneva, Tahoma, sans-serif;
           color: black;
           margin-left: 60px;
           font-weight: 300;
       }
       div.row{
        margin-top: 20px;
       }
       .nav_bar{
        
        margin-top: 1px;
        background-color: #ff9b41;
        color: black;
        width: 100%;
        
       }
       body { padding-top: 6px;}
       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar nav_bar">
        <div class="col-8"></div>
        <div class="collapse navbar-collapse header" id="navbarSupportedContent">  
          <a href="{{Route('employee_dashboard')}}" style="color: white;">Home</a>
          <button type="button" class="btn btn-dark notification">
              Notifications <span class="badge badge-light">9</span>
              <span class="sr-only">unread messages</span>
          </button>
          <div class="dropdown drop">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Employee
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </div>
        </div>
      </nav>
    <div class="container-fluid">

       
      <!-- sidemenu -->
    <nav class="main-menu">
        <div>
            <a class="logo" href="http://startific.com">
            </a> 
        </div> 
        <div class="settings"></div>
        <div class="scrollbar" id="style-1">     
            <ul> 
                <li>                                   
                    <a href="{{Route('employee_profile')}}">
                    <i class="fa fa-user fa-lg"></i>
                    <span class="nav-text side_menu_list">Employee Profile</span>
                    </a>
                </li>     
                <!-- <li>                                 
                    <a href="{{Route('project_detail')}}">
                        <i class="fa fa-user fa-lg"></i>
                    <span class="nav-text side_menu_list">Project Details</span>
                    </a>
                </li> -->
                <li>                                 
                    <a href="{{Route('employee_attendance')}}">
                        <i class="fa fa-calendar-o fa-lg"></i>
                    <span class="nav-text side_menu_list">Attendance</span>
                    </a>
                </li>   
                <li>                                 
                    <a href="{{Route('timesheet')}}">
                        <i class="fa fa-tasks fa-lg"></i>
                    <span class="nav-text side_menu_list">Timesheet</span>
                    </a>
                </li>
                <li>                                 
                    <a href="{{Route('employee_leave_apply')}}">
                        <i class="fa fa-calendar-o fa-lg"></i>
                    <span class="nav-text side_menu_list">Apply Leave</span>
                    </a>
                </li>    
            </ul>
        </div> 
    </nav>  
    
  <!-- endsidemenu -->
       
@yield("content")