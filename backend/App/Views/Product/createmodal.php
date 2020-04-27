<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">THÔNG TIN SẢN PHẨM</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form action="Product/createProduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-2">

                        <label for="product-name">Tên sản phẩm</label>
                        <input class="form-control" type="text" maxlength="100" name="product-name" value="">

                        <label for="product-id">Mã sản phẩm</label>
                        <input class="form-control" type="email" value="" maxlength="100" name="product-id">

                        <label for="product-price">Giá</label>
                        <input class="form-control" type="text" maxlength="200" name="product-price" value="">

                        <div class="main-img-preview">
                            <img class="thumbnail img-preview" src="/public/image/product-1.jpg" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo" class="form-control" placeholder="Choose File"
                                   disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-secondary fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i>Tải ảnh lên</span>
                                    <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p style="font-weight: bold;">Tải ảnh sản phẩm hiển thị trên trang chủ</p>

                        <label for="product-video">Link video sản phẩm</label>
                        <input class="form-control" type="tel" maxlength="13" name="product-video" value="">

                        <label for="description">Mô tả sản phẩm</label>
                        <textarea class="ckeditor" name="description"></textarea>

                        <label for="product-specs">Thông số kĩ thuật</label>
                        <textarea class="ckeditor" name="product-specs"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnSubmit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>