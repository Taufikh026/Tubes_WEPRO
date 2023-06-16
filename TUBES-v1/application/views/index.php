
    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center " style="background-image: url('https://digitalnomads.world/wp-content/uploads/2021/01/bali-for-digital-nomads.jpg'); background-color:#fff68f;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span></span>
                            <h3>Lets explore<br>
                                our Indonesia!</h3>
                            <p> Assalamualaikum, Shalom, Namo budaya, Om swastiastu, Salam kebajikan, Salam Teknologi informasi <br>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- reson_area_start  -->
    <div class="reson_area section_padding" style="background-color:#fff68f;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Explore!</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1" >
                                <img src="img/Explore/baliN.jpg" alt="">
                            </div>
                        </div>
                        <div class="help_content"style="background:#ffe9a1;">
                            <h4>Bali</h4>
                            <p></p>
                            <a  href="#"  class="read_more" data-toggle="modal" data-target="#ExploreBali">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson" >
                        <div class="thum">
                            <div class="thum_1" >
                                <img src="img/Explore/borobudurN.jpg" alt="">
                            </div>
                        </div>
                        <div class="help_content" style="background:#ffe9a1;">
                            <h4>Borobudur</h4>
                            <p></p>
                            <a  href="#"  class="read_more" data-toggle="modal" data-target="#ExploreBorobudur">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/Explore/rajaampatN.jpg" alt="">
                            </div>
                        </div>
                        <div class="help_content"style="background:#ffe9a1;">
                            <h4>Raja Ampat</h4>
                            <p></p>
                            <a  href="#"  class="read_more" data-toggle="modal" data-target="#ExploreRajaAmpat" >Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                    <!-- Modal -->
        <div class="modal fade" id="ExploreBali" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bali</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="thum text-center">
                        <div class="thum_1">
                            <img src="img/Explore/baliN.jpg" style="width: 40%; height: 40%;">
                        </div>
                    </div>
                    <div class="text-justify">
                    <p> Pulau Bali merupakan destinasi wisata paling populer di Indonesia. Bali memiliki resor terbaik 
                        di dunia berpadu dengan pantai-pantai yang menawan yang sangat terkenal keindahannya dengan segala
                        aktifitas dan gemerlap kehidupan malam yang meriah serta pesona alamnya yang tiada tara.
                        Pulau Bali terletak di antara Pulau Jawa dan Pulau Lombok.
                    </P></div>
                    <form id="readBali" class="form p-3" action="<?php base_url()?>ControllerIndex/InsertTiket/" method="post">
                        <div class="form-group">
                            <input type="hidden"  name="nama" value="bali">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="hidden" name="hargaTiket" value="300000">
                            <input type="text" class="form-control" value="300000" Disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlahTiket">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="ExploreRajaAmpat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Raja Ampat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="thum text-center">
                            <div class="thum_1">
                                <img src="img/Explore/rajaampatN.jpg" alt="">
                            </div>
                        </div>
                    <div class="text-justify">
                    <p> Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua.
                    </P></div>
                    <form id="readRajaampat" class="form p-3" action="<?php base_url()?>ControllerIndex/InsertTiket/" method="post">
                        <div class="form-group">
                            <input type="hidden"  name="nama" value="raja ampat">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="hidden" name="hargaTiket" value="550000">
                            <input type="text" class="form-control" value="550000" Disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlahTiket">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- Modal -->
        <div class="modal fade" id="ExploreBorobudur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borobudur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="thum text-center">
                            <div class="thum_1">
                                <img src="img/Explore/borobudurN.jpg" alt="">
                            </div>
                        </div>
                    <div class="text-justify">
                    <p> candi Borobudur merupakan peninggalan dinasti Syailendra. Candi ini didirikan oleh penganut agama Buddha Mahayana. Bangunan ini dibentuk sekitar abad ke-8 pada masa pemerintahan wangsa Syailendra. Candi Borobudur termasuk kuil Buddha terbesar di dunia. Tujuan dibangun Candi Borobudur untuk memuliakan raja-raja Syailendra (775-850 M) yang telah bersatu kembali dengan dewa yang menjadi asal beliau.
                    </P></div>
                    <form id="readBorobudur" class="form p-3" action="<?php base_url()?>ControllerIndex/InsertTiket/" method="post">
                        <div class="form-group">
                            <input type="hidden"  name="nama" value="Borobudur">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="hidden" name="hargaTiket" value="400000">
                            <input type="text" class="form-control" value="400000" Disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlahTiket">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- reson_area_end  -->

    

    <!-- latest_activites_area_start  -->
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">

        </div>
        <div class="container" >
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>This is Indonesia! </span><br>
                            </h3>
                        </div>
                        <p class="para_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation.</p class="para_1">
                        <p class="para_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation. tempor 
                            incididunt  ut labore dolore magna aliqua. enim minim 
                            veniam, quis nostrud exercitation.</p>
                        <a href="#" data-scroll-nav='1' class="boxed-btn4" style="background:#ffe135;">Lets Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_activites_area_end  -->
