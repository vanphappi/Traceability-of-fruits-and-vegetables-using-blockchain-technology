
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Truy xuất nguồn gốc</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main" style="min-width: 350px;">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <i class="bi fas fa-home text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="themsanpham.php">
                <i class="ni ni-planet text-primary"></i>
                <span class="nav-link-text">Thêm thông tin sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="xemttsanpham.php">
                <i class="fas fa-book text-primary"></i>
                <span class="nav-link-text">Xem thông tin sản phẩm</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav mb-md-3">
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel" style="margin-left: 350px">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>          
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Nhà bán lẻ</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="../index.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6" style="min-height: 400px">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Thêm thông tin từ nhà bán lẻ</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center" style="margin-top: -320px">
        <div class=" col ">
          <div class="card" style="box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%)">
            <div class="card-body">
              <div class="card-body">
              <div>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">ID của sản phẩm cần thêm</label>
                        <input id="input-idsanpham" type="text" name="noisanxuat" class="form-control" placeholder="VD: 100">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Địa chỉ</label>
                        <input id="input-diachi" type="text" name="noisanxuat" class="form-control" placeholder="VD: Thành phố Thủ Đức">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Ngày nhập</label>
                        <input id="input-ngaynhap" type="date" name="ngaygieotrong" class="form-control" placeholder="Ngày nhận sản phẩm từ nhà phân phối">
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Cách bảo quản</label>
                        <textarea id="input-cachbaoquan" type="text" name="noisanxuat" class="form-control" placeholder="VD: Cho vào ngăn lạnh ..."></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input id="input-luuthongtin" class="form-control" value="Lưu thông tin" type="submit" style="background-color: #5e72e4 !important; color: white;">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input id="input-xoa" class="form-control" value="Xoá" type="button" style="">
                      </div>
                    </div>
                  </div>
                </div>          
              </div>
              </div>
              <center><p style="font-size: 20px;font-weight: bold;" id="msg"></p></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script src="../web3.min.js"></script>
  <script src="../app.js"></script>
  <script>
    let idsanpham;
    if (typeof web3 !== 'undefined') {
        web3 = new Web3(web3.currentProvider);
        web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545'));
      } else {
        web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545'));
      }

      $("#input-luuthongtin").on("click", function(){
        fetch("../user.json").
        then(response=> response.json()).
        then(data=>{
          var account=data[0].nhabanle;
        var contract = new web3.eth.Contract(contractAbi, contractAddress);
        var idsanpham = $('#input-idsanpham').val();
        var diachi = $('#input-diachi').val();
        var ngaynhap =  $('#input-ngaynhap').val();
        var cachbaoquan=  $('#input-cachbaoquan').val();
        web3.eth.getAccounts().then(async function() {
        var receipt = await contract.methods.thongtinnhabanle(idsanpham,diachi,ngaynhap,cachbaoquan).send({ from: account, gas: 1000000 })
          .on('receipt',function(receipt){
            $('#msg').text('Thêm thông tin của sản phẩm thành công');
          });
        });

      });
    });
      // $("#inra").on("click", function(){
      //   contract.methods.truyxuatnhaphanphoi(1).call(function(err, result) {
      //     console.log(err, result)
      //     $("#thongtin").html(result);
      //   });
      // });

      $("#input-xoa").on("click", function(){
        $('#input-idsanpham').val('');
        $('#input-diachi').val('');
        $('#input-ngaynhap').val('');
        $('#input-cachbaoquan').val('');
      });
  </script>
</body>

</html>