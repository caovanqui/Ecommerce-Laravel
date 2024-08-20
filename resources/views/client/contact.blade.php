@extends('layout.clientlayout')
@section('content')
    

<div class="container-fluid p-0">
    <div class="banner">
        <div class="position-relative p-0">
            <img class="w-100 banner-img object-fit-cover" src="{{asset('client/img/banner.jpg')}}" alt="" height="600">
            <div class="banner-text col-6 position-absolute top-50 start-50 translate-middle text-center text-white">
                <h6 class="text-uppercase d-inline">thông tin</h6> <br>
                <h1 class="banner-h1 fw-medium fs-1 fs-lg-1 d-inline">LIÊN HỆ VỚI CHÚNG TÔI</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row  my-5 d-flex justify-content-center">
        <div class="contact-article col-12 col-lg-5 pt-5">
            <h1>NHẮN TIN CHÚNG TÔI</h1>
            <p>Sẵn sàng hỗ trợ bạn 24/24</p>
            <div class="contact-article_ul">
                <ul>
                    <li class="pb-2 fs-5 fw-light"><i class="fa-solid fa-location-dot pe-3"></i> Công viên phần mềm
                        Quang
                        Trung</li>
                    <li class="pb-2 fs-5 fw-light"><i class="fa-solid fa-envelope pe-3"></i>quicvps28769@fpt.edu.vn
                    </li>
                    <li class="pb-2 fs-5 fw-light"><i class="fa-solid fa-phone pe-3"></i> 9-334-7565-9787</li>
                </ul>
            </div>
        </div>
        <div class="contact-aside col-12 col-lg-5 card rounded-0 shadow" style="background-color: #faf5f0;">
            <div class="m-5">
                <div class="mb-3 row p-0">
                    <div class="col-6">
                        <input type="text" class="form-control rounded-0 form-control-lg bg-light fs-6 "
                            placeholder="Tên của bạn">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control rounded-0 form-control-lg bg-light fs-6 "
                            placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg rounded-0 bg-light fs-6"
                        placeholder="Địa chỉ Email">
                </div>
                <textarea name="" id="" cols="" class="w-100 mb-2 opacity-25" rows="5"></textarea>
                <a href="" class="btn bg-secondary bg-opacity-10 pe-3 ps-3 border-black">Gửi</a>
            </div>
        </div>
    </div>
</div>
<iframe class="w-100"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.44366148992!2d106.6252534748836!3d10.853821089299716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1711806331339!5m2!1svi!2s"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

    @endsection