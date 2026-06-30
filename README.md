# Ngu Long Bakery 🍰

Website bán bánh truyền thống Việt Nam - Ngu Long Bakery

## 📖 Giới Thiệu

**Ngu Long Bakery** là một ứng dụng web thương mại điện tử hiện đại được xây dựng bằng PHP và các công nghệ web frontend, chuyên cung cấp các sản phẩm bánh truyền thống Việt Nam. Dự án sử dụng mô hình Model-View-Controller (MVC) để đảm bảo tính bảo trì cao và dễ mở rộng.

## ✨ Tính Năng Chính

### Cho Khách Hàng
- 🛍️ **Xem & Tìm Kiếm Sản Phẩm**: Duyệt danh sách bánh, tìm kiếm theo từ khóa
- 🛒 **Giỏ Hàng**: Thêm, cập nhật, xóa sản phẩm khỏi giỏ hàng
- 👤 **Quản Lý Tài Khoản**: Đăng ký, đăng nhập, quên mật khẩu, cập nhật thông tin cá nhân
- 💳 **Thanh Toán**: Quy trình thanh toán an toàn với tính năng áp dụng mã giảm giá
- 🌍 **Chọn Địa Chỉ**: Hỗ trợ lựa chọn tỉnh, huyện, phường/xã (Việt Nam)
- 🔎 **Xem Chi Tiết Sản Phẩm**: Thông tin chi tiết về sản phẩm, giá cả, ảnh, đánh giá
- ⭐ **Đánh Giá & Bình Luận**: Bình luận và đánh giá sản phẩm
- ❤️ **Sản Phẩm Yêu Thích**: Lưu sản phẩm yêu thích
- 📦 **Quản Lý Đơn Hàng**: Xem lịch sử đơn hàng, hủy đơn hàng, mua lại
- 📰 **Tin Tức & Bài Viết**: Đọc tin tức mới nhất về sản phẩm và khuyến mãi

### Cho Admin
- 🎯 **Quản Lý Sản Phẩm**: CRUD sản phẩm, quản lý kho
- 📂 **Quản Lý Danh Mục**: Tạo, sửa, xóa danh mục sản phẩm
- 📧 **Quản Lý Email**: Gửi email quảng cáo, khôi phục mật khẩu
- 🛍️ **Quản Lý Đơn Hàng**: Xem và xác nhận đơn hàng
- 👥 **Quản Lý Người Dùng**: Quản lý tài khoản khách hàng, khóa người dùng
- 📰 **Quản Lý Bài Viết**: Tạo, sửa, xóa bài viết và tin tức
- 🎟️ **Quản Lý Voucher**: Tạo và quản lý mã giảm giá
- 🖼️ **Quản Lý Banner**: Quản lý hình ảnh quảng cáo trên trang chủ
- 📊 **Bảng Điều Khiển**: Giao diện quản trị trực quan

## 🛠️ Công Nghệ Sử Dụng

### Backend
- **PHP** (15.5%) - Ngôn ngữ lập trình chính
- **MySQL** - Cơ sở dữ liệu

### Frontend
- **HTML** (31.2%) - Cấu trúc trang web
- **CSS** (13%) - Styling cơ bản
- **SCSS** (16.9%) - Preprocessing CSS
- **Less** (8.5%) - Styling nâng cao
- **JavaScript** (14.2%) - Tương tác động

### Công Cụ & Thư Viện
- **Composer** - Quản lý dependencies PHP
- **PHPMailer** (^6.9) - Gửi email
- **CKEditor 5** - Soạn thảo nội dung cho admin
- **CKFinder** - Quản lý file media

## 📁 Cấu Trúc Dự Án

