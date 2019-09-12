@extends('master-layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/trangchu.css')}}">

<div class="masthead">
	<!-- Carousel container -->
	<div id="suds-carousel" class="carousel fade-carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#suds-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#suds-carousel" data-slide-to="1"></li>

		</ol>

		<!-- Content -->
		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<div class="carousel-caption">

					<h1 class="title-slide">UNIECO</h1>
					<h3 class="text-slide">Giải pháp kinh tế tối ưu dành cho hệ thống hang máy, thang cuốn</h3>
					<a href="" class="bt-add container text-center">Tìm Hiểu Thêm</a>

				</div>
				<div class="slide-1">
					<img class="img-slide" src="images-h/slide-banner.jpg" alt="">
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item">
				<div class="carousel-caption">

					<h1 class="title-slide">Love Coding?</h1>
					<h3 class="text-slide">Click button to know more</h3>
					<a href="" class="bt-add container text-center">Tìm Hiểu Thêm</a>

				</div>
				<div class="slide-2">
					<img class="img-slide" src="images-h/slide-banner2.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gioithieu container">
	<div class="row">
		<div class="col-md-6">
			<h2 class="gthieu">Giới Thiệu Về <span style="color: #f3cc29;">UNIECO</span></h2>
			<p class="text-gt">UNIECO được thành lập từ năm 2007 tại Hà Nội, Việt Nam, với tầm nhìn tạo ra những sản phẩm có chất lượng cao nhất và dịch vụ tốt nhất, Suplo liên tục phát triển và dẫn đầu thị trường với những sản phẩm, thiết kế, và công nghệ mới. Tầm nhìn và mục tiêu của Suplo vẫn được duy trì, cập nhật và phát huy xuyên suốt quá trình phát triển. Ngày nay, Suplo đã trở lên lớn mạnh với quy mô hơn 150 nhân viên, và phạm vi hoạt động trên cả nước. Các sản phẩm của Suplo hoàn toàn ưu việt về thiết kế, công nghệ, chất lượng so với các sản phẩm khác trên thị trường, tạo đẳng cấp vượt trội. Giải pháp lọc nước của Suplo không chỉ đảm bảo nguồn nước tốt nhất mà còn có tính năng cao cấp, theo dõi tình trạng máy và tiện lợi dễ dàng khi lắp đặt, thay thế nhằm đem lại cho khách hàng chất lượng cuộc sống tốt nhất, đảm bảo sức khỏe của cả gia đình.</p>
			<a class="bt-gt" href="">Tìm hiểu thêm</a>
		</div>
		<div class="col-md-6">
			<div class="img-gioithieu1">
				<img class="img-gioithieu" src="images-h/bao-tri-thang-may.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div class="ket-qua">
	<div class="container">
		<div class="row">
			<div class="col doanhso">
				<span class="number">150</span>
				<p class="text-nv">Nhân Viên</p>
			</div>
			<div class="col doanhso">
				<span class="number">24/7</span>
				<p class="text-nv">Hỗ Trợ</p>
			</div>
			<div class="col doanhso">
				<span class="number">1000+</span>
				<p class="text-nv">Khách hàng</p>
			</div>
			<div class="col doanhso">
				<span class="number">150</span>
				<p class="text-nv">Đối Tác</p>
			</div>
			<div class="col doanhso">
				<span class="number">50+</span>
				<p class="text-nv">Giải Thưởng</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<h2 class="title-content">Dịch Vụ Của Chúng Tôi</h2>
	<div class="gach-chan container"></div>
	<div class="row">
		<div class="col-md-4">
			<div class="img-dichvu">
				<img src="" alt="">
			</div>
		</div>
	</div>
