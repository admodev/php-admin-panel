<?php require './backend/server.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
  <link rel="stylesheet" href="./styles.css" />
  <!-- JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- headerNav CSS -->
  <link rel="stylesheet" href="./styles/headerNav.min.css">
  <!-- sidebar CSS -->
  <link rel="stylesheet" href="./styles/sidebar.min.css">
  <!-- main CSS -->
  <link rel="stylesheet" href="./styles/main.min.css">
</head>

<body>
  <!-- headerNav -->
  <?php include './views/layout/headerNav.php'; ?>
  <!-- sidebar navigation -->
  <?php include './views/layout/sidebar.php'; ?>

  <!-- dashboard -->
  <div class="main col-11">
    <div class="row first-row">
      <div class="col-4">
        <section id="recently-posted">
          <div class="card">
            <div class="card-header">
              Recently Published Posts
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="./assets/images/post1.jpeg" alt="Post One Photo" class="img-fluid rounded-lg">
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h6 class="card-title">Lorem ipsum dolor sit amet...</h6>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Added 3 days ago</small></p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="./assets/images/post1.jpeg" alt="Post One Photo" class="img-fluid rounded-lg">
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h6 class="card-title">Lorem ipsum dolor sit amet...</h6>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Added 3 days ago</small></p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="./assets/images/post1.jpeg" alt="Post One Photo" class="img-fluid rounded-lg">
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h6 class="card-title">Lorem ipsum dolor sit amet...</h6>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Added 3 days ago</small></p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </div>
      <div class="col-8">
        <section id="statistics">
          <div class="card">
            <div class="card-header">
              Statisctics
            </div>
            <div class="stats py-3 px-4">
              <div class="py-4">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Visited the blog</p>
              </div>
              <div class="py-4">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Read posts</p>
              </div>
              <div class="py-4">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Subscribed to the newsletter</p>
              </div>
              <div class="py-4">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text">Subscribed to the newsletter</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="row second-row">
        <div class="col-4">
          <section id="recently-commented">
            <div class="card">
              <div class="card-header">
                Latest comments
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="row g-0">
                    <div class="col">
                      <div class="card-body">
                        <h6 class="card-title">Username</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <small class="text-muted">Added 3 days ago</small></p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row g-0">
                    <div class="col">
                      <div class="card-body">
                        <h6 class="card-title">Username</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <small class="text-muted">Added 3 days ago</small></p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row g-0">
                    <div class="col">
                      <div class="card-body">
                        <h6 class="card-title">Username</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <small class="text-muted">Added 3 days ago</small></p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>
        <div class="col-5">
          <section id="notes-form">
            <div class="card">
              <div class="card-header">
                Write a note
              </div>
              <div class="card-body px-4">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Your Note</label>
                    <textarea rows=7 class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </section>
        </div>
        <div class="col">
          <section id="active-user">
            <div class="card mt-2">
              <div class="card-header">
                Most Active User
              </div>
              <div class="card-body text-center">
                <div class="img-container mb-4">
                  <img src="./assets/images/user.jpeg" class="card-img-top" alt="User">
                </div>
                <h6 class="card-title mb-4">John Doe</h6>
                <p class="card-text">Commented <span class="badge bg-light text-dark">198</span> times</p>
                <p class="card-text">Posted <span class="badge bg-light text-dark">12</span> articles</p>
              </div>
            </div>
          </section>
        </div>
      </div>
</body>

</html>