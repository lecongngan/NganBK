<?php
require_once 'function1.php';
    $cv=tinhchuvihinhtron(1);
   echo "chu vi: " ,$cv;
?>
//sự giống nhau là đều là hàm dùng để nạp file vào 1 file khác
sự khác nhau:
-include thì quá trình chạy lỗi chương trình vẫn chạy tiếp
-includeone thì giống trên nhưng chỉ nạp 1 lần ngay cả khi gọi nhiều lần
-require thì chạy lỗi thì chương trình sẽ dừng
-requireone tt trên nhưng sẽ nạp 1 lần ngay cả khi gọi nhiều lần
