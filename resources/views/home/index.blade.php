
@include('template.header.index')


<div class="container px-4 px-lg-5" style="padding-top: 100px">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://source.unsplash.com/random/400×400/?poem" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Fatwa Cinta</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-dark" href="#!">Lihat Selengkapnya!</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-dark my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">
                This call to action card is a great place to showcase some important information or display a clever tagline!
            </p>
        </div>
    </div>



    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.
                    </p>
                </div>
                
                <div class="card-footer"><a class="btn btn-dark btn-sm p-2 fs-6" href="#!">selengkapnya</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.
                    </p>
                </div>
                <div class="card-footer"><a class="btn btn-dark btn-sm p-2 fs-6" href="#!">selengkapnya</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer"><a class="btn btn-dark btn-sm p-2 fs-6" href="#!">selengkapnya</a></div>
            </div>
        </div>
    </div>
</div>

{{-- Authors --}}

<section id="team" class="section bg-gray-100">
    <div class="container">
        <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="col-lg-8 col-xl-6">
                <h3 class="h1 bg-primary-after after-50px pb-3 mb-3">Penulis</h3>
                <div class="lead">para penulis keren di balik tulisan-tulisan keren di sini!</div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            
            <div class="col-lg-3 col-sm-6 my-3 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="hover-top-in text-center">
                    <div class="overflow-hidden z-index-1 position-relative px-5">
                        <img class="rounded-circle border border-5 border-white shadow" src="https://bootdey.com/img/Content/avatar/avatar4.png" title="" alt="" style="width: 100px">
                    </div>
                    <div class="mx-2 mx-xl-3 shadow rounded-3 position-relative mt-n4 bg-white p-4 pt-6 mx-4 text-center hover-top--in">
                        <h6 class="fw-700 dark-color mb-1">
                            <a href="#" class="text-decoration-none">Riski saria</a>
                        </h6>
                        <small>Co-Founder</small>
                        <div class="pt-2">
                            <a class="icon-sm bg-primary rounded-circle me-1 text-white" href="#">
                            <i class="bi bi-facebook"></i>
                            </a> 
                            <a class="icon-sm bg-primary rounded-circle me-1 text-white" href="#">
                                <i class="bi bi-twitter"></i>
                            </a> 
                            <a class="icon-sm bg-primary rounded-circle me-1 text-white"
                                href="#"><i class="bi bi-linkedin"></i>
                            </a>
                            <a class="icon-sm bg-primary rounded-circle me-1 text-white" href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
            
            

            
        </div>
        
    </div>

    <span class="d-flex justify-content-center">
        <a href="/penulis" class="text-decoration-none">Lihat semua penulis</a>
    </span>
</section>


@include('template.footer.index')

