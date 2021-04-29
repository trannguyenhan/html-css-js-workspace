# Với các project : 
- Các bạn phải import database vào mysql sau đó thay đổi file cấu hình trong thư mục config phù hợp với cấu hình trên máy bạn. 

# Với prject mvc : 
- Vào như bình thường, project sẽ tự chuyển hướng tới file index.php

# Với project todo-list : 
- Truy cập vào đường dẫn `localhost/[path_project]/todo-list/items/viewall` <br />
Trong đó [path_project] là đường dẫn tới thư mục đặt project `todo-list`, ví dụ mình để project này trong thư mục `html-css-js-workspace/lab4` thì [path_project] chính là cái này.

# Với project e-commerce : 
- Truy cập vào đường dẫn `localhost/[path_project]/e-commerce/categories`

# Note : 
- Với 2 project `todo-list` và `e-commerce` nhiều bạn sẽ gặp vấn đề về máy chủ apache2 không thể đọc file `.htacess` nên không thể chuyển hướng tên miền về file `index.php` thì có thể xem lại file config của apache2 và để `AllowOverride All` thay cho `AllowOverride Node`. Nếu chưa được thì hãy thử khởi động lại mod_rewrite.
- Nêu có bất cứ thư mục nào bị từ chối truy cập, hãy phân lại quyền truy cập thư mục của thư mục đó cho user

Ấn vào ảnh dưới để xem demo : <br />

[![Watch the video](https://i.pinimg.com/564x/f2/b2/15/f2b2150c459544a6589c36ae7fcef9c6.jpg)](https://youtu.be/hI-_C--20iM)
