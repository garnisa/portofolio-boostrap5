<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Garnisa Maudi Kusumawardini</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #7c107c">
      <div class="container">
        <a class="navbar-brand" href="#">NezzBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center mt-5">
      <img src="img/gar.jpeg" alt="Garnisa Maudi Kusumawardini" width="200" class="rounded-circle img-thumbnail" data-aos="flip-left" data-aos-offset="500" />
      <h1 class="display-4">Garnisa Maudi Kusumawardini</h1>
      <p class="lead">Beauty Influencer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,32L40,37.3C80,43,160,53,240,96C320,139,400,213,480,208C560,203,640,117,720,69.3C800,21,880,11,960,48C1040,85,1120,171,1200,192C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container" data-aos="fade-in" data-aos-offset="300">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Hallo perkenalkan saya Garnisa Maudi Kusumawardini, saya lahir di ciamis pada tanggal 24 mei 2004 saya ber profesi sebagai beauty influencer saya harap saya bisa memberi inspirasi kepada semua orang</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c599c2"
          fill-opacity="1"
          d="M0,128L48,122.7C96,117,192,107,288,117.3C384,128,480,160,576,176C672,192,768,192,864,181.3C960,171,1056,149,1152,144C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Colaboration</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500">
              <img src="projects/projek1.jpg" class="card-img-top" alt="projects 1" />
              <div class="card-body">
                <p class="card-text">
                  Rose All Day Cosmetics merupakan brand kecantikan asal Indonesia yang berdiri sejak 2017 dan terus eksis sampai saat ini. Rose All Day lahir dari ide tiga orang pendirinya yang terinspirasi oleh kecantikan natural
                  perempuan Indonesia.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50">
              <img src="projects/projek2.png" class="card-img-top" alt="projects 2" />
              <div class="card-body">
                <p class="card-text">
                  Biore merupakan brand pertama untuk produk kecantikan wajah yang berpusat pada masalah pori-pori. Produk Biore dinilai dengan kualitas yang tinggi namun harga terjangkau dan juga tetap berfokus pada kecantikan seperti
                  wanita jepang.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
              <img src="projects/projek3.jpg" class="card-img-top" alt="projects 3" />
              <div class="card-body">
                <p class="card-text">Make Over Cosmetics merupakan kosmetik profesional dengan rangkaian lengkap warna, tekstur, dan fungsi untuk setiap kategori produk</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="150">
              <img src="projects/projek4.png" class="card-img-top" alt="projects 4" />
              <div class="card-body">
                <p class="card-text">Skintific merupakan brand kecantikan yang menawarkan perlindungan efektif pada skin barrier. Seberapa ampuh kah untuk memperbaiki skin barier</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
              <img src="projects/projek5.jpg" class="card-img-top" alt="projects 5" />
              <div class="card-body">
                <p class="card-text">Somethinc merupakan brand lokal yang memproduksi skincare, makeup dan alat kecantikan dengan menggunakan bahan-bahan berkualitas tinggi dan memiliki sertifikat halal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c599c2"
          fill-opacity="1"
          d="M0,128L48,122.7C96,117,192,107,288,117.3C384,128,480,160,576,176C672,192,768,192,864,181.3C960,171,1056,149,1152,144C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir projects -->
    <!-- tabel -->
    <section id="skills">
      <div class="container">
        <div id="message"></div>
        <h1 class="mt-4 mb-4 text-center text-danger">USERS CRUD</h1>
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col col-sm-9">SKILLS</div>
              <div class="col col-sm-3">
                <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="sample_data">
                <thead>
                  <tr>
                    <th>User Id</th>
                    <th>Skill Name</th>
                    <th>Rating</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal" tabindex="-1" id="action_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" id="sample_form">
                <div class="modal-header">
                  <h5 class="modal-title" id="dynamic_modal_title"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">User Id</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" />
                    <span id="user_id_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                    <span id="skill_name_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="rating" name="rating" id="rating" class="form-control" />
                    <span id="rating_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" />
                    <span id="description_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" name="action" id="action" value="Add" />
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--end tabel-->
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="Name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="Pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="Pesan" rows="3"></textarea>
              </div>
              <button type="kirim" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c599c2"
          fill-opacity="1"
          d="M0,32L48,32C96,32,192,32,288,69.3C384,107,480,181,576,218.7C672,256,768,256,864,229.3C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-color= #c599c2 text-center">
      <p>Created with <i class="bi bi-balloon-heart text-danger"></i> by <a href="https://www.instagram.com/gnesvoug?igsh=bW85ZzQzZzJ2enhm&utm_source=qr" class="text-black">Garnisa Maudi Kusumawardini</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        showAll();

        $('#add_data').click(function () {
          $('#dynamic_modal_title').text('Add Biodata User');
          $('#sample_form')[0].reset();
          $('#action').val('Add');
          $('#action_button').text('Add');
          $('.text-danger').text('');
          $('#action_modal').modal('show');
        });

        $('#sample_form').on('submit', function (event) {
          event.preventDefault();
          if ($('#action').val() == 'Add') {
            var formData = {
              user_id: $('#user_id').val(),
              skill_name: $('#skill_name').val(),
              rating: $('#rating').val(),
              description: $('#description').val(),
            };

            $.ajax({
              url: 'http://garnisamaudi4.amisbudi.cloud/portofolio-boostrap5/si-admin/api/skills/create.php',
              method: 'POST',
              data: JSON.stringify(formData),
              success: function (data) {
                $('#action_button').attr('disabled', false);
                $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
                $('#action_modal').modal('hide');
                $('#sample_data').DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          } else if ($('#action').val() == 'Update') {
            var formData = {
              id: $('#id').val(),
              user_id: $('#user_id').val(),
              skill_name: $('#skill_name').val(),
              rating: $('#rating').val(),
              description: $('#description').val(),
            };

            $.ajax({
              url: 'http://garnisamaudi4.amisbudi.cloud/portofolio-boostrap5/si-admin/api/skills/update.php',
              method: 'PUT',
              data: JSON.stringify(formData),
              success: function (data) {
                $('#action_button').attr('disabled', false);
                $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
                $('#action_modal').modal('hide');
                $('#sample_data').DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          }
        });
      });

      function showAll() {
        $.ajax({
          type: 'GET',
          contentType: 'application/json',
          url: 'http://garnisamaudi4.amisbudi.cloudt/portofolio-boostrap5/si-admin/api/skills/read.php',
          success: function (response) {
            // console.log(response);
            var json = response.body;
            var dataSet = [];
            for (var i = 0; i < json.length; i++) {
              var sub_array = {
                user_id: json[i].user_id,
                skill_name: json[i].skill_name,
                rating: json[i].rating,
                description: json[i].description,
                action: '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' + '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger mx-2">Delete</button>',
              };
              dataSet.push(sub_array);
            }
            $('#sample_data').DataTable({
              data: dataSet,
              columns: [
                {
                  data: 'user_id',
                },
                {
                  data: 'skill_name',
                },
                {
                  data: 'rating',
                },
                {
                  data: 'description',
                },
                {
                  data: 'action',
                },
              ],
            });
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function showOne(id) {
        $('#dynamic_modal_title').text('Edit Biodata User');
        $('#sample_form')[0].reset();
        $('#action').val('Update');
        $('#action_button').text('Update');
        $('.text-danger').text('');
        $('#action_modal').modal('show');

        $.ajax({
          type: 'GET',
          contentType: 'application/json',
          url: 'http://garnisamaudi4.amisbudi.cloud/portofolio-boostrap5/si-admin/api/skills/read.php?id=' + id,
          success: function (response) {
            $('#id').val(response.id);
            $('#user_id').val(response.user_id);
            $('#skill_name').val(response.skill_name);
            $('#rating').val(response.rating);
            $('#description').val(response.description);
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function deleteOne(id) {
        var konfirmasiUser = confirm('Yakin untuk hapus data ?');
        if (konfirmasiUser) {
          $.ajax({
            url: 'http://garnisamaudi4.amisbudi.cloud/portofolio-boostrap5/si-admin/api/skills/delete.php',
            method: 'DELETE',
            data: JSON.stringify({
              id: id,
            }),
            success: function (data) {
              $('#action_button').attr('disabled', false);
              $('#message').html('<div class="alert alert-success">' + data + '</div>');
              $('#action_modal').modal('hide');
              $('#sample_data').DataTable().destroy();
              showAll();
            },
            error: function (err) {
              console.log(err);
              $('#message').html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
            },
          });
        }
      }
    </script>
  </body>
</html>
