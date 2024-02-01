@include('template.header.index')

<div class="container" style="padding-top: 130px">

    
    <textarea id="default">Hello, World!</textarea>
</div>

<script>

    tinymce.init({
        selector: 'textarea#default'
      });
</script>



@include('template.footer.index')