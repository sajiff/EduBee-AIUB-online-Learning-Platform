<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Security</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/crud.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/instructor.css') }}">
    <script src="{{ asset('asset/js/instructor.js') }}"></script>
  </head>
  <body>
    <div class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="{{asset ('upload/img/' . Session::get('picture'))}}" alt="">
        <div class="info">
          <h3><a href="/instructor">{{Session::get('username')}}</a></h3>
          <p>{{Session::get('id')}}</p>
        </div>
      </div>
      <ul class="categories" style="margin-top: 60px;">
        <li></i><a href="/instructor/classes">&nbsp;&nbsp;Classes</a></li>
        <li></i><a href="/instructor/grades">&nbsp;&nbsp;Assign Grades</a></li>
        <li></i><a href="/forumposts">&nbsp;&nbsp;Discussion Forum</a></li>
        <li></i><a href="" class="down">&nbsp;&nbsp;Settings</a>
          <ul class="side-nav-dropdown">
            <li> &nbsp;<a href="/instructor/profilesettings">Profile Settings</a></li>
            <li> &nbsp;<a href="/instructor/security">Security</a></li>
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
                  <li><a href="/instructor/myaccount"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="/instructor/myinbox"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/login"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div id="main">
          <div id="security">
            <div class="profile">
              <div class="profiledata" style="margin-left: 120px;">
                <img class="profilepic" style="margin-left: 40px;" src="{{asset ('upload/img/' . Session::get('picture'))}}" alt="">
                  <h3>{{Session::get('username')}}</h3>
                  <p style="margin-left: 80px;">{{Session::get('id')}}</p>
              </div>
              <form method="POST" action="/instructor/security">
                <input type="text" class="securtiy" name="current_password" placeholder="Enter Currenrt password"><br>
                <h4>{{$old_password_not_match}}</h4>
                <input type="text" class="securtiy" name="new_password" placeholder="Enter New password"><br><br>
                <input type="text" class="securtiy" name="confirm_password" placeholder="Confirm New password"><br>
                <h4>{{$password_does_not_match}}</h4>
                <input type="submit" class="securitybtn" value="Update">
              </form>
            </div>
          </div>
        </div>
    </section>
  </body>
</html>
