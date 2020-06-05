<script src="/backend/Public/ckeditor/ckeditor.js"></script>
<div class="modal fade modal-full" id="empModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div id="modal-content" class="modal-header"
                 style="background-image: linear-gradient(to right, #121427 20%, #4a144f) !important; color: white; font-size: 180%">
            </div>
            <form action="Product/create" method="POST" enctype="multipart/form-data" id="form-Product">
                <div class="modal-body">
                    <div class="col-md-6" style="border-right: 2px solid #121427 ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="masp" name="masp"
                                           placeholder="Nhập mã sản phẩm"
                                           required>
                                    <label for="masp">Mã sản phẩm <sup style="color: red">(*)</sup></label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group form-md-line-input has-success">
                                    <input type="text" class="form-control" id="ten" name="ten"
                                           placeholder="Nhập tên sản phẩm"
                                           required>
                                    <label for="ten">Tên sản phẩm <sup style="color: red">(*)</sup></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-error">
                                    <input type="number" class="form-control" id="giasp" name="giasp" step="10000"
                                           placeholder="Nhập giá sản phẩm"
                                           required>
                                    <label for="giasp">Mức giá <sup style="color: red">(*)</sup></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-info">
                                    <select class="form-control" id="loaidan" name="loai" required>
                                        <option value="">--Chọn loại đàn--</option>
                                    </select>
                                    <label for="loaidan">Loại đàn <sup style="color: red">(*)</sup></label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-info">
                                    <select class="form-control" id="thuonghieu" name="thuonghieu" required>
                                        <option value="">--Chọn hãng sản xuất--</option>
                                    </select>
                                    <label for="loaidan">Hãng sản xuất <sup style="color: red">(*)</sup></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-8">
                                <div class="form-group form-md-line-input has-error">
                                    <input type="url" class="form-control" id="link" name="link"
                                           placeholder="Link video reviewer sản phẩm">
                                    <label for="giasp">Link video</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Active <sup style="color: red">(*)</sup></label>
                                <div class="md-checkbox" style="margin-top: 5px">
                                    <input type="checkbox" id="checkbox1" name="hienthi" class="md-check">
                                    <label for="checkbox1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Hiển thị </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="ck-mota" style="">Mô tả sản phẩm</label>
                            <textarea id="ck-mota" class="ckeditor"  name="mota"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="ck-tomtat" style="">Nội dung tóm tắt sản phẩm</label>
                            <textarea id="ck-tomtat" class="ckeditor" name="tomtat"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ck-thongso" style="">Thông số sản phẩm</label>
                            <textarea id="ck-thongso" class="ckeditor" name="thongso"></textarea>
                        </div>
                        <div>
                            <label style="">Thêm hình ảnh cho sản phẩm</label>
                            <em> <br/> Chon tối đa 4 ảnh cho mỗi sản phẩm.</em>
                            <table id="table-pre" role="presentation" class="table table-striped table-hover"
                                   style="margin-top: 20px;text-align: center;height: 100%">
                                <thead style="background-image: linear-gradient(to right, #121427 20%, #4a144f); color: white">
                                <tr>
                                    <td style="width: 25%">Reviewer</td>
                                    <td style="width: 30%">File name</td>
                                    <td style="width: 20%">Size of image</td>
                                    <td style="width: 25%">Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 1; $i < 5; $i++) : ?>
                                    <tr style="height: 63px;">
                                        <td style=" vertical-align: middle"><span id="preview-<?= $i ?>"></span></td>
                                        <td style=" vertical-align: middle"><p
                                                    id="name-<?= $i ?>"><?php if ($i == 1) echo "<span id = 'avt-product'><i><b>Đây sẽ là hình đại diện cho sản phẩm</b></i></span>" ?></p>
                                        </td>
                                        <td style=" vertical-align: middle"><p id="size-<?= $i ?>""></p></td>
                                        <td style=" vertical-align: middle">
                                            <button type="button" id="upload-<?= $i ?>"
                                                    class="btn green btn-action btn-uploadFiles" value="<?= $i ?>"><i
                                                        class="fa fa-upload"></i><span> Upload</span></button>
                                            <button type="button" id="cancel-<?= $i ?>"
                                                    class="btn btn-action red hidden btn-cencalFiles" value="0"><i
                                                        class="fa fa-ban"></i><span> Delete</span></button>
                                            <input type="file" id="fileup-<?= $i ?>" name="img-<?= $i ?>"
                                                   class="hidden inp-Files">
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left">Close
                    </button>
                    <button id="submit" type="submit" class="btn btn-primary" name="btnSubmit" value="true">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
