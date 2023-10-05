<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard </title>
  <link rel="stylesheet" href="css/user.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="images.png" alt="">
          <span class="nav-item">dreamhome reality!</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item2">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item2">Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item2">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item2">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item2">Settings</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item2">Log out</span>
        </a></li>
      </ul>
    </nav>
      <section class="main-course">
        <div class="content">
        <h3>Hi,<span>User</span></h3>
        <p>Welcome!, This is User page.</p>
        </div>
        <h1>Project field</h1>
        <div class="course-box">
          <ul>
            <li class="active">In progress</li>
            <li class="active">explore</li>
            <li class="active">incoming</li>
            <li class="active">finished</li>
          </ul>
          <div class="course">
            <div class="box">
              <h2>Create project</h2>
              <button>Create</button>
            </div>
            <div class="box">
              <h2>Update project</h2>
              <button>Upadte</button>
            </div>
            <div class="box">
              <h2>Delete project</h2>
              <button>Delete</button>
            </div>
          </div>
        </div>
      </section>
  </div>
</body>
</html>