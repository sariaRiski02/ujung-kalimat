@include('template.header.index')


<div class="container d-flex flex-column gap-3" style="margin-top: 150px">


<div class="row">
  @foreach ($data as $item)
    <div class="col-md-4 mb-3">
      <div class="card-bg w-100 border d-flex flex-column p-4 rounded-4" style="box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1)">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="h5 font-weight-bold text-dark">{{ $item->name_category }}</h6>
          <a href="/blog?kategori=programming" data-test="button" type="button" class="sc-pFZIQ iZkFPW btn Ripple-parent border-0 px-2 text-white" style="background: rgb(51, 51, 51);">
            Lihat Blog
          </a>
        </div>
      </div>
    </div>
  @endforeach
    
</div>

  

@include('template.footer.index')
