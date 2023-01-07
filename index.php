<!-- use database -->
<?php
    require("dbconnect.php");
    $sql="SELECT * FROM `review`";
    $resort="SELECT * FROM `resort`";
    $query= mysqli_query($conn,$sql);
    $query1=mysqli_query($conn,$resort);
    $place="SELECT * FROM `place`";
    $query2=mysqli_query($conn,$place);
    $customer="SELECT * FROM `customer`";
    $query3=mysqli_query($conn,$customer);
    
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assest/img/reviewer/linh.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="./assest/css/style-trieu.css">
    <link rel="stylesheet" href="./assest/css/style-tuan.css">
    <link rel="stylesheet" href="./assest/css/style-ngan.css">
    <link rel="stylesheet" href="./assest/icofont/icofont.css">
    <title>Travel</title>
</head>
<body>
    <div class="main"> 
        <!-- begin navigative -->
        <div class="nav">
          <a href="" class="class="logo></a>
              <img src="./assest/img/logo.png" alt="">
          </a>
          <ul class="menu">
              <li class="menu-home">
                  <a href="#">Home</a>
                  <ul class="home-menu">
                      <li><a href="#">Travel Agency</a></li>
                      <li><a href="#">Winter Holidays</a></li>
                      <li><a href="#">Summer Holidays</a></li>
                      <li><a href="#">New Year Trip</a></li>
                      <li><a href="#">Wine Tour</a></li>
                      <li><a href="#">City Tour</a></li>
                  </ul>
              </li>
              <li class="menu-pages">
                  <a href="#">Pages</a>
                  <ul class="pasges-menu">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">What we Offter</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Comming soon</a></li>
                  </ul>
              </li>
              <li class="menu-Destinations">
                  <a href="#">Destinations</a>
                  <ul class="Destinations-menu">
                      <li><a href="#">Travel Agency</a></li>
                      <li><a href="#">Winter Holidays</a></li>
                      <li><a href="#">Summer Holidays</a></li>
                  </ul>
              </li>
              <li class="menu-Tour">
                  <a href="#">Tour</a>
                  <ul class="Tour-menu">
                      <li><a href="#">Travel Agency</a></li>
                      <li><a href="#">Winter Holidays</a></li>
                      <li><a href="#">Summer Holidays</a></li>
                      <li><a href="#">New Year Trip</a></li>
                      <li><a href="#">Wine Tour</a></li>
                      <li><a href="#">City Tour</a></li>
                  </ul>
              </li>
              <li class="menu-blog">
                  <a href="#">Blog</a>
                  <ul class="blog-menu">
                      <li><a href="#">Blog Masonry</a></li>
                      <li class="blog1">
                          <a href="#">Blog Standard <i class="icofont-rounded-right"></i></a>
                          
                          <ul class="menu-blog1">
                              <li><a href="#">Right Sidebar</a></li>
                              <li><a href="#">Left Sidebar</a></li>
                              <li><a href="#">Without Sidebar</a></li>
                          </ul>
                      </li>
                      <li class="blog2">
                          <a href="#">Post Types<i class="icofont-rounded-right"></i></a>
                          
                          <ul class="menu-blog2">
                              <li><a href="#">No Sidebar</a></li>
                              <li><a href="#">Standard</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Video</a></li>
                              <li><a href="#">Audio</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class="menu-shop">
                  <a href="#">Shop</a>
                  <ul class="shop-menu">
                      <li><a href="#">Product List</a></li>
                      <li><a href="#">Product Single</a></li>
                      <li class="shop1">
                          <a href="#">Shop Layout <i class="icofont-rounded-right"></i></a>
                          <ul class="menu-shop1">
                              <li><a href="#">Full width</a></li>
                              <li><a href="#">Threes Column</a></li>
                              <li><a href="#">Four Column</a></li>
                          </ul>
                      </li>
                      <li class="shop2">
                          <a href="#">Shop Pages<i class="icofont-rounded-right"></i></a>
                          <ul class="menu-shop2">
                              <li><a href="#">Threes Column</a></li>
                              <li><a href="#">Four Column</a></li>
                              <li><a href="#">Full photo</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
          </ul>
          <!-- them nơi du lịch -->
          <div class="addPlace">
            <a href="addPlace.php">
              <button type="submit" name="addPlace">Add Place</button>
            </a>
          </div>
          <!-- them nơi du lịch -->
          <!-- Đăng xuất -->
          <div class="close">
            <a href="logout.php">
              <button type="submit" name="dangxuat">LOGOUT</button>
            </a>
          </div>
      </div>
        <!-- End Navigative -->
        <!-- begin show slide -->
        <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials" style="background-image: url(./assest/img/slide/background.jpg);">
            <label class="item" for="t-1">
                <img src="./assest/img/slide/ảnh 10.jpg" alt="">
                <p>Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the winter.</p>
                <h2>Snow surfing</h2>
            </label>
            <label class="item" for="t-1">
                <img src="./assest/img/slide/ảnh 5.jpg" alt="">
                <p>Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the winter.</p>
                <h2>Snow surfing</h2>
            </label>
            <label class="item" for="t-2">
                <img src="./assest/img/slide/ảnh 3.jpg" alt="">
                <p>Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the winter.</p>
                <h2>Snow surfing</h2>
            </label>
            <label class="item" for="t-3">
                <img src="./assest/img/slide/ảnh 2.jpg" alt="">
                <p>Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the winter.</p>
                <h2>Snow surfing</h2>
            </label>
            <label class="item" for="t-4">
                <img src="./assest/img/slide/ảnh 12.jpg" alt="">
                <p>Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the winter.</p>
                <h2>Snow surfing</h2>
            </label>
            <label class="item" for="t-5">
                <img src="./assest/img/slide/ảnh 9.jpg" alt="">
                <p>music like a dream . one that i cannot hear</p>
                <h2>Snow surfing</h2>
            </label>
        </div>
        <div class="dots">
            <label for="t-1"></label>
            <label for="t-2"></label>
            <label for="t-3"></label>
            <label for="t-4"></label>
            <label for="t-5"></label>
        </div>
    </div>
        
        <!-- End show slide -->
        
        <!-- begin Place item -->
        <section class="packages" id="packages">
        <div class="box-container">
          <?php
            while($row2=mysqli_fetch_array($query2)){
          ?>

            <div class="box">
                <img src="./assest/img/place/<?=$row2['img']?>" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> <?=$row2['place_name']?> </h3>
                    <p><?=$row2['intro']?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$<?=$row2['discount']?>$<span><?=$row2['price']?></span> </div>
                    <a onclick="return xoasanpham()" href="deletePlace.php?id=<?=$row2['id_place']?>">
                        <button>Delete</button>
                    </a>
                    <a href="updatePlace.php?id=<?=$row2['id_place']?>">
                        <button>Update</button>
                    </a>
                </div>
            </div>
            <?php }?>
        </div>
    </section>
        <!-- End Place item -->
        <!-- begin video -->
        <div class="video-youtube">
          <div class="intro-review" >
            <h2 class="sub-title">Try Now</h2>
            <h1 class="title" >Winter Sports</h1>
          </div>
          <div class="video-winter">
          <iframe class="ivideo" width="420" height="315" src="https://www.youtube.com/embed/bjlUhtXSi5w"></iframe>
            <p class="winter-intro">Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the <br>
           winter. This sport is not popular in Viet Nam, because they do not have snow and just play with it at sport center <br>
            in the city.</p>
            <button>VIEW MORE</button>
          </div>
          
        </div>
        <!-- End video -->
        <!-- begin review -->
        <div class="review">
            <div class="intro-review">
                <h1 class="title">Top Review</h1>
                <p class="winter-intro">Skiing is one of the most popular sports nowadays, especially the countries have <br>
                    cold weather with snow in the winter. This sport is not popular in Viet Nam, because <br>
                     they do not have snow and just play with it at sport center in the city.
                </p>
                <a class="review-comment" href="addcomment.php">
                  <span class="btn1">New Review</span>
                </a>
            </div>
            <div class="review-user">
                 <?php   
                while( $row=mysqli_fetch_array($query)){
                ?>
                <div class="review-item">
                    <div class="item-img" >
                        <img src="./assest/img/reviewer/<?=$row['img']?>" alt="">
                    </div>
                    <div class="item-intro">
                        <p class="name"><?=$row['name']?></p>
                        <p class="rate"><?=$row['rate']?><i class="icofont-star"></i></p>
                        <p class="comment"><?=$row['comment']?></p>
                        <p class="place-travel"><?=$row['place-travel']?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <!-- End review -->
        <!-- begin holiday -->
        <div class="holiday" >
          <div class="intro-review">
            <h2 class="sub-title">Enoy Your</h2>
            <h1 class="title" >Winter Holiday</h1>
            <p class="winter-intro">Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the <br>
              winter. This sport is not popular in Viet Nam, because they do not have snow and just play with it at sport center <br>
              in the city.</p>
          </div>
          <div class="tienich">
              <div class="tienich-item">
                <img src="./assest/img/restaurants.png" alt="">
                <p class="ti-it-title">Restaurants</p>
                <p class="ti-it-intro" >My favourite restaurant is a small one near my university!</p>
              </div>
              <div class="tienich-item">
                <img src="./assest/img/shop.png" alt="">
                <p class="ti-it-title">Shop</p>
                <p class="ti-it-intro">My favourite restaurant is a small one near my university!</p>
              </div>
              <div class="tienich-item">
                <img src="./assest/img/sightseeing.png" alt="">
                <p class="ti-it-title">Sightseeing</p>
                <p class="ti-it-intro">My favourite restaurant is a small one near my university!</p>
              </div>
              <div class="tienich-item">
                <img src="./assest/img/stay.png" alt="">
                <p class="ti-it-title">Where To Stay</p>
                <p class="ti-it-intro">My favourite restaurant is a small one near my university!</p>
              </div>
            </div>
        </div>
        <!-- End holiday -->
        <!-- begin traveler -->
        <div class="traveler">
          <?php
                  while($row3=mysqli_fetch_array($query3)){
          ?>
          <div class="traveler-item">
              <img src="./assest/img/customer/<?=$row3['img']?>">
              <div class="cus_info">
                  <p class="cus_name"><?=$row3['name']?></p>
                  <p class="cus_subintro"><?=$row3['intro']?></p>
                  <ul class="link">
                      <li>
                        <a href="<?=$row3['link_fb']?>"  target="_blank"><i class="fonticon icofont-facebook"></i></a>
                      </li>
                      <li>
                        <a href="<?=$row3['link_pinterest']?>" target="_blank" rel="noopener noreferrer">
                          <i class="fonticon icofont-pinterest"></i>
                        </a>
                      </li>
                      <li>
                        <a href="<?=$row3['link_instagram']?>" target="_blank" rel="noopener noreferrer">
                          <i class="fonticon icofont-instagram"></i>
                        </a>  
                      </li>
                      <li>
                        <a href="<?=$row3['link_twitter']?>" target="_blank" rel="noopener noreferrer">
                        <i class="fonticon icofont-twitter"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div>
            <?php }?>  
        </div>
        <!-- End traveler -->
        
        <!-- begin place resort -->
        <div class="place-resort">
          <div class="intro-review">
            <h2 class="sub-title">Choose Your</h2>
            <h1 class="title" >Winter Resort</h1>
            <p class="winter-intro">Skiing is one of the most popular sports nowadays, especially the countries have cold weather with snow in the <br>
              winter. This sport is not popular in Viet Nam, because they do not have snow and just play with it at sport center <br>
              in the city.</p>
          </div>
          <div class="country">
            <?php while($row1=mysqli_fetch_array($query1)){
            ?>
              <div class="country-item">
                <img src="./assest/img/country/<?=$row1['imgURL']?>" alt="">
                <p><?=$row1['name']?></p>
              </div>
            <?php }?>
          </div>
        </div>
        <!-- End place resort -->
        <!-- begin introduce -->
        <footer class="footer">
          <div class="footerwrap1">
            <div class="logo">
                <img src="https://setsail.qodeinteractive.com/wp-content/uploads/2018/09/logo.png" alt="logo" width="301" height="96">
            </div>
            <p class="wraptext">Lorem ipsum dolor sit ametco nsec <br> te tuer adipiscing elitae</p>
            <div class="wraplink1">
                <a href="mailto:louis0909@gmail.com" class="wraplink">
                    <h4 class="icofont-email icon"></h4>
                    <h4 class="linktext">louis0909@gmail.com</h4>
                </a>
            </div>
            <div class="clearfix"></div>
            <div class="wraplink2">
                <a href="tel:0999998989" class="wraplink">
                    <h4 class="icofont-ui-touch-phone icon"></h4>
                    <h4 class="linktext">0999898989</h4>
                </a>
            </div>
            <div class="clearfix"></div>
            <div class="wraplink3">
                <a href="#" class="wraplink">
                    <h4 class="icofont-location-pin icon"></h4>
                    <h4 class="linktext">Ngũ Hành Sơn, Đà Nẵng</h4>
                </a>
            </div>
        </div>
        <div class="footerwrap2">
            <h3 class="wraptitle">Our Recent Posts</h3> <br>
            <a href="/" class="wrapvisit">Visit Đà Nẵng</a> <br>
            <a href="/" class="wrapdate">September/7/2021</a> <br>
            <div></div>
            <a href="/" class="wrapvisit">Visit Hà Nội</a> <br>
            <a href="/" class="wrapdate">October/10/2021</a> <br>
            <div></div>
            <a href="/" class="wrapvisit">Visit TP.Hồ Chí Minh</a> <br>
            <a href="/" class="wrapdate">September/12/2021</a>
        </div>
        <div class="footerwrap3">
            <h3 class="wraptitle">Subscribe To Our Newsletter</h3>
            <p class="wraptext">Lorem ipsum dolor sit ametco nsec <br> te tuer adipiscing elitae</p>
            <div class="inputwrap">
                <span class="inputicon">
                    <i class="icofont-ui-user"></i>
                </span>
                <input type="text" placeholder="Name" required="" class="inputbody">
            </div>
            <div class="inputwrap">
                <span class="inputicon">
                    <i class="icofont-email"></i>
                </span>
                <input type="email" placeholder="Email" required="" class="inputbody">
            </div>
            <button class="inputbtn">SUBSCRIBE</button>
        </div>
        <div class="footerwrap4">
            <h3 class="wraptitle">Our Instagram</h3>
            <p class="wraptext">Lorem ipsum dolor sit ametco nsec <br> te tuer adipiscing elitae Lorem ipsum <br> dolor sit ametco nsec te tuer <br> adipiscing elitae Lorem ipsum dolor <br> sit ametco nsec te tuer adipiscing <br> elitae</p>
        </div>
    </footer>
        <!-- begin introduce -->
    </div>
</body>
</html>
<!-- script -->
<script>
   function xoasanpham(){
        var conf = confirm('bạn có chắc chắc xóa sản phẩm hay không? ');
        return conf;
    }
</script>
<!-- script -->
