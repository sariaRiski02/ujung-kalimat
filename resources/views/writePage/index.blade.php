@include('template.header.index')

<script src="https://cdn.tiny.cloud/1/lwbau5hqaqhcboxbyvxcj4nns34vi7qv4yggkzt4l76dhxkb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
          tinymce.init({
            selector: 'textarea',
            menubar: '',
    
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
              { value: 'First.Name', title: 'First Name' },
              { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
          });
        </script>
<div class="container" style="padding-top: 130px">



<form action="" method="POST" class="d-flex flex-column gap-2">
    
        <div class="row mb-2">
            <div class="input-group col-md">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Pilih kategori</option>
                    <option value="Programming">One</option>
                    <option value="Poem">Two</option>
                    <option value="fiction">Three</option>
                </select>
            </div>
        
            <div class="col-md text-center">
                Atau
            </div>
        
            <div class="col-md ">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="buat kategori">
            </div>
        </div>
    
    
    
    
    <textarea name="content">
        
    </textarea>
    <button type="submit" class="btn btn-success">Post</button>
</form>
</div>




@include('template.footer.index')