# radixup
Radix project update (OOP): PHP, MySql, Jquery (Ajax)

# Jquery & JS
    - $().click(function(){})
    - $().show()
    - $().hide()
    - $().next(): lấy element liền sau

    - $().val().trim('').length
    - elJS..value.trim().length

    - window.location = 'home.php' => chuyển hướng page trong JS.

    - 
# PHP
    - Function:
        - stripslashes(str) : loại bỏ dấu \ trong string
        - htmlspecialchars(str): (nhiều tác dụng (đọc thêm)) convert html thành string.
        - session_start(): Bỏ trên đầu page, Dùng khi page này có sử dụng session (create & get).
        - Chức năng lưu lại trạng thái đăng nhập (lưu lại email và passowrd trên input) thì dùng cookie (lưu và xóa ở phía dưới) (Đoạn sau có nghĩa: 
            + Nếu checkbox remmember được checked thì lưu lại trạng thái đăng nhập trong vòng 30 ngày (Sử dụng / cho biết cookie có hiệu lực ở cấp độ domain - mọi URL thuộc domain)).
                + Để lưu lại val cũ trong input thì check cookie có tồn tại không , rồi echo trong value của input
            + Nếu checbox remmember không checked thì xóa cookie (time() - 60 là thời gian đã hết hạn, có thể đặt tùy ý miễn là hết hạn)
                - if (!empty($_POST['rem'])) {
                    setcookie('email', $email, time() + (30*24*60*60), '/');
                    setcookie('password', $password, time() + (30*24*60*60), '/');
                } else {
                    setcookie('email', '', time() - 60, '/');
                    setcookie('password', '', time() - 60, '/');
                }
        - 
    - TIP
        - 

