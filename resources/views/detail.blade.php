@extends('theme.base')

@section('title')

<title>Chi Tiết Sản Phẩm</title>
@section('content')
<div class="detail-title">
    <div class="container">
        <h6>NewsFashion / Áo Nam / Áo Sơ Mi</h6>
    </div>
</div>
<div class="detail-content">
    <div class="container">
        <div class="row">
            <div class="col-6" id="wrap">
                <ul id="thumbnail_slider">
                    <li class="thumbnail-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_1.jpg" alt="画像"></li>
                    <li class="thumbnail-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_2.jpg" alt="画像"></li>
                    <li class="thumbnail-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_3.jpg" alt="画像"></li>
                    <li class="thumbnail-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_4.jpg" alt="画像"></li>
                </ul>
                <div class="detail-slider-item">
                    <button type="button" class="slick-prev slider-slick-prev"><i class="fas fa-chevron-circle-left"></i></button>
                    <ul id="slider">
                        <li class="slide-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_1.jpg" alt="画像"></li>
                        <li class="slide-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_2.jpg" alt="画像"></li>
                        <li class="slide-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_3.jpg" alt="画像"></li>
                        <li class="slide-item"><img data-lazy="https://takblog.site/wp-content/themes/takblog/assets/img/blanks/post19_4.jpg" alt="画像"></li>
                    </ul>
                    <button type="button" class="slick-prev slider-slick-next"><i class="fas fa-chevron-circle-right"></i></button>
                </div>
            </div>

            <div class="col-6">
                <h1>Áo Sơ Mi In Họa Tiết Lớn ASM081 Màu Trắng</h1>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(38 đánh giá / 82 lượt mua)</span>
                </div>
                <div class="">Giá bán: 285.000 ₫</div>
                <hr>

                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">size</label>
                        <select name="cars" id="cars" class="form-control" >
                            <option value="volvo">S</option>
                            <option value="saab">M</option>
                            <option value="mercedes">L</option>
                            <option value="audi">XL</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Só lượng</label>
                        <select name="cars" id="cars" class="form-control" >
                            <option value="volvo">1</option>
                            <option value="saab">2</option>
                            <option value="mercedes">3</option>
                            <option value="audi">4</option>
                            <option value="volvo">1</option>
                            <option value="saab">2</option>
                            <option value="mercedes">3</option>
                            <option value="audi">4</option>
                            <option value="volvo">1</option>
                            <option value="saab">2</option>
                            <option value="mercedes">3</option>
                            <option value="audi">4</option>
                        </select>
                    </div>

                    <div class="col-6"><button type="button" class="btn btn-dark">Mua Ngay</button></div>
                    <div class="col-6"><a href="">+ Thêm Vào Giỏ Hàng</a></div>
                </div>

                <div class="row detail-item-select">
                    <h4 class="">Gợi ý sản phẩm mua kèm</h4>
                    <div class="col-4 detail-item-relate">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                              </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>

                    <div class="col-4 detail-item-relate">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                              </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>

                    <div class="col-4 detail-item-relate">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                              </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row detail-tabs">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <span>Từ khóa thời trang:</span>
                    <div class="tags-container">
                        <a href="" title="áo sơ mi"><i class="fas fa-key"></i>áo sơ mi</a>
                        <a href="" title="áo nam"><i class="fas fa-key"></i>áo nam</a>
                        <a href="" title="áo sơ mi nam"><i class="fas fa-key"></i>áo sơ mi nam</a>
                        <a href="" title="áo sơ mi nam giá rẻ"><i class="fas fa-key"></i>áo sơ mi nam giá rẻ</a>
                        <a href="" title="sơ mi nam giá rẻ"><i class="fas fa-key"></i>sơ mi nam giá rẻ</a>
                        <a href="" title="áo sơ mi giá rẻ"><i class="fas fa-key"></i>áo sơ mi giá rẻ</a>
                        <a href="" title="shop bán áo sơ mi nam giá rẻ"><i class="fas fa-key"></i>shop bán áo sơ mi nam giá rẻ</a>
                        <a href="" title="shop bán áo sơ mi"><i class="fas fa-key"></i>shop bán áo sơ mi</a>
                        <a href="" title="shop bán áo sơ mi nam"><i class="fas fa-key"></i>shop bán áo sơ mi nam</a>
                        <a href="" title="shop bán sơ mi nam giá rẻ"><i class="fas fa-key"></i>shop bán sơ mi nam giá rẻ</a>
                        <div style="clear:both;">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form method="post" id="formRating">
                        <input type="hidden" resource="product" name="ratingResource" id="ratingResource" value="16599">
                        <span>Gửi đánh giá của bạn</span>
                        <div class="product-rating">
                            <label>
                                <input value="1" type="radio" name="ratingStar">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </label>
                            <br>
                            <label>
                                <input value="2" type="radio" name="ratingStar">
                                <i class="fa fa-star" aria-hidden="true"> </i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </label>
                            <br>
                            <label>
                                <input value="3" type="radio" name="ratingStar">
                                <i class="fa fa-star" aria-hidden="true"> </i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </label>
                            <br>
                            <label>
                                <input value="4" type="radio" name="ratingStar">
                                <i class="fa fa-star" aria-hidden="true"> </i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </label>
                            <br>
                            <label>
                                <input value="5" type="radio" name="ratingStar" checked="checked">
                                <i class="fa fa-star" aria-hidden="true"> </i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </label>
                        </div>
                        <label>Họ tên của bạn *</label>
                        <input type="text" id="ratingFullname" name="ratingFullname" class="form-control">
                        <label>Nội dung đánh giá *</label>
                        <textarea id="ratingNote" name="ratingNote" class="form-control" rows="4" ></textarea>
                        <br>
                        <button type="submit" name="ratingSubmit" id="ratingSubmit" class="btn-black">Gửi đánh giá</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                </div>
              </div>
        </div>
        </div>
    </div>
</div>

<div id="demos" class="container">
    <div class="row">
        <h5 class="content-title">Sản phẩm Liên quan</h5>
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-3 content-item item-slide">
                        <a href="">
                            <div class="content-hover">
                                <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-backgr">
                                <div class="overlay">
                                </div>
                            </div>
                            <img src="{{ asset('storage/image/ao-so-mi-mau-trang-2.jpg') }}" alt="áo sơ mi trắng" class="content-img">
                            <p class="content-text">Áo Sơ Mi In Họa Tiết Lớn Màu Trắng fsdgfhgjhkjlk;ljhgfdsadfghjkl</p>
                            <p class="content-price">234456đ</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $(function(){
        $("#slider").slick({
            autoplay: false,
            slidesToShow: 1,
            speed:500,
            arrows: true,
            infinite:false,
            prevArrow: ".slider-slick-prev",
            nextArrow: ".slider-slick-next",
            asNavFor: "#thumbnail_slider",
            vertical: true,
            focusOnSelect: true,
        });
        $("#thumbnail_slider").slick({
            slidesToShow: 4,
            slidesToScroll:4,
            asNavFor: "#slider",
            infinite:false,
            arrows: false,
            focusOnSelect: true,
            vertical: true,
            draggable: false,

        });
    }); });
</script>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            navText: ["<span class='carousel-control-prev item-fix'><i class='fas fa-angle-left content-prev item-active'></i></span>","<span class='carousel-control-next item-fix'><i class='fas fa-angle-right content-next item-active'></i></span>"],
            margin: 10,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    })
</script>

@endsection
