<?php
include('controller/c_lines.php');
$c_lines = new C_lines();
$noi_dung = $c_lines->index();
$menu = $noi_dung['menu'];
$menu2 = $noi_dung['menu2'];
?>
<?php
include('controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['dangnhap'])){
   $email= $_POST['email'];
   $password = $_POST['password'];
   $user = $c_user->dangnhap($email,$password);
   // print_r($user); die;
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Bay </title>
      <link rel="stylesheet" href="public/css/bootstrap.min.css">
      <link rel="stylesheet" href="public/js/jquery.min.js">
      <link rel="stylesheet" href="public/fontawesome-free-5.5.0-web/css/all.css">
      <link rel="stylesheet" href="public/css/style.css">
      <link rel="stylesheet" href="public/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="public/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
      <script src="public/js/jquery.min.js"></script>
      <script src="public/js/popper.min.js"></script>
      <script src="public/js/bootstrap.min.js"></script>
      <script src="public/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
      <script language="javascript" src="public/js/style.js"></script>
   </head>
   <body>
      <header>
         <div class="container-fluif bg-light">
            <div class="row px-2 ">
               <div class="col-3">
                  <h1>FLY ONE</h1>
               </div>
               <div class="col-9 d-flex justify-content-between align-items-center">
                  <nav class="navbar navbar-expand-lg navbar-light ">
                  <?php echo $_SERVER['SERVER_NAME']; ?>
                     <div>
                        <ul class="navbar-nav">
                           <li class="nav-item d-flex justify-content-between ">
                              <i class="fas fa-plane icon-color p-1"></i>
                              <a class="nav-link" href="#">Tim chuyen bay de dang</a>
                           </li>
                           <li class="nav-item d-flex justify-content-between ">
                              <i class="fas fa-shield-alt icon-color p-1"></i>
                              <a class="nav-link" href="#">xac thuc tuc thi</a>
                           </li>
                           <li class="nav-item d-flex justify-content-between ">
                              <i class="far fa-check-circle icon-color p-1"></i>
                              <a class="nav-link" href="#">Thanh toan nhanh chong</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
                  <button type="button" class="btn btn-outline-primary my-3" data-toggle="modal" data-target="#exampleModalCenter">Sign in</button>
                  <!-- ?login -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <form method="POST" action="#">
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="inputEmail4">Email</label>
                                       <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="inputPassword4">Password</label>
                                       <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                    <?php
                                    if(isset($_SESSION['user_error'])){
                                       echo "<div class='modal-fooder alert alert-danger w-100'>".($_SESSION['user_error'])."</div>";
                                    }
                                    ?>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="dangnhap" class="btn btn-primary">Submit</button>
                                 </div>
                              </form>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <!-- end lgin -->
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="owl-carousel owl-theme">
                  <div class="item image-1" data-merge="1">
                     <div class="position-absolute" style="top:20%; left:50%; color:white;">
                        <h1>Wellcome to</h1>
                        <h3> ONE LINE</h3>
                     </div>
                  </div>
                  <div class="item image-2" data-merge="2"></div>
                  <div class="item image-3" data-merge="1"></div>
                  <div class="item image-4" data-merge="3"></div>
               </div>
            </div>
         </div>
      </header>
      <main>
         <div class="comtainer">
            <div class="sticky-top bg-light">
               <div class="row ">
                  <nav class="navbar navbar-expand-lg navbar-light w-100 ">
                     <ul class="navbar-nav w-100 d-flex justify-content-between">
                        <?php
                        for($i=0;$i<count($menu);$i++){
                           if($i==3 || $i==5){
                           ?>
                           <!-- fff -->
                           <?php
                           if($i==3){
                              ?>
                              <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#"><?=$menu[$i]->TenMenu?></a>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <?php
                                 $cat = explode(',',$menu2[0]->nhom);
                                 foreach($cat as $ten){
                                    $cat2 = explode(':',$ten);
                                    list($id,$truong)= $cat2;
                                    ?>
                                 <a class="dropdown-item" href="#"><?=$truong?></a>
                                    <?php
                                 }
                                 ?>
                              </div>
                           </li>
                              <?php
                           }else{
                              ?>
                              <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#"><?=$menu[$i]->TenMenu?></a>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <?php
                                 $cat = explode(',',$menu2[1]->nhom);
                                 foreach($cat as $ten){
                                    $cat2 = explode(':',$ten);
                                    list($id,$truong)= $cat2;
                                    ?>
                                 <a class="dropdown-item" href="#"><?=$truong?></a>
                                    <?php
                                 }
                                 ?>
                                 <a class="dropdown-item" href="#"></a>
                              </div>
                               </li>
                              <?php
                           }
                           ?>
                           <!-- ffff -->
                           <?php
                           }else{
                              ?>
                              <li class="nav-item ">
                              <a class="nav-link" href="#"><?=$menu[$i]->TenMenu?></a>
                              </li>
                              <?php
                           }
                        }
                        ?>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-7">
                  <div class="row mt-3">
                     <div class="col-md-6">
                        <article class="box border-top  border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title mt-2">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVN.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                     <div class="col-md-6">
                        <article class="box border-top border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVJ.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-6">
                        <article class="box border-top  border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVN.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                     <div class=" col-md-6">
                        <article class="box border-top border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVJ.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-6">
                        <article class="box border-top  border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVN.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                     <div class=" col-md-6">
                        <article class="box border-top border-warning">
                           Khách vừa đặt
                           <b>2</b> 
                           vé Khứ Hồi 
                           <h4 class="box-title">
                              <a href="#" rel="nofollow">Ha Noi - Nha Trang</a> 
                           </h4>
                           <figure class="d-flex justify-content-between"> 
                              <img src="public/image/smVJ.gif" class="logo-airplane lazy">
                              <span class="price">5,055,000 VND</span>
                           </figure>
                        </article>
                     </div>
                  </div>
               </div>
               <div class="col-5 bg-light px-5">
                  <nav class="navbar navbar-expand-lg navbar-light ">
                     <div>
                        <ul class="navbar-nav">
                           <li class="nav-item d-flex justify-content-between ">
                              <a class="nav-link" href="#">noi dia</a>
                           </li>
                           <li class="nav-item d-flex justify-content-between ">
                              <a class="nav-link" href="#">quoc te</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
                  <div class="border-bottom">
                     <p>Bạn muốn tìm kiếm chuyến bay theo hãng?</p>
                     <div class="d-flex justify-content-between">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                           <label class="form-check-label" for="exampleRadios1">
                           Vietjet air
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                           <label class="form-check-label" for="exampleRadios2">
                           vietnam arilines
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                           <label class="form-check-label" for="exampleRadios3">
                           JetStar
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="px-5 border-bottom d-flex justify-content-between">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadis" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadis1">
                        Mot chieu
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadis" id="exampleRadis2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        khu hoi
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-group mt-1 w-50">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect01">khởi hành</label>
                        </div>
                        <select class="custom-select mr-1" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="input-group mt-1 w-50">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect01">hạ cánh</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group w-50">
                        <label for="example-date-input" class=" col-form-label">ngay di</label>
                        <div class="mr-1">
                           <input class="form-control" type="date" value="2019-01-01" id="example-date-input">
                        </div>
                     </div>
                     <div class="form-group w-50">
                        <label for="example-date-input" class="col-form-label">ngay ve</label>
                        <div class="">
                           <input class="form-control" type="date" value="2019-01-01" id="example-date-input">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-group col-4 d-flex flex-column">
                        <div class="input-group-prepend">
                           <label class="input-group-text w-100" for="inputGroupSelect01">người lớn (>12t)</label>
                        </div>
                        <select class="custom-select w-100" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="input-group col-4 d-flex flex-column ">
                        <div class="input-group-prepend">
                           <label class="input-group-text w-100" for="inputGroupSelect01">trẻ em (2-12t)</label>
                        </div>
                        <select class="custom-select w-100" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="input-group col-4 d-flex flex-column">
                        <div class="input-group-prepend">
                           <label class="input-group-text w-100" for="inputGroupSelect01">em bé(<2 tuổi) </label>
                        </div>
                        <select class="custom-select w-100" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                  </div>
                  <div class="px-5 mt-2 border-bottom d-flex justify-content-between">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadi" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadis1">
                        GIÁ THẤP NHẤT
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadi" id="exampleRadis2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        CẤT CÁNH SỚM NHẤT
                        </label>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <button type="button" class="w-100 btn btn-outline-primary">block ticke</button>
                  </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-4 Display-table">
                  <div class="card">
                     <div class="card-header">TƯ VẤN ELINES</div>
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item">CÁC HÌNH THỨC THANH TOÁN</li>
                        <li class="list-group-item px-0">
                           <pre>
   1.Thanh toán tại địa chỉ của quý khách      
   2.Thanh toán tại văn phòng ELINES
   3.Thanh toán chuyển khoản
</pre>
                        </li>
                        <li class="list-group-item">
                           HỖ TRỢ TRỰC TUYẾN
                        </li>
                        <li class="list-group-item">
                           <ul class="ul-support">
                              <li class="li-title">Elines Hà nội</li>
                              <li class="li-address">
                                 <b>Tầng 3,333 Trần Khát Chân, Hai Bà Trưng, Hà Nội </b>
                              </li>
                              <li class="li-address"><b>Số 12 Ngô Gia Tự, Đức Giang, Long Biên, Hà Nội</b>
                              </li>
                              <li class="li-address"><a rel="nofollow" href="#" class="col-md-4 col-xs-4 col-sm-4">
                                 <i class="soap-icon-skype">
                                 </i>Mr.The</a>
                              </li>
                              <li class="li-title">Elines Sài Gòn</li>
                              <li class="li-address"><b>Số 3/2 Đường D1- Phường 25 - Quận Bình Thạnh - Thành phố Hồ Chí Minh</b>
                              </li>
                              <li class="li-address"> <a rel="nofollow" href="#"  class="col-md-4 col-xs-4 col-sm-4"><i class="soap-icon-skype"></i>Mr.KIET</a> </li>
                           </ul>
                        </li>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-8 Display-table">
                  <div class="row h-100">
                     <div class="col-12">
                        <div class="card-deck h-100">
                           <div class="card ">
                              <div class="image-2"></div>
                              <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                              <div class="card-footer">
                                 <small class="text-muted">Last updated 3 mins ago</small>
                              </div>
                           </div>
                           <div class="card">
                              <div class="image-2"></div>
                              <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              </div>
                              <div class="card-footer">
                                 <small class="text-muted">Last updated 3 mins ago</small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="container mt-5">
            <div class="row">
               <div class="col-6 col-md-6">
                  <ul class="list-unstyled d-flex justify-content-between ">
                     <li><a href="">About</a></li>
                     <li><a href="">.</a></li>
                     <li><a href="">Contact</a></li>
                     <li><a href="">.</a></li>
                     <li><a href="">Terms of Use</a></li>
                     <li><a href="">.</a></li>
                     <li><a href="">Privacy Policy</a></li>
                  </ul>
                  <span class="text-muted"> &copy; Your Website 2018 A8</span>
               </div>
               <div class="col-6 col-md-6 d-flex justify-content-end">
                  <div class="size-icon-footer">
                     <a href="#"><i class=" pl-3 fab fa-facebook-square"></i></a>
                     <a href="#"><i class=" pl-3 fab fa-twitter"></i></a>
                     <a href="#"><i class=" pl-3 fab fa-instagram"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>