</div>
<div class="dich-vu container">
	<div class="row ss">
		<div class="col-md-4">
			<a class="dich-vu-1" href="">
				<div class="anh-dv">
					<img class="img-dichvu" src="images-h/dich-vu-1.png" alt="">
				</div>
				<h3 class="title-dichvu">			
					Tư vấn thiết bị thang máy
				</h3>
				<p class="text-dichvu">
					Các sản phẩm lọc nước của Suplo luôn là số một trên toàn cầu trên mọi khía cạnh từ thiết kế đến công nghệ và độ bền, là lựa chọn lý tưởng cho các công trình giáo dục, y tế, văn phòng, thể thao, giải trí, nghỉ dưỡng, thương mại và các khu vực có mật độ và tần suất sử dụng cao.
				</p>
			</a>
		</div>
		<div class="col-md-4">
			<a class="dich-vu-1" href="">
				<div class="anh-dv">
					<img class="img-dichvu" src="images-h/dich-vu-1.png" alt="">
				</div>
				<h3 class="title-dichvu">			
					Tư vấn thiết bị thang máy
				</h3>
				<p class="text-dichvu">
					Các sản phẩm lọc nước của Suplo luôn là số một trên toàn cầu trên mọi khía cạnh từ thiết kế đến công nghệ và độ bền, là lựa chọn lý tưởng cho các công trình giáo dục, y tế, văn phòng, thể thao, giải trí, nghỉ dưỡng, thương mại và các khu vực có mật độ và tần suất sử dụng cao.
				</p>
			</a>
		</div>
		<div class="col-md-4">
			<a class="dich-vu-1" href="">
				<div class="anh-dv">
					<img class="img-dichvu" src="images-h/dich-vu-1.png" alt="">
				</div>
				<h3 class="title-dichvu">			
					Tư vấn thiết bị thang máy
				</h3>
				<p class="text-dichvu">
					Các sản phẩm lọc nước của Suplo luôn là số một trên toàn cầu trên mọi khía cạnh từ thiết kế đến công nghệ và độ bền, là lựa chọn lý tưởng cho các công trình giáo dục, y tế, văn phòng, thể thao, giải trí, nghỉ dưỡng, thương mại và các khu vực có mật độ và tần suất sử dụng cao.
				</p>
			</a>
		</div>
	</div>
	<a class="bt-ct" href="" >Xem Chi Tiết</a>
</div>

<div class="mission">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="service-item">
					<a href="#">
						<div class="img-left">
							<i class="fas fa-dollar-sign"></i>
						</div>
						<div class="info-right">
							<h3>Sáng tạo</h3>
							<p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="service-item">
					<a href="#">
						<div class="img-left">
							<i class="fas fa-comments"></i>
						</div>
						<div class="info-right">
							<h3>An toàn</h3>
							<p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="service-item">
					<a href="#">
						<div class="img-left">
							<i class="fas fa-users"></i>
						</div>
						<div class="info-right">
							<h3>Bảo mật</h3>
							<p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="service-item">
					<a href="#">
						<div class="img-left">
							<i class="fas fa-cog"></i>
						</div>
						<div class="info-right">
							<h3>Chất lượng</h3>
							<p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
						</div>
					</a>
				</div>
			</div>     
		</div>
	</div>
</div>
<div class="sanpham-noibat container">
	<h2 class="title-content">SẢN PHẨM NỔI BẬT</h2>
	<div class="gach-chan container"></div>
	<div class="text-kh">
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/4.jpg') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/1.jpg') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>	
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/2.png') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/3.png') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/4.jpg') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>
		<div class="product-grid7">
			<div class="product-image7">
				<a href="#">
					<img class="pic-1" src="{{ asset('images-h/1.jpg') }}">
					<img class="pic-2" src="{{ asset('images-h/may.jpg') }}">
				</a>
				<ul class="social">
					<li><a href="" class="fa fa-heart"></a></li>
					<li><a href="" class="fa fa-eye"></a></li>
					<li><a href="" class="fa fa-shopping-cart"></a></li>
				</ul>

			</div>
			<div class="product-content">
				<h3 class="title"><a href="#">thang máy khác sạn</a></h3>
				<ul class="rating">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
				</ul>
				<div class="price">$5.000000
					<span>$10.00000</span>
				</div>
			</div>
		</div>
	</div>
	<div>
	<a class="bt-ct" href="">Xem Chi Tiết</a></div>
