<div class="modal fade modal-full" id="empModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">

            </div>

            <form action="Product/createOrEdit" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-6" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product-id" style="">Mã sản phẩm</label>
                                        <input class="form-control" type="" value="" maxlength="100"
                                               name="product-id">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="product-id" style="">Tên sản phẩm</label>
                                        <input class="form-control" type="" value="" maxlength="100"
                                               name="product-id">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product-id" style="">Mức giả sản phẩm</label>
                                        <input class="form-control" type="number" value="" maxlength="100"
                                               name="product-id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product-id" style="">Loại đàn</label>
                                        <input class="form-control" type="" value="" maxlength="100" name="product-id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product-id" style="">Hãng sản xuất</label>
                                        <input class="form-control" type="" value="" maxlength="100"
                                               name="product-id">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="product-id" style="">Video review sản phẩm</label>
                                        <input class="form-control" type="url" maxlength="100" name="product-id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="padding-top: 30px">
                                        <label for="product-id" style="">ACTIVE</label>
                                        <input type="checkbox" value="" maxlength="100" name="product-id">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="col-md-6" style="border-left: 2px solid #121427 " >
                            <div class="form-group">
                                <label for="ck-thongso" style="">Thông số sản phẩm</label>
                                <textarea id="ck-thongso" class="ckeditor" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ck-mota" style="">Mô tả sản phẩm</label>
                                <textarea id="ck-mota" class="ckeditor" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ck-tomtat" style="">Nội dung tóm tắt sản phẩm</label>
                                <textarea id="ck-tomtat" class="ckeditor" name="description"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSubmit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
