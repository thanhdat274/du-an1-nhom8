   <!-- slide show -->
   <?php include_once './client/views/layouts/slideshow.php'; ?>
   <!-- ----------------- -->

   <main>

     <section>
       <h1>DANH MỤC ĐỒ CHƠI NỔI BẬT</h1>
       <div class="block__Dm">
         <?php foreach ($dscate as $cate) {
            extract($cate);
          ?>
           <div class="item__Dm">
             <img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt="">
             <div class="title_dm">
               <p><?= $name ?></p>
             </div>
           </div>
         <?php } ?>
         <!-- <div class="item__Dm">
           <img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt="">
           <div class="title_dm">
             <p>Name Danh Mục</p>
           </div>
         </div>
         <div class="item__Dm">
           <img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt="">
           <div class="title_dm">
             <p>Name Danh Mục</p>
           </div>
         </div>
         <div class="item__Dm">
           <img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt="">
           <div class="title_dm">
             <p>Name Danh Mục</p>
           </div>
         </div>
         <div class="item__Dm">
           <img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt="">
           <div class="title_dm">
             <p>Name Danh Mục</p>
           </div>
         </div> -->
       </div>
     </section>

     <?php foreach ($dscate as $cate) {
        extract($cate);
      ?>
       <section class="slide_content-1">
         <h1><?= $name ?></h1>
         <div class="swiper1 mySwiper1">
           <div class="swiper-wrapper">
             <?php foreach ($spnew as $sp) {
                extract($sp);
              ?>
               <div class="swiper-slide slide1">
                 <div class="img-sp"><a href="<?= USER_URL . 'spct' ?>"><img src="<?= $image ?>" alt=""></a></div>
                 <div class="heading">
                   <div class="heading_left">
                     <div class="name-sp"><?= $name ?></div>
                     <div class="Gia"><?= number_format($price) ?> VNĐ</div>
                   </div>
                   <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
                 </div>
               </div>
             <?php } ?>
             <!-- <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div> -->
           </div>
         </div>
       </section>
     <?php } ?>

     <!-- <section class="slide_content-1">
       <h1>BÚP BÊ - ROBOTs</h1>
       <div class="swiper1 mySwiper2">
         <div class="swiper-wrapper">
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
         </div>
       </div>
     </section>

     <section class="slide_content-1">
       <h1>BÚP BÊ - ROBOTs</h1>
       <div class="swiper1 mySwiper3">
         <div class="swiper-wrapper">
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
         </div>
       </div>
     </section>

     <section class="slide_content-1">
       <h1>BÚP BÊ - ROBOTs</h1>
       <div class="swiper1 mySwiper4">
         <div class="swiper-wrapper">
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
           <div class="swiper-slide slide1">
             <div class="img-sp"><img src="<?= USER_ASSET ?>img/danh-muc-1.jpg" alt=""></div>
             <div class="heading">
               <div class="heading_left">
                 <div class="name-sp">Đồ chơi trẻ em</div>
                 <div class="Gia">100.000 VNĐ</div>
               </div>
               <div class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
             </div>
           </div>
         </div>
       </div>
     </section>

     <section class="slide_content-1">
       <h1>Thương hiệu nổi bật</h1>
       <div class="swiper mySwiper5">
         <div class="swiper-wrapper">
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895788_9f97d42d8a96420567a1b37bd54857b5.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895573_436c31cc05a28f11c1bc53d86aafa267.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895571_1d811e572060814779a3db0e28ca859d.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895561_ba12679de9f84d551d90884f5a60db2e.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140870437_a9553ce59d23e09c07c122ec7f981eb5.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140859145_6f6720a137cc7a15980bbaf8a31a499d.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140870437_a9553ce59d23e09c07c122ec7f981eb5.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895561_ba12679de9f84d551d90884f5a60db2e.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895571_1d811e572060814779a3db0e28ca859d.jpg"></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895573_436c31cc05a28f11c1bc53d86aafa267.jpg" alt=""></div>
           <div class="swiper-slide"><img src="<?= USER_ASSET ?>img/z2919140895788_9f97d42d8a96420567a1b37bd54857b5.jpg" alt=""></div>
         </div>
         <div class="swiper-pagination"></div>
       </div>
     </section> -->

   </main>