@include('header') 
<?php 
$asset = config('constants.asset');
?>
<section style="padding: -6rem 0;">
	<div class="fluid clearfix">
	<a class="col-lg-12 col-sm-12 col-xs-12 " >
		   <img src="{{asset('img/picgedung.png') }}" style=" height: auto;width: 100%;">
		   <div class="boxselengkapnya clearfix" style="max-width: 100%;margin-top: -27%; ">
		   	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		   		<hr class="verticalline" style="position: absolute;margin-left: 2%;">
		   		<h5 style="color: #FFFFFF;
					  font-family: Ubuntu;
					  font-size: 15px;
					  line-height: 30px;
					  width: 100%;
					  text-align: left;
					  margin-top: 5%; 
					  margin-left: 6%;">
		   			INGIN KULIAH DAN BERKARIR
		   		</h5>
		   		<h5 style="color: #FFFFFF;
					  font-family: Ubuntu;
					  font-size: 15px;
					  line-height: 30px;
					  width: 100%;
					  text-align: left;
					  margin-top: -5%;
					  margin-left: 6%;">
		   			DI LUAR NEGERI?
		   		</h5>
		   	</div>
		   	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="margin-top:-3%">
		   	<button type="button" class="rectselengkapnya " style="max-width: 100%; margin-top: 15%">   		
		   		<h5 style="color: #FFFFFF;				  
				  font-size: 15px;				  
				  text-align: left;
				  display:inline-block">
		   			Selengkapnya
		   		</h5>		   		
		   		<i class="glyphicon glyphicon-menu-down text-align"
		   		 style="color: #FFFFFF; text-align:right;		   		 				  
				  "></i>
		   		
		   	</button>

		   	</div>
		   </div>
    </a>
	</div>
</section>
  
<section style="padding: -6rem 0;">
<div class="container" >
<div class="row text-center">

<h2 style="color: #4A4A4A;">
	Tentang Kami
</h2>

<h3 style="color: #4A4A4A;">
	INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
</h3>
</div>

</div>
</section>

 &nbsp;&nbsp;
<hr style="float: center;width: 90%;border: 1px solid #EAEAEA; ">

<section style="padding: -3rem 0;">
<div class="container">
<div class="row ">

<h2 class="col-sm-12 col-xs-12" style="color: #4A4A4A; text-align: center; margin-bottom: 20px;">
	Layanan Kami
</h2>


<!-- Gambar 1 -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img class="efek" src="{{asset('img/bachelor.png') }}" style="max-width: 100%; height: 100%;
			 z-index: -1; position: absolute;">
			<div class="bottomleft">
			<h4>
			Studi S1 Bachelor
			</h4>	
			</div>
		
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-width: 100%;height: auto;">
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img  src="{{asset('img/master.png') }}" style="max-width: 100%; height: 100%;
			z-index: -1; position: absolute; ">
			<div class="bottomleft">
			<h4>
			Studi S2 Master 
			</h4>	
			</div>
		
	</div>
</div>
<!-- Gambar 3 -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-width: 100%;height: auto;">
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img  src="{{asset('img/phd.jpg') }}" style="max-width: 100%; height: 100%;z-index: -1; position: absolute;">
			<div class="bottomleft">
			<h4>
			Studi S3 PhD 
			</h4>	
			</div>
		
	</div>
</div>

<!-- Gambar 4-->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-width: 100%;height: auto;">
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img class="img-fluid " src="{{asset('img/kursus.png') }}" style="max-width: 100%; height: 100%; 
			z-index: -1; position: absolute;
			">
			<div class="bottomleft">
			<h4>
			Kursus Bahasa Asing
			</h4>	
			</div>
		
	</div>
</div>
<!-- Gambar 5 -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-width: 100%;height: auto;">
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img  src="{{asset('img/studytour.png') }}" style="max-width: 100%; height: 100%;
			z-index: -1; position: absolute; ">
			<div class="bottomleft">
			<h4>
			Study Tour 
			</h4>	
			</div>
		
	</div>
</div>
<!-- Gambar 6 -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-width: 100%;height: auto;">
	<div class="boxlayanankami clearfix" >
				<hr class="verticalline" style="position: absolute;margin-left: 5%;">
			<img  src="{{asset('img/ausbildung.jpg') }}" style="max-width: 100%; height: 100%; z-index: -1; position: absolute; ">
			<div class="bottomleft">
			<h4>
			Ausbildung
			</h4>	
			</div>
		
	</div>
</div>
</div>
</div>
</section>



