<form action="/my/dashboard/product/update/{{ $data->id }}" method="POST" id="update-product-form"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-5">
            <img id="preview-img" src="/images/{{ $data->image }}" alt="no-image" width="100%" class="mb-4">
            <input class="form-control mt-5" type="file" id="file" accept="image/jpeg, image/jpg, image/png"
                name="image">
            <small class="text-danger fw-italic">Max : 2 MB</small>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $data->price }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label fw-bold">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $data->stock }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label fw-bold">Category</label>
                <select class="form-select" id="category" name="category">
                    <option selected disabled>Choose</option>
                    <option value="Tukang Saluran Air">Tukang Saluran Air</option>
                    <option value="Tukang Beberes Rumah">Tukang Beberes Rumah</option>
                    <option value="Tukang Bangunan">Tukang Bangunan</option>
                    <option value="Tu{kang Pintu">Tukang Pintu</option>
                    <option value="Tukang Kebun">Tukang Kebun</option>
                    <option value="Tukang Listrik">Tukang Listrik</option>
                    <option value="Tukang Plester">Tukang Plester</option>
                    <option value="Tukang Waterproofing">Tukang Waterproofing</option>
                </select>
            </div>
            {{-- <div class="mb-3">
                <label for="size" class="form-label fw-bold">Size</label>
                <input type="text" class="form-control" id="size" name="size"
                    placeholder="example: S, M, L, XL" value="{{ $data->size }}">
            </div> --}}
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-dark">Update Product</button>
    </div>
</form>

@include('script_ajax.admin.dashboard_product_ajax');

<script>
    // File Reader
    function previewImg() {
        const previewImage = document.getElementById("preview-img");
        const fileInput = document.getElementById("file");

        fileInput.addEventListener("change", function() {
            const fileReader = new FileReader();

            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function() {
                previewImage.src = fileReader.result;
            };
        });
    }

    previewImg();
</script>
