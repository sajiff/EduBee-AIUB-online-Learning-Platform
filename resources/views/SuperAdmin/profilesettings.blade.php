<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Profile Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/superadmin.css') }}">
    <script src="{{ asset('asset/js/superadmin.js') }}"></script>
  </head>
  <body>
    <div class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="{{asset ('upload/img/' . Session::get('picture'))}}" alt="">
        <div class="info">
          <h3><a href="/superadmin">{{Session::get('username')}}</a></h3>
          <p>{{Session::get('id')}}</p>
        </div>
      </div>
      <ul class="categories" style="margin-top: 60px;">
        <li><a href="/superadmin/adminmanagement">&nbsp;&nbsp;Admin Management</a></li>
        <li></i><a href="/superadmin/moderatormanagement">&nbsp;&nbsp;Moderator Management</a></li>
        <li></i><a href="/superadmin/usermanagement">&nbsp;&nbsp;User Management</a></li>
        <li></i><a href="/superadmin/departmentmanagement">&nbsp;&nbsp;Department Management</a></li>
        <li></i><a href="/superadmin/coursemanagement">&nbsp;&nbsp;Course Management</a></li>
        <li></i><a href="" class="down">&nbsp;&nbsp;Allocations</a>
          <ul class="side-nav-dropdown">
            <li> &nbsp;<a href="/superadmin/courseforstudent">Student's void</a></li>
            <li> &nbsp;<a href="/superadmin/instructorallocation">Intructor Allocation</a></li>
          </ul>
        </li>
        <li></i><a href="/superadmin/announcements">&nbsp;&nbsp;Announcements</a></li>
        <li></i><a href="/forumposts">&nbsp;&nbsp;Discussion Forum</a></li>
        <li></i><a href="" class="down">&nbsp;&nbsp;Settings</a>
          <ul class="side-nav-dropdown">
            <li> &nbsp;<a href="/superadmin/profilesettings">Profile Settings</a></li>
            <li> &nbsp;<a href="/superadmin/security">Security</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand"><span class="main-color">Dashboard</span></a>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/superadmin/myaccount"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="/superadmin/myinbox"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/login"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div id="main">
          <div id="profilesettings">
            <div class="profile">
              <div class="profiledata" style="margin-left: 120px;">
                <img class="profilepic" style="margin-left: 40px;" src="{{asset ('upload/img/' . Session::get('picture'))}}" alt="">
                  <h3 style="margin-left: 60px; color: #048; font-size;25px; font-weight: bold;">{{Session::get('username')}}</h3>
                  <p style="margin-left: 100px;font-size;25px;">{{Session::get('id')}}</p>
              </div>
              <form action="{{route('superadmin.addProfile')}}" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group" style="margin-left: 120px;">
                        <label style="margin-left: 50px; font-size: 20px; color: #048">Upload Profile</label><br>
                        <input type="file" name="avata" autocomplete="off" style="width: 500px; height:40px;color: #004981; background: white; border: 3px solid #004981; padding: 5px 15px;margin-left: -120px; ">
                      </div>
                      <a>{{$errors->first('avata')}}</a><br><br>
                      <div class="form-group">
                        <input type="submit" name="add_user"  class="profileupdatebtn" >
                      </div>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </section>
  </body>
</html>
