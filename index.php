<!-- FORM Contact mail SMTP-->
<!-- <?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];


    if(!empty($email) && !empty($name) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            //Untuk Tampilan di Subjek dan penerima email
            $toEmail = 'rizkimod28@gmail.com'; 
            $emailSubject = 'Pesan Website Dari '.$name;
            $htmlContent = '
              <div style="width:100%;height:100%; class="hihi">
                <div style="width:90%;height:100%;margin:auto;background-color:#002147;color:white;padding:1em;">
                    <h2 style="margin:0!important;background-color:#ffc107;color:black!important;font-weight:bolder;font-size:20px;text-align:center;padding:2em;border-radius:0 0 3px 3px;">Form Kontak Website IMC</h2>
                    <h3>Nama:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$name.'</p>
                    <h3>Email:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$email.'</p>
                    <h3>Message:</h3><p style="background:linear-gradient(rgba(162, 162, 162,0.8),rgba(162, 162, 162,0.6));padding:.7em;">'.$message.'</p>
                    <div style="width:40%;height:100%;margin:auto;padding:1.3em 1.1em;border-radius:2px;background-color:#ffc107;text-align:center!important;">
                      <a href="www.imc.com" style="text-decoration:none!important;font-weight:bolder;color:black!important;text-align:center!important;">Kunjungi Website IMC</a>
                    </div>
                    <div style="width:100%;height:100%;margin:auto;color:white;padding:1em;text-align:center;padding-top:2em;">
                      <p style="opacity:0.8;">
                      Copyright &copy; 2021  All Rights Reserved by <br/>
                      <span style="text-align:center;">IM Connect</span>
                      </br/>
                      </p>
                    </div>
                </div>
              </div>
              '; // Isi & Tampilan Body Email

              //Pengaturan untuk email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            //Send EMail
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim ke Email Kami !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}

