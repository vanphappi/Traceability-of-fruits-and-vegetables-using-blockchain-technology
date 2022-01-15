
<!DOCTYPE html>
<html lang="en">

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
  <script src="../html5-qrcode.min_.js"></script>
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
                <span class="nav-link-text">Thêm sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="xemttsanpham.php">
                <i class="fas fa-book text-primary"></i>
                <span class="nav-link-text">Xem thông tin sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="taoqrcode.php">
                <i class="fas fa-qrcode text-primary"></i>
                <span class="nav-link-text">QR Code</span>
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
                    <span class="mb-0 text-sm  font-weight-bold">Nhà phân phối</span>
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
              <h6 class="h2 text-white d-inline-block mb-0">Xem thông tin sản phẩm</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center" style="margin-top: -320px">
        <div class=" col ">
          <div id="mamemay" class="card" style="box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%); min-width: 90%;
      max-width: 90%;">

            <div class="card-body">
              <div class="card-body">
                <div class="pl-lg-4">
                 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-masp" >Mã sản phẩm</label>
                        <input id="input-masp" class="form-control" placeholder="VD: R1234" type="text" onkeypress="isInputNumber(event)" required>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4" style="margin-top: 38px">
                      <button type="submit" id="input-search" class="form-control" style="background-color: #5e72e4 !important; color: white;">
                        <i class="fas fa-search" style="margin-right: 5px;"></i> <span style="font-size: 15px;">Tìm sản phẩm</span>
                      </button>                     
                    </div>

                    <div class="col-md-4" style="margin-top: 38px">
                      <button onclick="return scanQR()" type="submit" id="input-search" class="form-control" style="background-color: #5e72e4 !important; color: white;">
                        <i class="fa fa-qrcode" style="margin-right: 5px;"></i> <span style="font-size: 15px;">Scan QR code</span>
                      </button>                     
                    </div>

                    <div class="col-md-4" style="margin-top: 38px">
                      <button type="submit" onclick="return R()" class="form-control" style="background-color: #5e72e4 !important; color: white;">
                        <i class="fas fa-compass" style="margin-right: 5px;"></i> <span style="font-size: 15px;">Refresh</span>
                      </button>                       
                    </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-lg-12">
                      <div id="qrcode" style="display: flex; justify-content: center; margin-top: 30px;">
                      </div>
                    </div>
                  </div>
                  <center><div style="width:500px;" id="reader"></div></center>
                  <div class="row">
                    <div class="col-lg-12">
                      <div id="res" style="display: flex; justify-content: center; margin-top: 30px;">
                      </div>
                      <div id="res2" style="display: flex; justify-content: center; margin-top: 30px;">
                      </div>

                      <div id="res3" style="display: flex; justify-content: center; margin-top: 30px;">
                      </div>

                      <div id="res4" style="display: flex; justify-content: center; margin-top: 30px;">
                      </div>
                  
                    </div>

                    </div>
                  </div>
                  </div>
                </div>
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
  <script src="../rsalibs/jsencrypt.min.js"></script>  
  <script src="../encode.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"></script>
  <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
  <script>
     if (typeof web3 !== 'undefined') {
        web3 = new Web3(web3.currentProvider);
        web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545'));
      } else {
        web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545'));
      }
      var contract = new web3.eth.Contract(contractAbi, contractAddress);
      var idsp=$('#input-masp').val();
    $("#input-search").on("click", function (e) {

      jQuery.get('../private_key.txt',function(txt){
      var idsp=$('#input-masp').val();

      var private_key=txt;
      decrypt.setPrivateKey(private_key);
      var uncrypted = decrypt.decrypt(idsp);
      var id=uncrypted;
      contract.methods.truyxuatnhaphanphoi(id).call(function(err, result) {
         var infophanphoi=result.split(",");
         $.ajax({
                type:"post",
                url:"getttsanpham_phanphoi.php",
                data:{tensanpham:infophanphoi[0],
                  ngaytao:infophanphoi[1],
                  diachi:infophanphoi[2],
                  motasanpham:infophanphoi[3]
                },
                cache:false,
                success:function(html){
                    $("#res").html(html);
                }
            });
                    
        });

        contract.methods.truyxuatnongdan(id).call(function(err, result) {
         var infonongdan=result.split(",");
         $.ajax({
                type:"post",
                url:"getttsanpham_nongdan.php",
                data:{noisanxuat:infonongdan[0],
                  ngaygieotrong:infonongdan[1],
                  ngaythuhoach:infonongdan[2],
                  cacloaithuocsudung:infonongdan[3]
                },
                cache:false,
                success:function(html){
                    $("#res2").html(html);
                }
            });
                    
        });

        contract.methods.truyxuatvanchuyen(id).call(function(err, result) {
         var infovanchuyen=result.split(",");
         $.ajax({
                type:"post",
                url:"getttsanpham_vanchuyen.php",
                data:{noidi:infovanchuyen[0],
                  noiden:infovanchuyen[1],
                },
                cache:false,
                success:function(html){
                    $("#res3").html(html);
                }
            });
                    
        });

        contract.methods.truyxuatnhabanle(id).call(function(err, result) {
         var infonhabanle=result.split(",");
         $.ajax({
                type:"post",
                url:"getttsanpham_nhabanle.php",
                data:{diachi:infonhabanle[0],
                  ngaynhap:infonhabanle[1],
                  cachbaoquan:infonhabanle[2]
                },
                cache:false,
                success:function(html){
                    $("#res4").html(html);
                }
            });
                    
        });
      
    });

  });
    function R(){
      location.reload();
    }
  </script>
  <script>
    function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9]/.test(ch))){
          evt.preventDefault();
      }
    }

  </script>
 
<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    //document.getElementById('input-masp').innerHTML = qrCodeMessage;
    $('#input-masp').val(qrCodeMessage);
    console.log(qrCodeMessage)
}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>

<script>
  $('#reader').hide();
  function scanQR(){
    $('#reader').show();
  }
</script>
</body>

</html>