```
ngulongbakery/
├── app/                          # Thư mục chính của ứng dụng
│   ├── controller/              # Controllers - Xử lý logic
│   │   ├── HomeController.php
│   │   ├── ProductController.php
│   │   ├── UserController.php
│   │   ├── CartController.php
│   │   ├── PaymentController.php
│   │   ├── OrderController.php
│   │   ├── ReviewController.php
│   │   ├── NewsController.php
│   │   ├── ContactController.php
│   │   ├── MailController.php
│   │   ├── AboutController.php
│   │   └── admin/               # Admin controllers
│   │       ├── AdProductsController.php
│   │       ├── AdCategoriesController.php
│   │       ├── AdOrderController.php
│   │       ├── AdUserController.php
│   │       ├── AdVoucherController.php
│   │       ├── AdPost_ManageController.php
│   │       ├── AdBannerController.php
│   │       └── ...
│   │
│   ├── model/                   # Models - Quản lý dữ liệu
│   │   ├── database.php
│   │   ├── CategoryModel.php
│   │   ├── ProductModel.php
│   │   ├── UserModel.php
│   │   ├── OrderModel.php
│   │   ├── ReviewModel.php
│   │   ├── FavoriteProductsModel.php
│   │   ├── LocationModel.php
│   │   ├── DiscountModel.php
│   │   ├── NewsModel.php
│   │   ├── CommentsModel.php
│   │   └── BannerModel.php
│   │
│   └── view/                    # Views - Giao diện
│       ├── Header.php
│       ├── Footer.php
│       └── [các file view khác]
│
├── public/                       # Thư mục chứa tài nguyên tĩnh
│   ├── css/                     # Các file CSS
│   │   └── *.css (SCSS, LESS compiled)
│   ├── js/                      # Các file JavaScript
│   │   └── *.js
│   ├── html/                    # HTML templates
│   ├── fonts/                   # Fonts custom
│   └── upload/                  # Thư mục upload hình ảnh
│
├── admin/                        # Giao diện quản trị
│   ├── index.php
│   ├── app/
│   │   ├── controller/
│   │   └── view/
│   └── ...
│
├── ckeditor5/                    # Editor cho soạn thảo nội dung
├── ckfinder/                     # File manager cho admin
├── vendor/                       # Dependencies từ Composer
├── index.php                     # Entry point chính
├── composer.json                 # Quản lý dependencies
├── composer.lock                 # Lock file
├── .htaccess                     # Apache rewrite rules
├── .gitignore                    # Git ignore rules
├── ngulongbakery.sql             # Database dump/schema
└── README.md                     # File này
```

## 🚀 Cài Đặt & Sử Dụng

### Yêu Cầu
- PHP 7.4 hoặc cao hơn
- MySQL 5.7 hoặc cao hơn
- Web Server (Apache với mod_rewrite)
- Composer

### Các Bước Cài Đặt

1. **Clone Repository**
   ```bash
   git clone https://github.com/PhanGB/ngulongbakery.git
   cd ngulongbakery
   ```

2. **Cài Đặt Dependencies**
   ```bash
   composer install
   ```

3. **Tạo Cơ Sở Dữ Liệu**
   ```bash
   # Import file SQL
   mysql -u root -p < ngulongbakery.sql
   ```

4. **Cấu Hình Cơ Sở Dữ Liệu**
   - Mở file `app/model/database.php`
   - Cập nhật thông tin kết nối:
     - Host: `localhost`
     - Username: `root`
     - Password: `[password của bạn]`
     - Database: `ngulongbakery`

5. **Cấu Hình URL Cơ Bản**
   - Mở file `index.php`
   - Cập nhật `$base_url` theo môi trường của bạn:
     ```php
     $base_url = 'http://localhost/ngulongbakery'; // Local
     // hoặc
     $base_url = 'https://yourdomain.com'; // Production
     ```

6. **Cấu Hình Apache (Optional)**
   - Đảm bảo `.htaccess` được kích hoạt
   - Bật `mod_rewrite`:
     ```bash
     sudo a2enmod rewrite
     sudo systemctl restart apache2
     ```

7. **Truy Cập Ứng Dụng**
   - Website: `http://localhost/ngulongbakery`
   - Admin: `http://localhost/ngulongbakery/admin`