<!-- 
<section style="padding: -6rem 0;">
<div class="container">
	<div class="row text-center">
		<h2 style="color: #4A4A4A;">
			Mitra Kami
		</h2>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=1" alt="slide 1">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=2" alt="slide 2">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=3" alt="slide 3">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 active">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=4" alt="slide 4">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=5" alt="slide 5">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=6" alt="slide 6">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=7" alt="slide 7">
                    </a>
                  </div>
                </div>
            </div>
             <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/200x200?text=8" alt="slide 8">
                    </a>
                  </div>
                  
                </div>
            </div>
		
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>	
	</div>
</div>
</section>
 -->
<section style="padding: -6rem 0;">
<div class="container">
	<div class="boxkonseling center" style="max-width: 100%">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		   		<h2 style="color: #FFFFFF;
					  font-family: Ubuntu;
					  font-size: 20px;
					  line-height: 30px;
					  width: auto;
					  text-align: left;
					  margin-top: 5%;
					  margin-left: 5%;">
		   			GRATIS KONSELING STUDI DI LUAR NEGERI
		   		</h2>
		   		<h3 style="color: #FFFFFF;
					  font-family: Ubuntu;
					  font-size: 15px;
					  line-height: 30px;
					  width: auto;
					  text-align: left;
					  margin-top: 1%;
					  margin-left: 5%;
					  padding-bottom: 3%;">
		   			Konsultasi seputar Kuliah/bekerja di luar negeri
		   		</h3>
		   	</div>
		   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 clearfix">
		   	<button type="button" class="rectselengkapnya clearfix" style="max-width: 100%; margin-top: 15%">   		
		   		<h5 style="color: #FFFFFF;				  
				  font-size: 15px;				  
				  text-align: left;
				  display:inline-block">
		   			Mulai Konsultasi
		   		</h5>		   		
		   		<i class="glyphicon glyphicon-menu-down text-align"
		   		 style="color: #FFFFFF; text-align:right;		   		 				  
				  "></i>
		   		
		   	</button>

		   	</div>
	</div>
</div>
</section>

<section style="padding: 6rem 0; margin-top: 10%">
<div class="container">
<div class="row text-center">
	
	<h2 style="color: #4A4A4A; margin-bottom: 5%;">
		Artikel Terbaru
	</h2>

	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	</div>
	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 column" style="display: inline-block;">
	<div class="col-sm-6 col-sm-6 col-xs-12 kotakartikelhome" style="margin-bottom: 10%;">
		<img  src="{{asset('img/artikel1.jpg') }}" style="width: 360px;height: 195px;">
		<span style="display:inline-block;"> <h4 style="width:360px">	Belajar Bahasa Jerman melalui Goethe Institute</h4>
		</span>
	</div>

	<div class="col-sm-6 col-sm-6 col-xs-12 kotakartikelhome" style="margin-bottom: 10%;">
			<img src="{{asset('img/artikel2.jpg') }}" style="width: 360px;height: 195px;">
			<span style="display: inline-block;"> <h4 style="width:360px">	Jerman targetkan pariwisata pada tahun 2022 meningkat pada kuartal 1</h4>
			</span>
	</div>
	
	<div class="col-sm-6 col-sm-6 col-xs-12 kotakartikelhome column" style="margin-bottom: 10%;float:right;" >
		<img  src="{{asset('img/artikel3.jpg') }}" style="width: 360px;height: 195px;">
		<span style="display:inline-block;"> <h4 style="width:360px">Ketika Pariwisata Di Berlin Meningkat</h4>
		</span>
	</div>

	<div class="col-sm-6 col-sm-6 col-xs-12 kotakartikelhome" style="float:right;" >
			<img src="{{asset('img/artikel4.jpg') }}" style="width: 360px;height: 195px;">
			<span style="display: inline-block;"> <h4 style="width:360px">	Belajar Bahasa Jerman Sekarang bisa melalui Inaklug dengan Instruktornya langsung native speaker.</h4>
			</span>
	</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	</div>
</div>

	<div class="kotakartikelainnya clearfix text-center">
		<h4 style="margin-top: 6%;
  	line-height: 18px;
  	color: #336195;"> 
			Artikel Lainnya
		</h4>	
	</div>
</div>
</div>


</section>

<hr style="float: center;width: 90%;border: 1px solid #EAEAEA; ">

<section style="padding: 6rem 0; margin-top: 10%">
<div class="container">
<div class="row text-center">

<h2 style="color: #4A4A4A;">
	Hubungi Kami
</h2>

<h3 style="color: #4A4A4A;">
	Kantor Pusat
</h3>
<h4>
	Gedung Ir.H. M Suseno- Jl R.P Soeroso No. 6, Menteng, Jakarta Pusat
</h4>
<h4>
	Phone: (+6221) 398 38706 / +62811998167
</h4>

</div>

</div>

</section>
@include('footer') 