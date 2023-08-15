<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/pro-dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-list-ul'></i>
        <span class="logo_name">Ingat Aku</span>
      </div>
        <ul class="nav-links">
          <li>
            <a href="/prodashboard" class="active">
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
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <i class='bx bx-bar-chart-alt-2 icon' ></i>
            <div class="box-topic">To-Dos</div>
            <div class="processing">
              <div class="processing-bar" data-bar="{{ $ptodos }}">
              </div>
              <p>{{ $ctodosdone }} of {{ $ctodos }} task is done</p>
            </div>
            <div class="button">
              <a href="/protodos">Go</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <i class='bx bx-bell icon' ></i>
            <div class="box-topic">Upcoming Task</div>
              <div class="processing2">
                <div class="processing-bar2" data-bar="{{ $pupcoming }}">
                </div>
                <p>{{ $cupcomingdone }} of {{ $cupcoming }} task is done</p>
              </div>
              <div class="button">
                <a href="/proupcoming">Go</a>
              </div>
            </div>
        </div>
        <div class="box">
          <div class="right-side">
            <i class='bx bx-message-rounded icon' ></i>
            <div class="box-topic">Weekly</div>
            <div class="indicator">
              <span> {{ $cweekly }} weekly task</span>
            </div>
            <div class="button">
              <a href="/proweekly">Go</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <i class='bx bx-folder-open icon' ></i>
            <div class="box-topic">Notes</div>
            <div class="indicator">
              <span>{{ $cnotes }} notes</span>
            </div>
            <div class="button">
              <a href="/pronotes">Go</a>
            </div>
          </div>
        </div>
        <script>
          const processing = document.querySelector('.processing-bar');
          setTimeout(() => {
              processing.style.opacity = 1;
              processing.style.width = processing.getAttribute('data-bar') + '%';
          }, 500)

          const processing2 = document.querySelector('.processing-bar2');
          setTimeout(() => {
              processing2.style.opacity = 1;
              processing2.style.width = processing2.getAttribute('data-bar') + '%';
          }, 500)
        </script>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Upcoming Task</div> <br>
          <div class="sales-details">
          <table class="data-table">
            <thead>
            <tr>
              <th>Task Name</th>
              <th>Task Status</th>
              <th>Date</th>
              <th>Due Date</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($upcoming as $item)
              <tr>
                <th>{{ $item->task_name }}</th>
                <td>{{ $item->task_status }}</td>
                <td>{{ $item->date_start }}</td>
                <td>{{ $item->due_date }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>
          <div class="button">
            <a href="/proupcoming">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="calendar">
            <div class="month-indicator">
              <time datetime="2019-02"> February 2019 </time>
            </div>
            <div class="day-of-week">
              <div>Su</div>
              <div>Mo</div>
              <div>Tu</div>
              <div>We</div>
              <div>Th</div>
              <div>Fr</div>
              <div>Sa</div>
            </div>
            <div class="date-grid">
              <button>
                <time datetime="2019-02-01">1</time>
              </button>
              <button>
                <time datetime="2019-02-02">2</time>
              </button>
              <button>
                <time datetime="2019-02-03">3</time>
              </button>
              <button>
                <time datetime="2019-02-04">4</time>
              </button>
              <button>
                <time datetime="2019-02-05">5</time>
              </button>
              <button>
                <time datetime="2019-02-06">6</time>
              </button>
              <button>
                <time datetime="2019-02-07">7</time>
              </button>
              <button>
                <time datetime="2019-02-08">8</time>
              </button>
              <button>
                <time datetime="2019-02-09">9</time>
              </button>
              <button>
                <time datetime="2019-02-10">10</time>
              </button>
              <button>
                <time datetime="2019-02-11">11</time>
              </button>
              <button>
                <time datetime="2019-02-12">12</time>
              </button>
              <button>
                <time datetime="2019-02-13">13</time>
              </button>
              <button>
                <time datetime="2019-02-14">14</time>
              </button>
              <button>
                <time datetime="2019-02-15">15</time>
              </button>
              <button>
                <time datetime="2019-02-16">16</time>
              </button>
              <button>
                <time datetime="2019-02-17">17</time>
              </button>
              <button>
                <time datetime="2019-02-18">18</time>
              </button>
              <button>
                <time datetime="2019-02-19">19</time>
              </button>
              <button>
                <time datetime="2019-02-20">20</time>
              </button>
              <button>
                <time datetime="2019-02-21">21</time>
              </button>
              <button>
                <time datetime="2019-02-22">22</time>
              </button>
              <button>
                <time datetime="2019-02-23">23</time>
              </button>
              <button>
                <time datetime="2019-02-24">24</time>
              </button>
              <button>
                <time datetime="2019-02-25">25</time>
              </button>
              <button>
                <time datetime="2019-02-26">26</time>
              </button>
              <button>
                <time datetime="2019-02-27">27</time>
              </button>
              <button>
                <time datetime="2019-02-28">28</time>
              </button>
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

