<script src="/backend/Public/ckeditor/ckeditor.js"></script>
<div class="modal fade modal-md" id="empModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div id="modal-content" class="modal-header"
                 style="background-image: linear-gradient(to right, #121427 20%, #4a144f) !important; color: white; font-size: 180%">
                Thêm banner website
            </div>
            <form action="Slide/create" method="POST" enctype="multipart/form-data" id="form-Slide">
                <div class="modal-body">
                    <div class="form-group form-md-line-input has-error">
                        <input type="text" class="form-control" id="link" name="mota"
                               placeholder="Mô tả cho banner">
                        <label for="giasp">Mô tả banner</label>
                    </div>
                    <label>Active <sup style="color: red">(*)</sup></label>
                    <div class="md-checkbox">
                        <input type="checkbox" id="checkbox1" name="hienthi" class="md-check">
                        <label for="checkbox1">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span>
                            Hiển thị </label>
                    </div>
                    <div class="form-group form-md-line-input has-error" style="margin-top: 10px">
                        <input type="file" class="form-control" id="link" name="img"
                               placeholder="Input Banner" accept="image/*" required>
                        <label for="giasp">File <sup style="color: red">(*)</sup></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left">Close
                    </button>
                    <button id="submit" type="submit" class="btn btn-primary" name="btnSubmit" value="true">Save
                        changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
