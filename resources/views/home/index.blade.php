@extends('home.layout.masterhome')

@section('content')

<!-- Start Jumbotron -->
<section class="top-header">
    <div class="jumbotron jumbotron-fluid">
        <div class="container-full-bg justify-content-center mx-auto text-white">
            <h1 class="display-4" data-aos="fade-down" data-aos-duration="1700" data-aos-delay="300">
                Culture
            </h1>
            <p class="lead" data-aos="fade-left" data-aos-duration="2200" data-aos-delay="700" data-aos-offset="0">
                Mari kita jelajahi kebudayaan dan cagar budaya di nusantara disini
            </p>
        </div>
        <div class="arrow bounce mx-auto">
            <p class="text-white">Lihat Selengkapnya</p>
            <div id="info"></div>
            <a href="#info">
                <i class="fa fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>
<!-- End Jumbotron -->

<!-- Start Info Web -->
<section id="web-info" class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('assets/img/user/ma.jpg')}}" class="img-fluid" alt="" srcset="" />
                <img src="{{asset('assets/img/user/da.jpg')}}" class="img-fluid" alt="" srcset="" />
                <img src="{{asset('assets/img/user/au.jpg')}}" class="img-fluid" alt="" srcset="" />
            </div>
            <div class="col-md-4 my-auto">
                <h4>Apa yang harus di jelajahi di Indonesia ?</h4>
                <p class="text-justify">
                    Disini kita bisa mengetahui Cagar Budaya di Nusantara agar kalian dapat menyadari bahwa ada dan
                    masih banyak tempat Cagar Budaya di Nusantara ini.
                </p>
                <p class="text-justify mb-0">Jadi, ayo kita jelajahi disini</p>
                <a href="{{route('kategori.index')}}" class="mt-2 pull-right text-decoration-none hyper">
                    <small>
                        <i class="fa fa-arrow-right"></i> Lihat Selengkapnya
                    </small>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Info Web -->

<!-- Start Info Media -->
<section id="media-info" class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('assets/img/user/mandau.jpg')}}" class="img-fluid" alt="" srcset="" />
            </div>
            <div class="col-md-4 my-auto">
                <h4>Apa yang harus di jelajahi di Indonesia ?</h4>
                <p class="text-justify">
                    Disini kita bisa mengetahui Cagar Budaya di Nusantara agar kalian dapat menyadari bahwa ada dan
                    masih banyak tempat Cagar Budaya di Nusantara ini.
                </p>
                <p class="text-justify mb-0">Jadi, ayo kita jelajahi disini</p>
                <a href="{{route('kategori.index')}}" class="mt-2 pull-right text-decoration-none hyper">
                    <small>
                        <i class="fa fa-arrow-right"></i> Lihat Selengkapnya
                    </small>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Info Media -->

<!-- Start Description -->
<section class="description">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-auto">
                <h4>Apa itu Cagar Budaya ?</h4>
                <p class="text-justify mt-3">
                    Dalam <b>UU No 11 Tahun 2010</b>, dijelaskan bahwa
                    <b>Cagar budaya</b> adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan
                    Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan atau
                    di air.
                </p>
            </div>
            <div class="col-md-7">
                <img src="{{asset('assets/img/user/gnpadang.jpg')}}" alt="" srcset="" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<!-- End Description -->

<<<<<<< HEAD
<!-- Testimonial -->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-testimonial text-center">
                    <img src="{{asset('assets/img/user/Wahab-Tahir.jpg')}}" width="120" height="120"
                        class="rounded-circle mx-auto d-block img-fluid" alt="Bpk Abdul Tahir">
                    <h6 class="mt-2 mb-0">
                        <b>
                            Bpk Abdul Wahab Tahir
                        </b>
                    </h6>
                    <small class="description-image mt-0">
                        Anggota DPRD Makassar Periode 2009-2019
                    </small>
                    <blockquote class="blockquote text-right mt-2 font-italic">
                        <p class="mb-0 text-justify">
                            "Cagar budaya harus dijaga dan dilestarikan agar tidak terlupakan oleh perkembangan zaman.
                            Ada 105 bangunan tua peninggalan sejarah yang sudah di inventarisasi. Makanya, dibuat perda
                            untuk menjaganya .Saya menaruh harapan besar agar dapat secepatnya dibuatkan
                            naskah akademik dan disahkan menjadi perda sehingga cagar budaya masih terjaga hingga anak
                            cucu kita di masa mendatang."
                        </p>
                        <footer class="blockquote-footer font-weight-normal">
                            13/07/2012, 10:45 WIB
                            <cite title="Source Title">Kompas.com</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial -->

<!-- Preview -->
<section class="preview">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h4>Cagar Budaya Indonesia</h4>
                <p class="text-justify mb-0">
                    Untuk itu, sudah seharusnya kita sebagai warga negara Indonesia menjaga dan melestarikan Kebudayaan
                    dan Cagar Budaya yang ada di Nusantara ini agar tidak punah.
                </p>
                <a href="{{route('map.index')}}" class="mt-0 text-decoration-none pull-right hyper">
                    <small>
                        <i class="fa fa-arrow-right"></i> Lihat Selengkapnya
                    </small>
                </a>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G7ePJRF2W38"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Preview -->
=======
   <!-- Testimonial -->
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73

@endsection