# Thiết kế framword PHP 
Bài tập lớn
Để chạy ứng dụng cần config virtual host thông qua xampp
B1: Chạy file .sql để có CSDL tên nhaccu trong phpMyAdmin
B2: config virtual host bằng cách 
  - Thêm dòng sau vào cuối file C:\Windows\System32\drivers\etc\host
      127.0.0.1 baitaplon.com
      
  - Thêm dòng sau vào cuối file C:\xampp\apache\conf\extra\httpd-vhosts.conf
      <VirtualHost *:80>
         ServerAdmin baitaplon.com
         DocumentRoot "E:/UngDungPhp/htdocs/Btl_LtWeb"
         ServerName baitaplon.com
         ErrorLog "logs/dummy-host2.example.com-error.log"
         CustomLog "logs/dummy-host2.example.com-access.log" common
      </VirtualHost>
B3: Chạy đường dẫn baitaplon.com trên trình duyệt
B4: Để vào phần của admin. Di chuyển đúng theo link sau
    baitaplon.com/admin/
    Với tài khoản: hieuld
    Password: thienduong
