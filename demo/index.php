<?php include('includes/header.php') ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner main-carousel">
    <div class="carousel-item active">
      <div style="background-image: url(https://wallpaper.dog/large/20512965.png);"></div>
    </div>
    <div class="carousel-item">
      <div style="background-image: url(https://c4.wallpaperflare.com/wallpaper/792/460/915/1920x1080-px-code-coding-programming-simple-background-anime-ah-my-goddess-hd-art-wallpaper-preview.jpg);"></div>
    </div>
    <div class="carousel-item">
      <div style="background-image: url(https://wallpaper.dog/large/20512774.png);"></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="container text-center py-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
        <h1>
         Arta de a căuta informații in Google!
        </h1>
           <h2>
            Curs revoluționar
           </h2>
           <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing clit. In turpis lorem, feugiat id magna vitac, mattis pretium orci. Quisque rhoncus quis tellus sit amet posuere. Aliquam convalis sed felis sit amet viverra.
          </p>
       <button class="btn btn-primary">Inscrie-te acum</button>
       <button class="btn btn-outline-secondary">Cere detalii</button>
      </div>
      
     </div>

  </div>

  <div class="main py-5 bg-secondary bg-gradient">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
          <img class="p1" src="https://play-lh.googleusercontent.com/85WnuKkqDY4gf6tndeL4_Ng5vgRk7PTfmpI4vHMIosyq6XQ7ZGDXNtYG2s0b09kJMw" alt="" srcset="">
          <h4>HTML</h4>
          <p class="text-poze">HyperText Markup Language (HTML) este un limbaj de marcare utilizat pentru crearea paginilor.</p>
        </div>

        <div class="col-md-4 col-sm-6">
          <img class="p2" src="https://play-lh.googleusercontent.com/RTAZb9E639F4JBcuBRTPEk9_92I-kaKgBMw4LFxTGhdCQeqWukXh74rTngbQpBVGxqo" alt="" srcset="">
          <h4>CSS</h4>
          <p class="text-poze">CSS sau Cascading Style Sheets este un standard pentru formatarea elementelor unui document HTML.</p>
        </div>

        <div class="col-md-4 col-sm-6">
          <img class="p3" src="https://play-lh.googleusercontent.com/TzsxB3RFCBKOObTn0sw9jMHx3jwwULx9_1ig1kVDdOCUcuYFJFY3Eqzm8y7IjdhXr9I=w240-h480-rw" alt="" srcset="">
          <h4>JavaScript</h4>
          <p class="text-poze">JavaScript (JS) este un limbaj de programare orientat obiect bazat pe conceptul prototipurilor.</p>
        </div>
      </div>
  </div>
</div>

<div class="container text-center py-4">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <div>
              <h3>
                <?php 
                $a=19764;
                $x=1;
                $a1=number_format($a, 0, '.', '.');
                print $a1;
                $str="Participanți la modulul"
                ?>
              </h3> 
                 <?php
                  print $str;
                  if($a==$a){
                  print (" $x") ;
                  $x+=1;}
                  ?>
            
            </div>
          
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           <div>
            <h3>
                <?php 
                $b=9034;
                $b1=number_format($b, 0, '.', '.');
                print $b1;
                ?>
            </h3>
            <?php
                  print $str;
                  if($b==$b){
                  print (" $x") ;
                  $x+=1;}
                  ?>
           </div>
          
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           <div>
           <h3>
                <?php 
                $c=24012;
                $c1=number_format($c, 0, '.', '.');
                print $c1;
                ?>
            </h3>
            <?php
                  print $str;
                  if($c==$c){
                  print (" $x") ;
                  $x+=1;}
                  ?>
           </div>
          
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
           <div>
           <h3>
                <?php 
                $s=$a+$b+$c;
                $s1=number_format($s, 0, '.', '.');
                if( $s >= 50000 ){
                  print "<strong>  $s1 </strong>";
                } 
                else{
                  print $s1;
                }
                
                ?>
            </h3>
            </div>
           <p>Participanți in total</p>
          </div>
        </div>
</div>

<?php include('includes/footer.php') ?>