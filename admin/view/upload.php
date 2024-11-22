<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

</div>


<div style="margin-bottom:500px;margin-top:350px;" class="row d-flex justify-content-center">
    <div style="width:40%" class="col-sm-8">
        <form action="index.php?act=upload" method="POST" enctype="multipart/form-data">
            <label for="file" class="form-label">Chọn ảnh để upload:</label>
            <input type="file" class="form-control" name="file" id="file" required><br>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</div>