<html lang="vi" class="csstransforms3d">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile#">
    <meta charset="UTF-8">
    <base href="http://localhost/truyenfull/">
    <title>{{$story->story_title}}</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="{{$story->story_excerpt}}">
    <meta name="keywords" content="{{$story->story_keyword}}">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <link rel="canonical" href="{{$story->story_slug}}/">
    <link rel="stylesheet" type="text/css" media="all" href="http://static.truyenfull.vn/min/g/maincss-1602-5.css">
    <link rel="search" type="application/opensearchdescription+xml" href="http://static.truyenfull.vn/xml/opensearch.xml" title="Search">
    <link rel="shortcut icon" type="image/x-icon" href="http://static.truyenfull.vn/favicon.ico">
    <link rel="icon" type="image/png" href="http://static.truyenfull.vn/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="http://static.truyenfull.vn/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="http://static.truyenfull.vn/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="http://static.truyenfull.vn/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="http://static.truyenfull.vn/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="57x57" href="http://static.truyenfull.vn/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://static.truyenfull.vn/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://static.truyenfull.vn/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://static.truyenfull.vn/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://static.truyenfull.vn/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://static.truyenfull.vn/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://static.truyenfull.vn/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://static.truyenfull.vn/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://static.truyenfull.vn/favicons/apple-touch-icon-180x180.png">
    <meta property="fb:app_id" content="333184773543272">
    <meta property="og:site_name" content="Truyện Full">
    <meta property="og:type" content="book">
    <meta property="og:title" content="{{$story->story_title}}">
    <meta property="og:image" content="http://static.truyenfull.vn/poster/n2/QWJ4NzhWQUZmRkcxcTBldypGYVZaejBpX0deRmYqQCp2VmtBYUxNMm0xMW96TDBaQClHeHJXV1JNTn5GfE5dVlVVR3R4WnteeFl8dFVXVVooWntGUl96WXRNXV1XUnx4fk5WOVRfMjFSVUhWQCNGRklae0JUVXxKaTtVMVVWfkpUVlRSdjtVKjZZVlJJWV04M1JXKXRaejF6TUE9PQ==/duyen-phan-ngan-nam.jpg">
    <meta property="og:description" content="Truyện {{$story->story_title}} của tác giả Lưu Thiên Thiên.">
    <meta property="og:url" content="{{$story->story_slug}}/">
    <meta property="book:author" content="http://localhost/truyenfull/tac-gia/luu-thien-thien/">
    <meta property="book:release_date" content="{{$story->created_at}}">
    <meta property="book:tag" content="{{$story->story_title}}">
    <meta property="book:tag" content="duyen phan ngan nam">
    <meta property="book:tag" content="{{$story->story_author}}">
</head>

