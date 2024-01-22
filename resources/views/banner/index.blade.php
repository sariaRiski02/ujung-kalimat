
{{-- Header --}}
{{-- Navbar --}}    
    @include('template.header.index')

    <main class="container"  style="padding-top: 100px">
        <div class="container py-4 mt-3">
          <div class="pb-3 mb-4 border-bottom">
          </div>
      
          <div class="p-5 mb-4 bg-dark rounded-5">
            <div class="container-fluid py-2">
              <h1 class="display-5 fw-bold text-light ">Kamu dan ujung kalimat itu</h1>
              <div class="author mb-2 text-muted">
                <span class="text-white">
                  By:
                </span>
                <a href="/profil" class="text-decoration-none">
                <picture>
                  <img src="/pictures/logo.png" alt="author" class="rounded-circle border" width="30px">
                </picture>
                <span class="text-white">
                  rizkysaria
                </span>
                </a>
              </div>
              <p id="main-text" class="main-text col-md-8 fs-7 text-light">
                Membaca adalah jendela menuju masa lalu, memungkinkan kita memahami dan menghargai perjalanan yang telah dilalui. Menuliskan cerita adalah cara kita memberikan suara kepada kenangan, membiarkannya bersinar di antara jarak waktu. Sebuah panggilan untuk merenung tentang asal-usul dan mengungkapkan pelajaran berharga yang mungkin tersembunyi di masa lalu. Sebab, dalam setiap detik yang kita jalani, terkandung potensi kebijaksanaan yang dapat diteruskan kepada generasi mendatang.
              </p>

              {{-- <div class="reaction mb-3 d-flex gap-2">
                <button type="button" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                  </svg>
                  <span class="pb-1"> 1 </span>
                </button>

                <button type="button" class="btn btn-outline-warning">

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg>
                  <span class="pb-1"> 1 </span>

                </button>

                <button type="button" class="btn btn-outline-primary">

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                  </svg>
                  <span class="pb-1"> 1 </span>

                </button>
              </div> --}}


              <a class="btn btn-outline-light btn-lg" href="#">selengkapnya</a>
            </div>
          </div>
      
          <div class="row align-items-md-stretch">
            <div class="col-md-6">
              <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                <a class="btn btn-outline-light" href="#">selengkapnya</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                <a class="btn btn-outline-secondary" href="#">selengkapnya</a>
              </div>
            </div>
          </div>
      
          
        </div>
      </main>



    @include('template.footer.index');
    
