<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Department Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/crud.css') }}">
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
      <div>
        <input type="text" class="search" id="search" onkeyup="search()" placeholder="Search using ID, Name" style="width: 1090px; height: 40px; margin-left: 140px; margin-top: 30px; font-size: 20px; font-family: sans-serif;color: #004981; border: 2px solid gray; background: white; padding: 0 15px; font-weight: 500;">
      </div>
      <div class="container">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-6">
                        <h2>Manage <b>Department</b></h2>
                       </div>
                       <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Department</span></a>
                       </div>
                  </div>
              </div>
              <table id="table" class="table table-striped table-hover">
                <thead>
                  <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Tag</th>
                      </tr>
                  </thead>
                  <tbody>
                    @for($i=0; $i != count($depts); $i++)
                    <tr>
                      <td>{{$depts[$i]->id}}</td>
                      <td>{{$depts[$i]->name}}</td>
                      <td>{{$depts[$i]->tag}}</td>
                        <td>
                            <a href = "#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href = "#deleteEmployeeModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                   @endfor
                  </tbody>
              </table>
          </div>
      </div>

   <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <form action = "/superadmin/departmentmanagement/adddept" method = "post">
       <div class="modal-header">
        <h4 class="modal-title">Add Department</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
         <div class="form-group">
          <label>Id</label>
          <input type="text" name="id" class="form-control" required>
         </div>
        <div class="form-group">
         <label>Name</label>
         <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Tag</label>
         <input type="text" name="tag" class="form-control" required>
        </div>
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" value="Add">
       </div>
      </form>
     </div>
    </div>
   </div>

   <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <form action = "/superadmin/departmentmanagement/updatedept" method = "post" id="editform">
       <div class="modal-header">
        <h4 class="modal-title">Edit Department</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
        <div class="form-group">
         <label>Name</label>
         <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Tag</label>
         <input type="text" name="tag" id="tag" class="form-control" required>
        </div>
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save">
       </div>
      </form>
     </div>
    </div>
   </div>

   <div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <form action = "/superadmin/departmentmanagement/deletedept" method = "post" id="deleteform">
       <div class="modal-header">
        <h4 class="modal-title">Delete Department</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
        <p>Are you sure you want to delete these Records?</p>
        <p class="text-warning"><small>This action cannot be undone.</small></p>
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <button type="submit" id = "delete_button" class="btn btn-danger" value="Delete">Delete</button>
       </div>
      </form>
     </div>
    </div>
   </div>
    </section>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $('tbody').on('click', 'a', function(){
          var value_id = $(this).closest('tr').find('td').first().text();
          document.getElementById("delete_button").value = value_id;

          $('#deleteform').attr('action','/superadmin/departmentmanagement/deletedept/'+value_id);
      });
  });

  function search() {
    var input = document.getElementById("search");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("table");
    var tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++){
      td1 = tr[i].getElementsByTagName("td")[0];
      td2 = tr[i].getElementsByTagName("td")[1];
      td3 = tr[i].getElementsByTagName("td")[2];
      if (td1 || td2) {
        var txtValue1 = td1.textContent || td1.innerText;
        var txtValue2 = td2.textContent || td2.innerText;
        var txtValue3 = td3.textContent || td3.innerText;
        if (txtValue1.toUpperCase().indexOf(filter) > -1 || (txtValue2.toUpperCase().indexOf(filter) > -1)|| (txtValue3.toUpperCase().indexOf(filter) > -1)) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
      }
    }
  }

  $(document).ready(function(){

    $(".edit").on('click',function(){
        $tr = $(this).closest('tr');
        var editdata = $tr.children('td').map(function(){
          return $(this).text();
        }).get();

        console.log(editdata);

        $('#name').val(editdata[1]);
        $('#tag').val(editdata[2]);

        $('#editform').attr('action','/superadmin/departmentmanagement/updatedept/'+editdata[0]);
    });
  });

  </script>
