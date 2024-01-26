@include('template.header.index')


<section class="h-100 mt-5 pb-4 ">
    <div class="container h-100 ">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center mt-5 mb-2">
                    <img src="/pictures/logo.png" alt="logo" width="100">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                        <form method="POST" action="/signup" class="needs-validation" >
                            
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Name is required	
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <p class="form-text text-warning mb-3">
                                
                                **Dengan mendaftar anda menyetujui syarat dan ketentuan kami
                            </p>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Daftar	
                                </button>
                            </div>
                            @isset($error)
                            <div class="text-center text-danger">
                                {{ $error }}
                            </div>
                            @endisset
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Sudah punya akun? <a href="/signin" class="text-dark">Masuk</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>



@include('template.footer.index')