<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Weekly</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/edit-weekly.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div id="popup">
    <div class="popup-content">
    <form action="{{ isset($data) ? route('proweekly.update', $data->id) : route('proweekly.store') }}" method="post">
    @csrf
      <h4>{{ isset($data) ? "Edit Task" : "Add New Task" }}</h4> <br>
      
      <label for="task_name">Task Name : </label>
      <input type="text" value="{{ isset($data) ? $data->task_name : '' }}" placeholder="Enter Task Name" name="task_name" required> <br>
              
      <label for="task_day">Day : </label>
      <select name="task_day">
        <option value="Sunday" {{ isset($data) ? $data->task_day == 'Sunday' ? 'selected' : '' : ''}}>Sunday</option>
        <option value="Monday" {{ isset($data) ? $data->task_day == 'Monday' ? 'selected' : '' : ''}}>Monday</option>
        <option value="Tuesday" {{ isset($data) ? $data->task_day == 'Tuesday' ? 'selected' : '' : ''}}>Tuesday</option>
        <option value="Wednesday" {{ isset($data) ? $data->task_day == 'Wednesday' ? 'selected' : '' : ''}}>Wednesday</option>
        <option value="Thursday" {{ isset($data) ? $data->task_day == 'Thursday' ? 'selected' : '' : ''}}>Thursday</option>
        <option value="Friday" {{ isset($data) ? $data->task_day == 'Friday' ? 'selected' : '' : ''}}>Friday</option>
        <option value="Saturday" {{ isset($data) ? $data->task_day == 'Saturday' ? 'selected' : '' : ''}}>Saturday</option>
      </select>
      
      <div class="button">
        <button type="submit">Save</button>
        <a href="{{ route('proweekly.index') }}">Close</a>
      </div>
      </form>
    </div>
  </div>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-list-ul'></i>
      <span class="logo_name">IngatAku</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/prodashboard">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/protodos">
            <i class='bx bx-bar-chart-alt-2 icon' ></i>
            <span class="links_name">To-Dos</span>
          </a>
        </li>
        <li>
          <a href="/proupcoming" >
            <i class='bx bx-bell icon' ></i>
            <span class="links_name">Upcoming Task</span>
          </a>
        </li>
        <li>
          <a href="/proweekly"  class="active">
            <i class='bx bx-message-rounded icon' ></i>
            <span class="links_name">Weekly</span>
          </a>
        </li>
        <li>
          <a href="/pronotes">
            <i class='bx bx-folder-open icon' ></i>
            <span class="links_name">Notes</span>
          </a>
        </li>
        <li>
          <a href="/profile">
            <i class='bx bx-user' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Weekly</span>
      </div>
    </nav>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>