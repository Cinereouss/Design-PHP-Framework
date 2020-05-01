// Menu Toggle Script In DashBoard
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
})

// Preview upload image
$(document).ready(function() {
    var brand = document.getElementById('logo-id');
    if (brand) {
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function() {
            readURL(this);
        });
    }
});

// Preview multiple upload images
$(document).ready(function() {
    if(document.getElementById('pro-image')){
        document.getElementById('pro-image').addEventListener('change', readImage, false);

        $(document).on('click', '.image-cancel', function() {
            let no = $(this).data('no');
            $(".preview-image.preview-show-"+no).remove();
        });
    }
});

var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;

            var picReader = new FileReader();

            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                    '<div class="image-cancel" data-no="' + num + '">x</div>' +
                    '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                    '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}

// 1.000.000 VND
$(document).ready(function() {
    if ($(".home-price")) {
        $(".home-price").each(function () {
            $(this).text($(this).text().toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
        })
    }
});

// Submit a form (email)
const notifyGenerator = (typeOfNotify, text) => {
    return `<div class="alert ${typeOfNotify} alert-dismissible fade show fixed-top" style="width: 50%; margin: 0 auto" role="alert">
      ${text}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>`;
}

const showCustomizeAlert = (typeOfNotify, text) => {
    $('header').after(notifyGenerator(typeOfNotify, text));
    setTimeout(function(){
            $('.alert').remove()},
        3000);
}

$(document).ready(function() {
    if(window.location.hash === '#submit-success') {
        showCustomizeAlert('alert-success', 'Đăng kí nhận cập nhật email thành công');
        window.location.hash = '';
    } else if (window.location.hash === '#submit-fail') {
        showCustomizeAlert('alert-danger', 'Đăng kí nhận cập nhật email thất bại, thử lại sau');
        window.location.hash = '';
    } else if (window.location.hash === '#update-fail') {
        showCustomizeAlert('alert-danger', 'Đăng kí nhận cập nhật email thất bại, thử lại sau');
        window.location.hash = '';
    } else if (window.location.hash === '#update-cart-success') {
        showCustomizeAlert('alert-success', 'Cập nhật giỏ hàng thành công');
        window.location.hash = '';
    }
});

// Update cart
$(document).ready(function() {
    if ($('#btn-update-cart')){
        $('#btn-update-cart').click(function () {
            if ($("#check-empty-cart-jq").length) {
                showCustomizeAlert('alert-danger', 'Không cập nhật được khi giỏ hàng còn trống');
            } else {
                let secretParams = '';
                $('.table-cart input').each( function () {
                    secretParams = secretParams + $(this).attr('id').split('-')[1] + '*' + $(this).val() + '-';
                })
                window.location.pathname = `/Cart/update/${secretParams}`;
            }
        });
    }
});

// Order now button
$(document).ready(function() {
    if ($('#btn-order-now')){
        $('#btn-order-now').click(function () {
            if ($("#check-empty-cart-jq").length) {
                showCustomizeAlert('alert-danger', 'Không thể đặt hàng khi giỏ hàng đang trống');
            } else {
                window.location.pathname = `/Order/index`;
            }
        });
    }
});