<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/profile.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-list-ul'></i>
      <span class="logo_name">Ingat Aku</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="prodashboard">
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
          <a href="/proupcoming">
            <i class='bx bx-bell icon' ></i>
            <span class="links_name">Upcoming Task</span>
          </a>
        </li>
        <li>
          <a href="/proweekly">
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
          <a href="/profile" class="active">
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
        <span class="dashboard">Profile</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="sales-details">
          <form action="{{ route('profile.update') }}" method="post">
            @csrf
            @method('PUT')
              <h4>Personal Data</h4><br>
              <label for="first_name">First Name :</label>
                <input type="text" value="{{ $data->first_name }}" name="first_name"> <br>
              <label for="last_name">Last Name :</label>
                <input type="text" value="{{ $data->last_name }}" name="last_name"> <br>
              <label for="email">Email :</label>
                <input type="text" value="{{ $data->email }}" name="email"> <br>
              <label for="phone_number">Phone Number :</label>
                <input type="text" value="{{ $data->phone_number }}" name="phone_number"> <br>
              <div class="button">
                <button type="submit">Save</button>
                <a href="/prodashboard">Close</a>
              </div>
          </form>
        </div>    
      </div>
    </div>
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