<body id="body_truyen">
    <div id="wrap">
        <div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Hiện menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="header-logo" href="http://localhost/truyenfull/" title="doc truyen">doc truyen</a></div>
                <div class="navbar-collapse collapse">
                    <ul class="control nav navbar-nav ">
                        <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Danh sách <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://localhost/truyenfull/danh-sach/truyen-moi/" title="Truyện mới cập nhật">Truyện mới cập nhật</a></li>
                                <li><a href="http://localhost/truyenfull/danh-sach/truyen-hot/" title="Truyện Hot">Truyện Hot</a></li>
                                <li><a href="http://localhost/truyenfull/danh-sach/truyen-full/" title="Truyện Full">Truyện Full</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Thể loại <span class="caret"></span></a>
                            <div class="dropdown-menu multi-column">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="dropdown-menu">
                                            <li><a href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Truyện Tiên Hiệp">Tiên Hiệp</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/kiem-hiep/" title="Truyện Kiếm Hiệp">Kiếm Hiệp</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/ngon-tinh/" title="Truyện Ngôn Tình">Ngôn Tình</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/do-thi/" title="Truyện Đô Thị">Đô Thị</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/quan-truong/" title="Truyện Quan Trường">Quan Trường</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/vong-du/" title="Truyện Võng Du">Võng Du</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/khoa-huyen/" title="Truyện Khoa Huyễn">Khoa Huyễn</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Truyện Huyền Huyễn">Huyền Huyễn</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/di-gioi/" title="Truyện Dị Giới">Dị Giới</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/di-nang/" title="Truyện Dị Năng">Dị Năng</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/quan-su/" title="Truyện Quân Sự">Quân Sự</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/lich-su/" title="Truyện Lịch Sử">Lịch Sử</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/xuyen-khong/" title="Truyện Xuyên Không">Xuyên Không</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="dropdown-menu">
                                            <li><a href="http://localhost/truyenfull/the-loai/trong-sinh/" title="Truyện Trọng Sinh">Trọng Sinh</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/trinh-tham/" title="Truyện Trinh Thám">Trinh Thám</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/tham-hiem/" title="Truyện Thám Hiểm">Thám Hiểm</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/linh-di/" title="Truyện Linh Dị">Linh Dị</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/sac/" title="Truyện Sắc">Sắc</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/nguoc/" title="Truyện Ngược">Ngược</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/sung/" title="Truyện Sủng">Sủng</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/cung-dau/" title="Truyện Cung Đấu">Cung Đấu</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/nu-cuong/" title="Truyện Nữ Cường">Nữ Cường</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/gia-dau/" title="Truyện Gia Đấu">Gia Đấu</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/dong-phuong/" title="Truyện Đông Phương">Đông Phương</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/dam-my/" title="Truyện Đam Mỹ">Đam Mỹ</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/bach-hop/" title="Truyện Bách Hợp">Bách Hợp</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="dropdown-menu">
                                            <li><a href="http://localhost/truyenfull/the-loai/hai-huoc/" title="Truyện Hài Hước">Hài Hước</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/dien-van/" title="Truyện Điền Văn">Điền Văn</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/co-dai/" title="Truyện Cổ Đại">Cổ Đại</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/mat-the/" title="Truyện Mạt Thế">Mạt Thế</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/truyen-teen/" title="Truyện Truyện Teen">Truyện Teen</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/tieu-thuyet-phuong-tay/" title="Truyện Tiểu Thuyết Phương Tây">Tiểu Thuyết Phương Tây</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/nu-phu/" title="Truyện Nữ Phụ">Nữ Phụ</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/light-novel/" title="Truyện Light Novel">Light Novel</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/van-hoc-viet-nam/" title="Truyện Văn học Việt Nam">Văn học Việt Nam</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/doan-van/" title="Truyện Đoản Văn">Đoản Văn</a></li>
                                            <li><a href="http://localhost/truyenfull/the-loai/khac/" title="Truyện Khác">Khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" action="http://localhost/truyenfull/tim-kiem/" role="search">
                        <div class="input-group search-holder">
                            <input class="form-control" id="search-input" type="search" name="tukhoa" placeholder="Tìm kiếm..." value="" required="">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                        <div class="list-group list-search-res hide"></div>
                    </form>
                    <div id="login-status" class="hide"></div>
                </div>
                <!--/.nav-collapse -->
            </div>
            <div class="navbar-breadcrumb">
                <div class="container breadcrumb-container">
                    <ol class="breadcrumb">
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="." accesskey="1"><span class="glyphicon glyphicon-home"></span></a><a href="." title="Đọc truyện online" itemprop="url"><span itemprop="title">Truyện</span></a></li>
                        <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <h1><a href="{{$story->story_slug}}/" title="{{$story->story_title}}" itemprop="url"><span itemprop="title">{{$story->story_title}}</span></a></h1></li>
                    </ol>
                    <div class="navbar-social pull-right visible-md visible-lg">
                        
                    </div>
                    <div class="navbar-social pull-right visible-md visible-lg">
                        <div class="fb-like" data-href="https://www.facebook.com/truyenfull" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="truyen">
            <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
                <div class="text-center">
                    <div class="hidden-sm hidden-md hidden-lg top-truyen">
                        <div class="fb-ad" data-placementid="333184773543272_502287836632964" data-format="native" data-nativeadid="ad_root" data-testmode="false"></div>
                        <div id="ad_root">
                            <a class="fbAdLink">
                                <div class="fbAdMedia thirdPartyMediaClass"></div>
                                <div class="fbAdTitle thirdPartyTitleClass"></div>
                                <div class="fbAdBody thirdPartyBodyClass"></div>
                                <div class="fbAdCallToAction thirdPartyCallToActionClass"></div>
                            </a>
                        </div>
                        <div class="ads-320-100-backup-1"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-info-desc" itemscope="" itemtype="http://schema.org/Book">
                    <div class="title-list">
                        <h2>Thông tin truyện</h2></div>
                    <div class="col-xs-12 col-sm-4 col-md-4 info-holder">
                        <div class="books">
                            <div class="book"><img src="{{$story->story_thumbnail}}" alt="{{$story->story_title}}" itemprop="image"></div>
                        </div>
                        <div class="info">
                            <div>
                                <h3>Tác giả:</h3><a itemprop="author" href="http://localhost/truyenfull/tac-gia/luu-thien-thien/" title="Lưu Thiên Thiên">{{$story->story_author}}</a></div>
                            <div>
                                <h3>Thể loại:</h3><a itemprop="genre" href="http://localhost/truyenfull/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/xuyen-khong/" title="Xuyên Không">Xuyên Không</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/co-dai/" title="Cổ Đại">Cổ Đại</a></div>
                            <div>
                                <h3>Nguồn:</h3><span class="source">Trang Truyện Mạng</span></div>
                            <div>
                                <h3>Trạng thái:</h3><span class="text-success">Full</span></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 desc">
                        <h3 class="title" itemprop="name">{{$story->story_title}}</h3>
                        <div class="rate">
                            <div class="rate-holder" data-score="6.9" style="cursor: pointer;"><img alt="1" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Không còn gì để nói...">&nbsp;<img alt="2" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="WTF">&nbsp;<img alt="3" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Cái gì thế này ?!">&nbsp;<img alt="4" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Haizz">&nbsp;<img alt="5" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Tạm">&nbsp;<img alt="6" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Cũng được">&nbsp;<img alt="7" src="http://static.truyenfull.vn/lib/raty/images/star-on.png" title="Khá đấy">&nbsp;<img alt="8" src="http://static.truyenfull.vn/lib/raty/images/star-off.png" title="Được">&nbsp;<img alt="9" src="http://static.truyenfull.vn/lib/raty/images/star-off.png" title="Hay">&nbsp;<img alt="10" src="http://static.truyenfull.vn/lib/raty/images/star-off.png" title="Tuyệt đỉnh!">
                                <input name="score" type="hidden" value="6.9">
                            </div><em class="rate-text"></em>
                            <div class="small" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"><em>Đánh giá: <strong><span itemprop="ratingValue">6.9</span></strong>/<span class="text-muted" itemprop="bestRating">10</span> từ <strong><span itemprop="ratingCount">18</span> lượt</strong></em></div>
                        </div>
                        <div class="desc-text desc-text-full" itemprop="description">
                        {!!$story->story_excerpt!!}
                        </div>
                        <div class="showmore"><a class="btn btn-default btn-xs" href="javascript:void(0)" title="Xem thêm">Xem thêm »</a></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="hidden-xs hidden-sm hidden-md">
                        <!-- Ads Quảng Cáo -->
                    </div>
                    <div class="hidden-lg text-center w320">
                        <div class="fb-ad" data-placementid="333184773543272_500195916842156" data-format="native" data-nativeadid="ad_root_2" data-testmode="false"></div>
                        <div id="ad_root_2">
                            <a class="fbAdLink">
                                <div class="fbAdMedia thirdPartyMediaClass"></div>
                                <div class="fbAdTitle thirdPartyTitleClass"></div>
                                <div class="fbAdBody thirdPartyBodyClass"></div>
                                <div class="fbAdCallToAction thirdPartyCallToActionClass"></div>
                            </a>
                        </div>
                        <div class="ads-320-100-backup-2"></div>
                        <!--<div class="ads-320-100-exoclick"></div>--></div>
                </div>
                <!--<div class="hidden-xs hidden-sm col-md-2 col-desk-20"></div>-->
                <div class="col-xs-12" id="list-chapter">
                    <div class="title-list">
                        <h2>Danh sách chương</h2></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <ul class="list-chapter">
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-1/" title="{{$story->story_title}} - Chương 1"><span class="chapter-text"><span>Chương </span></span>1</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-2/" title="{{$story->story_title}} - Chương 2"><span class="chapter-text"><span>Chương </span></span>2</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-3/" title="{{$story->story_title}} - Chương 3"><span class="chapter-text"><span>Chương </span></span>3</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-4/" title="{{$story->story_title}} - Chương 4"><span class="chapter-text"><span>Chương </span></span>4</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-5/" title="{{$story->story_title}} - Chương 5"><span class="chapter-text"><span>Chương </span></span>5</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-6/" title="{{$story->story_title}} - Chương 6"><span class="chapter-text"><span>Chương </span></span>6</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-7/" title="{{$story->story_title}} - Chương 7"><span class="chapter-text"><span>Chương </span></span>7</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-8/" title="{{$story->story_title}} - Chương 8"><span class="chapter-text"><span>Chương </span></span>8</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-9/" title="{{$story->story_title}} - Chương 9"><span class="chapter-text"><span>Chương </span></span>9</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-10/" title="{{$story->story_title}} - Chương 10"><span class="chapter-text"><span>Chương </span></span>10</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-11/" title="{{$story->story_title}} - Chương 11"><span class="chapter-text"><span>Chương </span></span>11</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-12/" title="{{$story->story_title}} - Chương 12"><span class="chapter-text"><span>Chương </span></span>12</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-13/" title="{{$story->story_title}} - Chương 13"><span class="chapter-text"><span>Chương </span></span>13</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-14/" title="{{$story->story_title}} - Chương 14"><span class="chapter-text"><span>Chương </span></span>14</a></li>
                                <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{$story->story_slug}}/chuong-15/" title="{{$story->story_title}} - Chương 15: Phiên ngoại"><span class="chapter-text"><span>Chương </span></span>15: Phiên ngoại</a></li>
                            </ul>
                        </div>
                    </div>
                    <input id="truyen-id" type="hidden" value="9801">
                    <input id="total-page" type="hidden" value="1">
                </div>
                <div class="visible-md visible-lg">
                    <div class="col-xs-12 comment-box">
                        <div class="title-list">
                            <h2>Bình luận truyện</h2></div>
                        <div class="fb-comments" data-href="{{$story->story_slug}}/" data-width="832" data-numposts="5" data-colorscheme="light"></div>
                    </div>
                </div>
            </div>
            <div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
                <!-- Ads Chỗ này đặt quảng cáo -->2
                <div class="list list-truyen col-xs-12">
                    <div class="title-list">
                        <h4>Truyện cùng tác giả</h4></div>
                    <div class="row" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12"><span class="glyphicon glyphicon-chevron-right"></span>
                            <h3 itemprop="name"><a href="http://localhost/truyenfull/thanh-huyen-tro-ve/" title="Thanh Huyên Trở Về" itemprop="url">Thanh Huyên Trở Về</a></h3></div>
                    </div>
                    <div class="row" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12"><span class="glyphicon glyphicon-chevron-right"></span>
                            <h3 itemprop="name"><a href="http://localhost/truyenfull/cuong-vu-khuynh-nhan/" title="Cuồng Vũ Khuynh Nhân" itemprop="url">Cuồng Vũ Khuynh Nhân</a></h3></div>
                    </div>
                </div>
                <div class="list list-truyen list-side col-xs-12">
                    <div class="title-list">
                        <h4>Truyện đang hot</h4></div>
                    <div class="row top-nav" data-limit="10">
                        <div class="col-xs-4 active" data-type="day">Ngày</div>
                        <div class="col-xs-4" data-type="month">Tháng</div>
                        <div class="col-xs-4" data-type="all">All time</div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-1">1</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/linh-vu-thien-ha/" title="Linh Vũ Thiên Hạ" itemprop="url">Linh Vũ Thiên Hạ</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/di-gioi/" title="Dị Giới">Dị Giới</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-2">2</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/nga-duc-phong-thien/" title="Ngã Dục Phong Thiên" itemprop="url">Ngã Dục Phong Thiên</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-3">3</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/thieu-gia-ac-ma-dung-hon-toi/" title="Thiếu Gia Ác Ma Đừng Hôn Tôi" itemprop="url">Thiếu Gia Ác Ma Đừng Hôn Tôi</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-4">4</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/van-co-chi-ton/" title="Vạn Cổ Chí Tôn" itemprop="url">Vạn Cổ Chí Tôn</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-5">5</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/doc-ton-tam-gioi/" title="Độc Tôn Tam Giới" itemprop="url">Độc Tôn Tam Giới</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-6">6</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/dau-pha-thuong-khung/" title="Đấu Phá Thương Khung" itemprop="url">Đấu Phá Thương Khung</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/di-gioi/" title="Dị Giới">Dị Giới</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-7">7</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/truyen-than-khong-thien-ha/" title="Thần Khống Thiên Hạ" itemprop="url">Thần Khống Thiên Hạ</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/di-gioi/" title="Dị Giới">Dị Giới</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-8">8</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/de-ba/" title="Đế Bá" itemprop="url">Đế Bá</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-9">9</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/de-ton/" title="Đế Tôn" itemprop="url">Đế Tôn</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/kiem-hiep/" title="Kiếm Hiệp">Kiếm Hiệp</a>, <a itemprop="genre" href="http://localhost/truyenfull/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
                        </div>
                    </div>
                    <div class="row top-item" itemscope="" itemtype="http://schema.org/Book">
                        <div class="col-xs-12">
                            <div class="top-num top-10">10</div>
                            <div class="s-title">
                                <h3 itemprop="name"><a href="http://localhost/truyenfull/tong-tai-o-tren-toi-o-duoi/" title="Tổng Tài Ở Trên Tôi Ở Dưới" itemprop="url">Tổng Tài Ở Trên Tôi Ở Dưới</a></h3></div>
                            <div><a itemprop="genre" href="http://localhost/truyenfull/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a></div>
                        </div>
                    </div>
                </div>
                <!-- Chỗ này đặt quảng cáo -->
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="hidden-xs col-sm-5"><strong>Truyện Full</strong> - <a href="http://truyenfull.vn" title="Đọc truyện online">Đọc truyện</a> online, <a href="http://truyenfull.vn" title="Đọc truyện chữ">đọc truyện</a> chữ, <a href="http://truyenfull.vn" title="Truyện hay">truyện hay</a>. Website luôn cập nhật những bộ <a href="http://localhost/truyenfull/danh-sach/truyen-moi/" title="Truyện mới">truyện mới</a> thuộc các thể loại đặc sắc như <a href="http://localhost/truyenfull/the-loai/tien-hiep/" title="Truyện tiên hiệp">truyện tiên hiệp</a>, <a href="http://localhost/truyenfull/the-loai/kiem-hiep/" title="Truyện kiếm hiệp">truyện kiếm hiệp</a>, hay <a href="http://localhost/truyenfull/the-loai/ngon-tinh/" title="Truyện ngôn tình">truyện ngôn tình</a> một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</div>
            <ul class="col-xs-12 col-sm-7 list-unstyled">
                <li class="text-right pull-right"><a href="http://localhost/truyenfull/contact/" title="Contact">Contact</a> - <a href="http://localhost/truyenfull/tos/" title="Terms of Service">ToS</a> - <a href="http://localhost/truyenfull/sitemap.xml" title="Sitemap" target="_blank">Sitemap</a><a class="backtop" href="#wrap" rel="nofollow"><span class="glyphicon glyphicon-upload"></span></a>
                    <!--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=BMYGJSKTRBZXU" title="Donate - Ủng hộ" target="_blank" rel="nofollow">Donate</a>--></li>
                <li class="hidden-xs tag-list"><a href="http://localhost/truyenfull/ma-thien-ky/" title="ma thien ky">ma thien ky</a> <a href="http://localhost/truyenfull/tien-nghich/" title="tien nghich">tien nghich</a> <a href="http://localhost/truyenfull/thieu-gia-ac-ma-dung-hon-toi/" title="thieu gia ac ma dung hon toi">thieu gia ac ma dung hon toi</a> <a href="http://localhost/truyenfull/the-loai/dam-my/" title="truyen dam my">truyen dam my</a> <a href="http://localhost/truyenfull/chua-te-chi-vuong/" title="chua te chi vuong">chua te chi vuong</a> <a href="http://localhost/truyenfull/tam-sinh-tam-the-thap-ly-dao-hoa/" title="tam sinh tam the thap ly dao hoa">tam sinh tam the thap ly dao hoa</a> <a href="http://localhost/truyenfull/linh-vu-thien-ha/" title="linh vu thien ha">linh vu thien ha</a> <a href="http://localhost/truyenfull/quan-khi/" title="quan khi">quan khi</a> <a href="http://localhost/truyenfull/dai-thieu-gia-em-lay-cau/" title="dai thieu gia em lay cau">dai thieu gia em lay cau</a> <a href="http://localhost/truyenfull/doc-ton-tam-gioi/" title="doc ton tam gioi">doc ton tam gioi</a> <a href="http://localhost/truyenfull/quan-thuat/" title="quan thuat">quan thuat</a> <a href="http://localhost/truyenfull/quan-sach/" title="quan sach">quan sach</a> <a href="http://localhost/truyenfull/quan-bang/" title="quan bang">quan bang</a> <a href="http://localhost/truyenfull/tru-tien/" title="tru tien">tru tien</a> <a href="http://localhost/truyenfull/lac-hong-ky/" title="lac hong ky">lac hong ky</a></li>
            </ul>
        </div>
    </div>
    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.ICdbHCvUVWs.O/m=auth/exm=follow/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCOlq6Rg1KwxYCoXjb-XA47_Gvdbgw/cb=gapi.loaded_1" async=""></script>
    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.ICdbHCvUVWs.O/m=follow/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCOlq6Rg1KwxYCoXjb-XA47_Gvdbgw/cb=gapi.loaded_0" async=""></script>
    <script type="text/javascript" async="" src="https://apis.google.com/js/platform.js" gapi_processed="true"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script>
    <script async="" src="http://static.truyenfull.vn/js/analytics.js"></script>
    <script src="js/mainjs-1002.js"></script>
    <!--<script type="text/javascript" src="https://connect.facebook.net/en_US/fbadnw.js" async></script>-->
    <!--<script type="text/javascript">if($.browser.mobile){	(function() {	var s = document.createElement('script');	s.type = 'text/javascript';	s.async = true;	s.src = 'https://connect.facebook.net/en_US/fbadnw.js';	var x = document.getElementsByTagName('script')[0];	x.parentNode.insertBefore(s, x);	})();
}</script>-->
    <div id="checkfbads" data-loaded="0"></div>
    <!--<div id="aff"></div>-->
    <div id="ifvp"></div>
    <iframe name="oauth2relay774968780" id="oauth2relay774968780" src="https://accounts.google.com/o/oauth2/postmessageRelay?parent=http%3A%2F%2Ftruyenfull.vn&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.ICdbHCvUVWs.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOlq6Rg1KwxYCoXjb-XA47_Gvdbgw#rpctoken=806648466&amp;forcesecure=1" tabindex="-1" aria-hidden="true" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
                <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/ao6eUeuGXQq.js?version=42#channel=f158b7ca7b2b618&amp;origin=http%3A%2F%2Ftruyenfull.vn" style="border: none;"></iframe>
                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/ao6eUeuGXQq.js?version=42#channel=f158b7ca7b2b618&amp;origin=http%3A%2F%2Ftruyenfull.vn" style="border: none;"></iframe>
            </div>
        </div>
    </div>
</body>

</html>