### Tài Khoản Mặc Định (Admin)
- **Email**: `admin@ngulongbakery.com`
- **Password**: `admin123` (hoặc kiểm tra database)

## 📋 Quy Trình Sử Dụng

### Cho Khách Hàng
1. Đăng ký tài khoản hoặc đăng nhập
2. Duyệt danh sách sản phẩm hoặc tìm kiếm
3. Thêm sản phẩm vào giỏ hàng
4. Xem giỏ hàng và cập nhật số lượng
5. Tiến hành thanh toán
6. Nhập thông tin giao hàng
7. Chọn phương thức thanh toán
8. Hoàn thành đơn hàng

### Cho Admin
1. Đăng nhập vào trang admin
2. Quản lý sản phẩm, danh mục, voucher
3. Xem và xác nhận đơn hàng
4. Quản lý người dùng
5. Tạo bài viết và banner quảng cáo
6. Gửi email thông báo cho khách hàng

## 🔐 Bảo Mật

- ✅ Xác thực người dùng với session
- ✅ Kiểm tra quyền truy cập admin
- ✅ Hash mật khẩu (PHP password functions)
- ✅ Email verification cho đăng ký
- ✅ Xác thực mã giảm giá

## 📚 Tệp Cơ Sở Dữ Liệu

Dự án bao gồm file `ngulongbakery.sql` chứa schema cơ sở dữ liệu đầy đủ bao gồm:
- Bảng `users` - Quản lý người dùng
- Bảng `products` - Quản lý sản phẩm
- Bảng `categories` - Danh mục sản phẩm
- Bảng `orders` - Quản lý đơn hàng
- Bảng `order_items` - Chi tiết đơn hàng
- Bảng `reviews` - Đánh giá sản phẩm
- Bảng `discount_codes` - Mã giảm giá
- Bảng `news` - Bài viết tin tức
- Bảng `comments` - Bình luận
- Bảng `banners` - Quảng cáo banner
- Và các bảng khác...

## 📧 Email Configuration

Dự án sử dụng **PHPMailer** để gửi email. Cấu hình trong file controller:
```php
// Ví dụ: app/controller/MailController.php
$mail = new PHPMailer(true);
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-app-password';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
```

## 🤝 Đóng Góp

Chúng tôi chào đón các đóng góp từ cộng đồng! 

1. Fork repository này
2. Tạo branch cho feature của bạn (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Mở Pull Request

## 📝 License

Dự án này có thể có giấy phép riêng - vui lòng kiểm tra tệp LICENSE trong repository.

## 👨‍💻 Tác Giả

- **Phan Quốc Dương** - Repository gốc: [phanquocduong/ngulongbakery](https://github.com/phanquocduong/ngulongbakery)
- **PhanGB** - Fork và phát triển: [PhanGB/ngulongbakery](https://github.com/PhanGB/ngulongbakery)

## 📞 Liên Hệ & Hỗ Trợ

- 📧 Email: contact@ngulongbakery.com (hoặc kiểm tra repository)
- 🐛 Báo lỗi: [Issues](https://github.com/PhanGB/ngulongbakery/issues)
- 💬 Thảo luận: Sử dụng GitHub Issues để đặt câu hỏi

## 📋 Roadmap

- [ ] Tối ưu hóa hiệu suất trang
- [ ] Tích hợp thanh toán online (VNPay, Momo)
- [ ] Hỗ trợ đa ngôn ngữ
- [ ] Mobile app responsive design
- [ ] Dashboard analytics cho admin
- [ ] Tích hợp inventory management
- [ ] Hệ thống notification real-time

## 🙏 Cảm Ơn

- Cảm ơn CKEditor và CKFinder vì các công cụ hữu ích
- Cảm ơn PHPMailer cho giải pháp gửi email
- Cảm ơn tất cả các contributors đã giúp cải thiện dự án

---

**Cập nhật lần cuối**: Tháng 6 năm 2026
**Trạng thái**: Đang phát triển ✨
