<main>
    <div class="contact_main-box">
        <div class="row">
            <div class="contact_main-box-img col l-6 c-12 m-6">
                <form action="<?=$base_url?>/handle-contact" method="post">
                    <div
                        class="contact_main-box-in-input"
                        style="
                            border-image-source: url(https://t4.ftcdn.net/jpg/08/44/76/91/360_F_844769159_YK4xuiJGP0fmBumMpXVUEk9I2LDEhAEX.jpghttps://as1.ftcdn.net/v2/jpg/06/44/71/32/1000_F_644713254_L42ARbrHjlRKNHnG3ryhwu1G2eZS12g0.jpg);
                        ">
                        <h1 style="color: var(--secondary-color)">LIÊN HỆ</h1>
                        <input
                            type="email"
                            name="email"
                            rules="required|email"
                            required
                            id="usermail"
                            placeholder="Nhập email" />
                        <input type="name" name="name" required id="" placeholder="Nhập tên" />
                        <select name="select-fix" id="" class="contact_main-box-in-input-select" style="margin:10px 0; padding:10px 0; width:90%; ">
                            <option value="Hỗ trợ khách hàng">Hỗ trợ khách hàng</option>
                            <option value="Báo lỗi hệ thống">Báo lỗi hệ thống</option>
                            <option value="Lỗi tài khoản">Lỗi tài khoản</option>
                        </select>
                        <textarea id="comments" required name="comments" placeholder="Nhập tin nhắn"></textarea>
                        <div class="contact_main-box-in-details-btn">
                            <input
                                type="submit"
                                value="GỬI TIN NHẮN"
                                class="buy-now-btn--bigger"
                                style="color: #fff"
                                name=""
                                id="" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact_main-box-in col l-7 c-12 m-7">

                <iframe style="width:100%;height:100%;  border: 1px solid black; border-radius: 10px;" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.444162251331!2d106.6260569!3d10.853782899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1732471986076!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!--   <div class="contact_main-box-in-details-btn">
                    <button class="buy-now-btn--bigger" style="border-radius: 0%"><a href="https://maps.app.goo.gl/5F657CLQ3EWuz5717">XEM BẢN ĐỒ</a></button>
                </div> -->
            </div>

        </div>
    </div>
    </div>
</main>