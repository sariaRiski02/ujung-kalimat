@include('template.header.index')



<section class="h-100 mt-5">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center mt-5 mb-2 pt-4" style="width: 100%">
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
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control 
                                @error('email')
                                    is-invalid
                                @enderror " name="email" value="{{ old('email') }}" required autofocus>
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                                
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    {{-- <a href="forgot.html" class="float-end">
                                        Forgot Password?
                                    </a> --}}
                                </div>
                                <input id="password" type="password" class="form-control  
                                @error('password')
                                is-invalid
                                @enderror " name="password" required>
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            </div>

                            
                            
                           <!-- Flexbox container for aligning the toasts -->
                            
                            <div class="d-flex justify-content-center">
                                
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    Masuk
                                </button>
                            </div>
                        </form>

                    

                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            belum punya akun? <a href="/signup" class="text-dark">buat akun</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


<script>

    // Function to show the toast
  
    const toast = document.querySelector('.toast');
    var myToast = new bootstrap.Toast(toast);
    myToast.show();
  

</script>


@include('template.footer.index')