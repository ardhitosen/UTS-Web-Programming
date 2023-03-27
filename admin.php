<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Menu</title>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="ProfileAdmin.php">Profile</a>
                    </li>
                </ul>
                <div class="search-container">
    
                <input type="text" placeholder="Search.." name="search">
               
                </form>
                <style>
                  .topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
  </style>
                </div>
                </div>
            </div>
        </nav>
    </head>
    <body>

    <div class="container p-4 pb-0" style="background-color: #929fba">
            <section class="">
                <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h2 class="text-center text-lg-start text-white">
                    <marquee> WELCOME ADMIN! </marquee>
                    </h1>
    </div>
</div>
</div>

<table>
  
  <tbody>
    <tr>
      <td colspan="5">
        <div class="swipe-container">
          <!-- left action -->
          <div class="action left">
        
          </div>
          <!-- swipeable element -->
          <div class="swipe-element" style="width:100%">
            <table>
              <tbody>
                <tr>
                  <td width="10%" valign=middle align=Center nowrap="nowrap">Nama Lengkap</td>
                  <td width="10%" valign=middle align=Center>Jenis Kelamin</td>
                  <td width="10%" valign=middle align=Center>Email</td>
                  <td width="10%" valign=middle align=Center>NISN</td>
                  <td width="10%" valign=middle align=Center>Tempat, tanggal lahir</td>
                  <td width="10%" valign=middle align=Center>Alamat</td>
                  <td width="10%" valign=middle align=Center>NISN</td>
                  <td width="10%" valign=middle align=Center>Nama Ayah</td>
                  <td width="10%" valign=middle align=Center>Nama Ibu</td>
                  <td width="10%" valign=middle align=Center>Status Pendaftaran</td>
                  
                </tr>
                <tr>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Fina Valentina</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Perempuan</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">fina@student.umn.ac.id</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Berhasil</td>
                </tr>
                <td width="10%" valign=middle align=Center nowrap="nowrap">David Ongky</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Laki-laki</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">david@student.umn.ac.id</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Berhasil</td>
                </tr>
                <tr>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Christoforus Ardhito</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Laki-laki</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">christoforus@student.umn.ac.id</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">xxxxxxxxxxxxxxxx</td>
                <td width="10%" valign=middle align=Center nowrap="nowrap">Berhasil</td>

              </tbody>
            </table>
          </div>
          <!-- right action -->
          <div class="action right">
           
          </div>
        </div>
      </td>
    </tr>
  </tbody>
  <style>
    .swipe-container {
  display: flex;
  overflow: auto;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
}

/* scrollbar should be hidden */
.swipe-container::-webkit-scrollbar {
  display: none;
}

/* main element should always snap into view */
.swipe-element {
  scroll-snap-align: start;
  font-family: sans-serif;
}

/* actions and element should be 100% wide */
.action,
.swipe-element {
  min-width: 100%;
}

.action {
  display: flex;
  align-items: center;
}

/* icon should remain sticky */
i {
  color: white;
  position: sticky;
  left: 16px;
  right: 16px;
}







table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td,
th {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</table>








    <div class="sticky-bottom">
        <footer
        
        <div class="fixed-bottom">
            <footer
                class="text-center text-lg-start text-white"
                style="background-color: #929fba"
                >
            <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                    SMP Juan Terro, Gading Serpong
                    </h6>
                    
                    <div>
                      
                    <p><i class="fas fa-envelope mr-3"></i> smpjuanterro@ac.id 021-123456789</p>
                    </div>
                   </style>

            </section>
            </div>

            <div
                class="text-center p-3"
                style="background-color: #6d4c41"
                >
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/"
                >MDBootstrap.com</a
                >
            </div>
        </footer>
        </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>