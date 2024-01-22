@include('template.header.index')


<div class="conatainer mt-5 pt-4">

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profil</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text" class="form-control" value="" placeholder="Nama Lengkap"></div>
                    </div>
                    <div class="row mt-3 gap-2">
                        <div class="col-md-12">
                            <label class="labels">Nama Pena</label>
                            <input type="text" class="form-control" placeholder="Nama Pena" value="">
                        </div>
                                            
                        <div class="col-md-12">
                            <label class="labels">Instagram</label>
                            <input type="text" class="form-control" placeholder="Instagram" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Facebook</label>
                            <input type="text" class="form-control" placeholder="Facebook" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">linkedin</label>
                            <input type="text" class="form-control" placeholder="linkedin" value="">
                        </div>                          
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control" placeholder="Email" value="">
                        </div>                          
                    </div>
                    <div class="row mt-3">
                        <div class="form-outline">
                            <label class="form-label" for="textAreaExample">Deskripsi tentang kamu</label>
                            <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                          </div> 
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 pt-5">
                    <br>
                    <br>
                    <div class="col-md-12">
                        <label class="labels">Hobi</label>
                        <input type="text" class="form-control" placeholder="Hobi" value="">
                    </div> 
                    <br>
                    <div class="col-md-12">
                        <div class="form-outline">
                            <label class="form-label" for="textAreaExample">Deskripsi hobi</label>
                            <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                          </div> 
                    </div>
                </div>
            </div>
            <div class="mt-1 text-center">
                <button class="btn btn-primary profile-button" type="button">Simpan Deskripsi</button>
            </div>
            
        </div>
    </div>
    </div>
    </div>



</div>

@include('template.footer.index')