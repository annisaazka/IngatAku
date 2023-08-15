<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Notes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/pro-notes.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
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
          <a href="/pronotes"  class="active">
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
          <a href="{{ route('logout') }}">
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
        <span class="dashboard">Notes</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="notes">
        <div class="notes-add">
          <a href="{{ route('pronotes.addnew') }}">+</a>
          <p>Add a new note</p>
        </div>
        @foreach ($data as $item)
        <div class="notes-content">
          <li>{{ $item->task_name }}</li>
            <div class="button">
              <a href="{{ route('pronotes.edit', $item->id) }}">Edit</a>
              <a href="{{ route('pronotes.destroy', $item->id) }}">delete</a>
            </div>
        </div>
        @endforeach
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