</div>
<div class="tin-tuc container">
	<h2 class="title-content">TIN TỨC</h2>
	<div class="gach-chan container"></div>
	<div class="row space-tt">
		<div class="col-md-4">
			<img class="img-tt" src="images-h/tintuc1.jpg" alt="">
			<div class="date-time">
				<p class="number-tt">02</p>
				<div class="space"></div>
				<p class="number-tt">Tháng Tám</p>
			</div>
			<a class="title-tt" href="">
				CÔNG TY UNIECO TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN
			</a>
			<p class="text-tt">TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN</p>
		</div>
		<div class="col-md-4">
			<img class="img-tt" src="images-h/tintuc1.jpg" alt="">
			<div class="date-time">
				<p class="number-tt">02</p>
				<div class="space"></div>
				<p class="number-tt">Tháng Tám</p>
			</div>
			<a class="title-tt" href="">
				CÔNG TY UNIECO TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN
			</a>
			<p class="text-tt">TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN</p>
		</div>
		<div class="col-md-4">
			<img class="img-tt" src="images-h/tintuc1.jpg" alt="">
			<div class="date-time">
				<p class="number-tt">02</p>
				<div class="space"></div>
				<p class="number-tt">Tháng Tám</p>
			</div>
			<a class="title-tt" href="">
				CÔNG TY UNIECO TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN
			</a>
			<p class="text-tt">TUYỂN DỤNG BÓC TÁCH KHỐI LƯỢNG, DỰ TOÁN</p>
		</div>	
	</div>
</div>
<div class="doi-tac container">
	<h2 class="title-content">ĐỐI TÁC CỦA CHÚNG TÔI</h2>
	<div class="gach-chan container"></div>
	<div class="space-tt doitac">
		<img class="img-doitac" src="images-h/doitac1.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac2.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac3.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac4.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac5.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac6.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac7.PNG" alt="" style="height: 100px ">
		<img class="img-doitac" src="images-h/doitac8.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac9.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac10.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac5.PNG" alt="">
		<img class="img-doitac" src="images-h/doitac11.PNG" alt="">
	</div>
</div>
<div class="nhanxet-kh container">
	<h2 class="title-content">NHẬN XÉT KHÁCH HÀNG</h2>
	<div class="gach-chan container"></div>
	<div class="row space-tt">
		<div class="col-md-4 text-center">
			<img class="img-kh" src="images-h/kh1.jpg" alt="">
			<h3 class="ten">Nhận xét của Mr. Khoi Pham</h3>
			<span class="ceo">CEO Tập đoàn Amazon</span>
			<p class="text-nx">“Các thiết bị lọc nước của Suplo đã hoạt động rất tốt và ổn định, đảm bảo yêu cầu chất lượng nước của khách hàng đề ra.”</p>
		</div>	
		<div class="col-md-4 text-center">
			<img class="img-kh" src="images-h/kh2.jpg" alt="">
			<h3 class="ten">Nhận xét của Mr. Khoi Pham</h3>
			<span class="ceo">CEO Tập đoàn Amazon</span>
			<p class="text-nx">“Các thiết bị lọc nước của Suplo đã hoạt động rất tốt và ổn định, đảm bảo yêu cầu chất lượng nước của khách hàng đề ra.”</p>
		</div>	
		<div class="col-md-4 text-center">
			<img class="img-kh" src="images-h/kh-3.jpg" alt="">
			<h3 class="ten">Nhận xét của Mr. Khoi Pham</h3>
			<span class="ceo">CEO Tập đoàn Amazon</span>
			<p class="text-nx">“Các thiết bị lọc nước của Suplo đã hoạt động rất tốt và ổn định, đảm bảo yêu cầu chất lượng nước của khách hàng đề ra.”</p>
		</div>	

	</div>
</div>
<div class="ds-kh container">
	<h2 class="title-content">DANH SÁCH KHÁCH HÀNG</h2>
	<div class="gach-chan container"></div>
	<div class="space-tt doitac">
		<img class="img-doitac" src="images-h/ds1.PNG" alt="" style="height: 111px;">
		<img class="img-doitac" src="images-h/ds2.PNG" alt="">
		<img class="img-doitac" src="images-h/ds3.PNG" alt="">
		<img class="img-doitac" src="images-h/ds4.PNG" alt="">
		<img class="img-doitac" src="images-h/ds4.jpg" alt="">
		<img class="img-doitac" src="images-h/ds5.PNG" alt="">
		<img class="img-doitac" src="images-h/ds3.PNG" alt="">
	</div>
</div>
@endsection