@include('template.header.index')

<div class="container" style="margin-top: 120px">

    <div class="px-4 pt-5 mt-5 mb-3 pb-3 text-center">

        <h1 class="display-5 fw-bold">Orang-orang di balik tulisan keren disini</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-1">Membacalah untuk tahu apa yang ada dimasa lalu dan <span class="text-bold fw-bold" style="">Menulislah</span> untuk memberitahukan kepada mereka yang ada di masa depan</p>
        </div>
      </div>


    <div class="row d-flex justify-content-center">

        @foreach ($data as $item)
            
        
            
        <div class="col-lg-3 col-sm-6 my-1 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="hover-top-in text-center">
                <div class="overflow-hidden z-index-1 position-relative px-5">
                    <img class="rounded-circle border border-5 border-white shadow" src="https://bootdey.com/img/Content/avatar/avatar4.png" title="" alt="" style="width: 100px">
                </div>
                <div class="mx-2 mx-xl-3 shadow rounded-3 position-relative mt-n4 bg-white p-4 pt-6 mx-4 text-center hover-top--in">
                    <h6 class="fw-700 dark-color mb-1">
                        <a href="/user" class="text-decoration-none">{{ $item->name }}</a>
                    </h6>
                    {{-- <small>Co-Founder</small>
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
                    </div> --}}
                </div>
            </div>
        </div>


        @endforeach
        
        

        
    </div>

    
</div>



@include('template.footer.index')