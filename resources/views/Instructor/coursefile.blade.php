<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Course Files</title>
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
          <div id="course">
            <h1 class="filetitle" style="margin-top:60px;">Course Name: {{$coursename}}</h1>
            <h1 class="filetitle" style="font-size: 15px;">Section: {{$section}}</h1>
            <a href="/instructor/studentlist/{{$coursename}}/{{$section}}" class="studentlist">Student List</a>
              <div class="fileContainer">
                <div class="buttonContainer">
                    <button class="filebutton" onclick="fileshowpanel(0,'#004981')">Notes</button>
                    <button class="filebutton" onclick="fileshowpanel(1,'#004981')">Videos</button>
                    <button class="filebutton" onclick="fileshowpanel(2,'#004981')">Assignments</button>
                </div>
                <div class="filePanel">
                  <form method="post" action="/instructor/coursefilenotes/{{$coursename}}/{{$section}}" enctype="multipart/form-data">
                    <input type="file" id="notes" name="notes" style="width: 500px; height:40px;color: #004981; background: white; border: 3px solid #004981; padding: 5px 15px;margin-left: 150px; ">
                    <input type="submit" name="notebtn" value="Upload" style="width: 150px; height:40px;color: white; background: #004981; border: 3px solid #004981; padding: 5px 15px; margin-top: -40px; margin-left: 550px;"/>
                  </form>
                  <a>{{$errors->first('notes')}}</a>
                  <br><br><br>
                  <table id = "table" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Course Name</th>
                        <th>Section</th>
                        <th>File Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=0; $i != count($notelist); $i++)
                      <tr>
                        <td>{{$notelist[$i]->coursename}}</td>
                        <td>{{$notelist[$i]->section}}</td>
                        <td>{{$notelist[$i]->filename}}</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
                <div class="filePanel">
                  <form method="post" action="/instructor/coursefilevideos/{{$coursename}}/{{$section}}" enctype="multipart/form-data">
                    <input type="file" id="videos" name="videos" style="width: 500px; height:40px;color: #004981; background: white; border: 3px solid #004981; padding: 5px 15px;margin-left: 150px; ">
                    <input type="submit" name="videobtn" value="Upload" style="width: 150px; height:40px;color: white; background: #004981; border: 3px solid #004981; padding: 5px 15px; margin-top: -40px; margin-left: 550px;"/>
                  </form>
                  <a>{{$errors->first('videos')}}</a>
                  <br><br><br>
                  <table id = "table" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Course Name</th>
                        <th>Section</th>
                        <th>File Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=0; $i != count($videolist); $i++)
                      <tr>
                        <td>{{$videolist[$i]->coursename}}</td>
                        <td>{{$videolist[$i]->section}}</td>
                        <td>{{$videolist[$i]->filename}}</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
                <div class="filePanel">
                  <form method="post" action="/instructor/coursefileassignments/{{$coursename}}/{{$section}}" enctype="multipart/form-data">
                    <input type="file" id="assignments" name="assignments" style="width: 500px; height:40px;color: #004981; background: white; border: 3px solid #004981; padding: 5px 15px;margin-left: 150px; ">
                    <input type="submit" name="assessmentbtn" value="Upload" style="width: 150px; height:40px;color: white; background: #004981; border: 3px solid #004981; padding: 5px 15px; margin-top: -40px; margin-left: 550px;"/>
                  </form>
                  <a>{{$errors->first('assessmentbtn')}}</a>
                  <br><br><br>
                  <table id = "table" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Course Name</th>
                        <th>Section</th>
                        <th>File Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=0; $i != count($assignmentlist); $i++)
                      <tr>
                        <td>{{$assignmentlist[$i]->coursename}}</td>
                        <td>{{$assignmentlist[$i]->section}}</td>
                        <td>{{$assignmentlist[$i]->filename}}</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
             </div>
          </div>
        </div>
    </section>
  </body>
</html>

<script>
var btns = document.querySelectorAll(".fileContainer .buttonContainer button");
var filePanel = document.querySelectorAll(".fileContainer  .filePanel");

function fileshowpanel(panelIndex,colorCode) {
    btns.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });

    btns[panelIndex].style.backgroundColor = colorCode;
    btns[panelIndex].style.color = "white";

    filePanel.forEach(function(node){
        node.style.display="none";
    });
    filePanel[panelIndex].style.display = "block";
    filePanel[panelIndex].style.backgroundColor = white;
}
fileshowpanel(0,'#004981');

</script>>