include('assets/php/koneksi.php');

    if($_POST){
        $nama = $_POST['nama'];
        $emaill = $_POST['emaill'];
        $telephone = $_POST['telephone'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $query = "INSERT INTO pesanan(nama,email,no_hp,alamat,tanggal_pesan,keterangan) VALUES('$nama','$emaill','$telephone','$alamat','$tanggal','$keterangan')";

        if($koneksi->query($query)){
            echo "Data Berhasil Di Tambah";
        }else{
            echo "Data Gagal Di Tambah";
        }
    }
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- icon title -->
    <link rel="icon" href="assets/img/logo.png" />
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FA 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Visima</title>
    <link rel="stylesheet" href="assets/css/form.css">
  </head>
  <body id="body">
    <img class="logo-bg" src="assets/img/headerr.png" alt="" />
    <nav class="a">
      <div class="logo">
        <img src="assets/img/logo.png" alt="" />
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Why Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Testimoni</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <div class="mobile-bar">
        <span class="mobile-bar1 mobile-bar-all"></span>
        <span class="mobile-bar2 mobile-bar-all"></span>
        <span class="mobile-bar3 mobile-bar-all"></span>
      </div>
    </nav>
    <header>
      <h1>VISIMA RENTAL</h1>
      <p>
        Visima Rental merupakan perusahaan yang bergerak di bidang audio visual. Kami menyediakan perlengkapan multimedia untuk acara wedding ataupun seminar seperti LED TV, Projector, Layar, Kamera, dsb. Visima Rental hadir untuk
        mensupport multimedia equipment di acara anda.
      </p>
      <button>Contact Us</button>
    </header>
    <main class="why">
      <h2>WHY CHOOSE US?</h2>
      <div class="bb">
        <div class="box-why">
          <img src="assets/img/why1.png" alt="" />
          <h3>Jaminan Kualitas Suara</h3>
          <p>Penggunaan sound sistem yang berkualitas menjadikan kualitas suara kami sangat baik</p>
        </div>
        <div class="box-why">
          <img class="why-3" src="assets/img/why3.png" alt="" />
          <h3>Streaming Dimanapun</h3>
          <p>Kami akan menyiarkan acaramu secara langsung dimanapun Anda berada</p>
        </div>
        <div class="box-why">
          <img class="why-2" src="assets/img/why2.png" alt="" />
          <h3>Banyak Pilihan Platform</h3>
          <p>Anda dapat menggunakan platform media sosial apa pun, untuk menjangkau audiens Anda.</p>
        </div>
      </div>
    </main>
    <main class="about">
      <h2>ABOUT US</h2>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/foto/Banner.jpg" alt="First slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/foto/1.jpg" alt="Second slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/foto/foto4.jpeg" alt="Third slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/foto/foto8.jpeg" alt="Third slide" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <p>
        Visima Rental merupakan perusahaan yang bergerak di bidang audio visual. Kami menyediakan perlengkapan multimedia untuk acara wedding ataupun seminar seperti LED TV, Projector, Layar, Kamera, dsb. Visima Rental hadir untuk
        mensupport multimedia equipment di acara anda.
      </p>
    </main>

    <!-- ===rizki -->
    <main>
      <div class="header">
        <div class="inner-header flex">
          <section>
            <center><h1 style="font-size: 3.5em; font-family: 'Montserrat', sans-serif; color: white; margin-bottom: 3rem">Price List</h1></center>
            <div class="pricing pricing-palden">
              <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-0" style="min-height: 497px">
                <div class="pricing-deco">
                  <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                    <path
                      class="deco-layer deco-layer--1"
                      d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path
                      class="deco-layer deco-layer--2"
                      d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                    <path
                      class="deco-layer deco-layer--4"
                      d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                      fill="#FFFFFF"
                    ></path>
                  </svg>
                  <div class="pricing-price">
                    <span class="pricing-currency">RP </span>7Jt
                    <span class="pricing-period"></span>
                  </div>
                  <h3 class="pricing-title" style="font-weight: bolder">Jasa Live Streaming</h3>
                </div>
                <ul class="pricing-feature-list">
                  <li class="pricing-feature">Camera Man (1 Person)</li>
                  <li class="pricing-feature">Lighting Fresnel (2 unit)</li>
                  <li class="pricing-feature">Frame Zoom (3 frame)</li>
                  <li class="pricing-feature">Lower Third (10 names)</li>
                  <li class="pricing-feature">Zoom Account (100 participants)</li>
                  <li class="pricing-feature">Free Sound System 1000 Watt</li>
                </ul>
                <a href="#" data-target="#login" data-toggle="modal"> <button class="pricing-action">Order Now</button></a>
              </div>
              <div class="pricing-item features-item ja-animate pricing__item--featured" data-animation="move-from-bottom" data-delay="item-1" style="min-height: 497px">
                <div class="pricing-deco" style="background: linear-gradient(135deg, #11071a, #584efd)">
                  <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                    <path
                      class="deco-layer deco-layer--1"
                      d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path
                      class="deco-layer deco-layer--2"
                      d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                    <path
                      class="deco-layer deco-layer--4"
                      d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                      fill="#FFFFFF"
                    ></path>
                  </svg>
                  <div class="pricing-price">
                    <span class="pricing-currency">RP </span>2Jt
                    <span class="pricing-period"></span>
                  </div>
                  <h3 class="pricing-title">Sewa Sound System</h3>
                </div>
                <ul class="pricing-feature-list">
                  <li class="pricing-feature">HQ Sound Speaker 15* (2 unit)</li>
                  <li class="pricing-feature">Audio Mixer (1 unit)</li>
                  <li class="pricing-feature">Wireless Mic (2 unit)</li>
                  <li class="pricing-feature">Mic Cable (2 unit)</li>
                  <li class="pricing-feature">Sound Man</li>
                  <li class="pricing-feature">Mixer Analog</li>
                </ul>
                <a href="#" data-target="#login" data-toggle="modal"> <button class="pricing-action">Order Now</button></a>
              </div>
              <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-2" style="min-height: 497px">
                <div class="pricing-deco">
                  <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                    <path
                      class="deco-layer deco-layer--1"
                      d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path
                      class="deco-layer deco-layer--2"
                      d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                      fill="#FFFFFF"
                      opacity="0.6"
                    ></path>
                    <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                    <path
                      class="deco-layer deco-layer--4"
                      d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                      fill="#FFFFFF"
                    ></path>
                  </svg>
                  <div class="pricing-price">
                    <span class="pricing-currency">RP </span>2,2Jt
                    <span class="pricing-period"></span>
                  </div>
                  <h3 class="pricing-title">Custom</h3>
                </div>
                <ul class="pricing-feature-list">
                  <li class="pricing-feature">Monitor Active (2 pcs)</li>
                  <li class="pricing-feature">Stand Mic (2 Pcs)</li>
                  <li class="pricing-feature">DI Box Behringer (2 pcs)</li>
                  <li class="pricing-feature">SI Box (2 pcs)</li>
                  <li class="pricing-feature">Monitor Active (2 pcs)</li>
                  <li class="pricing-feature">Mixer Digital</li>
                </ul>
                <a href="#" data-target="#login" data-toggle="modal"> <button class="pricing-action">Order Now</button></a>
              </div>
            </div>
          </section>
        </div>
        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
              <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
              <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,0,0,.5)" />
              <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,0,0,.5)" />
              <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0,0,0,.5)" />
              <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(0,0,0,.5)" />
            </g>
          </svg>
        </div>
      </div>
      <div class="box-gallery">
        <section>
          <h1 style="text-align: center; color: #fff; font-weight: bolder; letter-spacing: 2px; padding-top: 2rem">Gallery</h1>
          <div class="box-image">
            <div class="box-image1 box-image-all">
              <img src="assets/img/foto/foto7.jpeg" alt="" />
            </div>
            <div class="box-image2 box-image-all">
              <img src="assets/img/foto/foto8.jpeg" alt="" />
            </div>
            <div class="box-image3 box-image-all">
              <img src="assets/img/foto/foto9.jpeg" alt="" />
            </div>
            <div class="box-image4 box-image-all">
              <img src="assets/img/foto/foto11.jpeg" alt="" />
            </div>
          </div>
        </section>
      </div>
      <section>
        <section id="testim" class="testim">
          <h1>TESTIMONIALS</h1>
          <div class="wrap">
            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
            <ul id="testim-dots" class="dots">
              <li class="dot active"></li>
              <li class="dot"></li>
              <li class="dot"></li>
              <li class="dot"></li>
              <li class="dot"></li>
            </ul>
            <div id="testim-content" class="cont">
              <div class="active">
                <div class="img"><img src="assets/img/icon/boy.png" alt="" /></div>
                <h2>Ujang</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>

              <div>
                <div class="img"><img src="assets/img/icon/man.png" alt="" /></div>
                <h2>Asri</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>

              <div>
                <div class="img"><img src="assets/img/icon/programmer.png" alt="" /></div>
                <h2>Iki</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>

              <div>
                <div class="img"><img src="assets/img/icon/man.png" alt="" /></div>
                <h2>Steven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>

              <div>
                <div class="img"><img src="assets/img/icon/boy.png" alt="" /></div>
                <h2>Cow</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- Awal Contact Us -->
      <div class="container-contact" id="contactklik">
        <div class="contact">
          <div class="contact-top">
            <h1 data-aos="slide-down" data-aos-easing="linear" data-aos-duration="400">Contact Us</h1>
            <p>Terhubung dengan Kami</p>
          </div>
          <div class="contact-main">
            <div class="col-md-6 contact-left">
              <h3>Feedback</h3>
              <?php if(!empty($statusMsg)){ ?>
              <p style="position: relative" class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
              <?php } ?>
              <form action="index.php" method="post">
                <input type="text" placeholder="Name" required name="name" />
                <input type="text" placeholder="Email" required name="email" />
                <textarea placeholder="Message" required name="message"></textarea>
                <a href="#"><input type="submit" name="submit" value="send" /></a>
              </form>
            </div>
            <div class="contact-right-map">
              <div class="container-map">
                <div class="box-image-1 box-image-all">
                  <img src="assets/img/hp.png" alt="" />
                  <p>call us</p>
                </div>
                <div class="box-image-2 box-image-all">
                  <img src="assets/img/email.png" alt="" />
                  <p>mail us</p>
                </div>
                <div class="box-image-3 box-image-all">
                  <img src="assets/img/wa.png" alt="" />
                  <p>contact us</p>
                </div>
                <div class="box-image-4 box-image-all">
                  <img src="assets/img/hp.png" alt="" />
                  <p>call us</p>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- Akhir Contact Us -->
    </main>

    <footer></footer>
    <div class="back-to-top">
      <a href="#body"><i class="fas fa-chevron-circle-up"></i></a>
    </div>
    <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button data-dismiss="modal" class="close">&times;</button>
            <div class="container" id="container">
            <form action="index.php" method="POST" class="box-form">
                <p><label>Nama *</label><br>
                <input maxlength="50" name="nama" id="nama" type="text" required placeholder="Nama Lengkap"  /></p>
                
                <p><label>Email *</label><br>
                <input maxlength="80" name="email" id="email" type="email"required  placeholder="exp: nama@gmail.com" /></p>
                
                <p><label>Telephone *</label><br>
                <input name="telephone" id="phone" type="text" required  placeholder="exp: 081x-xxxx-xxxx" /></p>

                <p><label>Alamat *</label><br>
                <input name="alamat"  id="alamat" type="text" required  placeholder="Alamat Lengkap Anda" /></p>

                <p><label>Tanggal Pesan *</label><br>
                <input name="tanggal"  id="tanggal" type="datetime-local" required /></p>
                
                <p><label>Keterangan *</label><br>
                <textarea maxlength="1000" id="keterangan" name="keterangan" required placeholder="Keterangan di sini ...." style="width:100%;height:90px;"></textarea></p>
                
                <small>* Required</small>
                <p><input type="submit" value="Send Message" /></p>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
