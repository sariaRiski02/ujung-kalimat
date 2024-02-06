@include('template.header.index')


<section class="h-100 mt-5 pb-4 " style="padding-top: 100px">
    <div class="container h-100 ">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9"> 
                <div class="text-center mt-5 mb-2 pt-2" style="width: 100%">
                    @error('error')
                        
                    
                    <div class="toast align-items-center bg-danger" style="width: 100%" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                          <div class="toast-body text-white">
                            {{ $message }}
                          </div>
                          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>

                    @enderror
                </div>   
                <div class="card shadow-lg">
                    
                    <div class="card-body p-5">
                        <div class="d-flex gap-1 align-items-center ">
                            <div class="">
                                <h1 class="fs-4 card-title fw-bold align-items-center">Register</h1>
                            </div>
                        </div>
                        
                        
                        <form method="POST" action="/signup" class="needs-validation" >
                            
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Name</label>
                                <input id="name" type="text" class="form-control 
                                @error('name')
                                    is-invalid
                                @enderror
                                " name="name" value="{{ old('name') }}" autofocus>
                               
                                    
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            


                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control @error('email')
                                    is-invalid
                                @enderror " name="email" value="{{ old('email') }}" >
                                @error('email')
                                    
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input id="password" type="password" class="form-control 
                                @error('password')
                                    is-invalid
                                @enderror " name="password">
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            </div>
                            @error('info')
                            <div class="text-center text-red">
                                {{ $errors->first('info') }}
                            </div>
    
                            @enderror

                            <p class="form-text text-warning mb-3">
                                
                                **Dengan mendaftar anda menyetujui syarat dan ketentuan kami
                            </p>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Daftar	
                                </button>
                            </div>
                           
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