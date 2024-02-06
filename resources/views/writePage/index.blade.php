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



<form action="/content" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
    @csrf
        <div class="row mb-2">
            <div class="input-group col-md">
                <select class="form-select" id="inputGroupSelect02" name="category">
                    <option selected>Pilih kategori</option>
                    <option value="Programming">Programming</option>
                    <option value="Poem">Puisi</option>
                    <option value="fiction">Fiksi</option>
                </select>
            </div>
        
            <div class="col-md-3 text-center bg-gray" style="width: 100%;">
                Atau
            </div>
        
            <div class="col-md ">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="buat kategori anda" name="make_category">
            </div>
        </div>
    
    
        <div class="mb-3">
          
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Blog" name="title">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Masukan gambar</label>
          <input class="form-control" type="file" id="formFile" accept="image/*" name="image">
        </div>
    
    <textarea name="content">
        
    </textarea>
    <button type="submit" class="btn btn-success">Post</button>
</form>
</div>

<script>
  const kategori = document.getElementById('inputGroupSelect02');
  const buat_kategori = document.getElementById('exampleFormControlInput1');

  kategori.addEventListener('change', function() {
    buat_kategori.readOnly = kategori.value !== "Pilih kategori";
  });

  buat_kategori.addEventListener('change', function() {
      kategori.disabled = !!buat_kategori.value;
  });

</script>


@include('template.footer.index')