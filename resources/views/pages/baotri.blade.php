@extends('master-layout')
@section('title')
 Linh kien
@endsection

@section('css')
   <link rel="stylesheet" href="{{asset('css/linhkien.css')}}">
@endsection
@section('content')

<main>
	<div class="content_linhkien">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mt-4  abc">
				<div class="blog-categories aaaa">
						<a href=""><h4 class="title_block">Danh mục</h4></a>
						<div class="blog_content">
							<ul class="category-top-menu-blog" style="padding: 0px;margin: 0px;">
								<li style="list-style: none;">
									<ul class="category-sub-menu-blog" >
										<div class="down">
										<li class="data-depth-blog" >
											<a href="">Bảo trì</a>
										</li>
									    </div>
									    <div class="dow">
										<li class="data-depth-blog">
											<a href="">Bảo hành</a>
										</li>
									    </div>
									</ul>
								</li>
							</ul>
						</div>
				</div>
				
                  
		            <div class="blog-categories mb-4">
		            	<a href=""><h4 class="title_block">Hỗ trợ khách hàng</h4></a>
		            	<div class="kh">
		            		<ul>
		            			<li><a href="">Hỗ trợ kĩ thuật :&nbsp;  091999999</a></li>
		            			<li><a href="">Hỗ trợ kinh doanh:&nbsp; 091999999</a></li>
		            			<li><a href="">Hỗ trợ dịch vụ   :&nbsp;091999999</a></li>
		            		</ul>
		            	</div>
		            </div>
                    <div class="imgdv">
                        <img src="{{ asset('images/6.png') }}">
                    </div>
		        </div>
			<div class="col-lg-9 mt-4 ">
				<div class="container">
                        <div class="row">
                         <div class="col-lg-12">
                             <div class="dv">
                                 <div class="best-seller-pro">
                                 	<div class="slider-items-products">
                                 		<div class="new_title center">
                                 			<h2>Dịch vụ</h2>
                                 		</div>
                                 		<div class="content-page  product-flexslider hidden-buttons">
                                 			<div class="slider-items slider-width-col6">
                                 				<h1 class="article-title">Bảo trì thang máy</h1>
                                 				<p>Công ty TNHH UNIECO Việt Nam cung cấp dịch vụ bảo trì, bảo dưỡng và sửa chữa thang máy chuyên nghiệp, tận tâm tới từng khách hàng. Được chung tay góp sức bởi các đối tác Nhật Bản và Hàn Quốc, các kỹ sư thang máy có nhiều năm kinh nghiệm, với bề dày công tác thực tế trải nghiệm tại các hãng thang máy uy tín như Hyundai, Thyssen, Schindler, OTIS, HITACHI, FUJITEC… chúng tôi hoàn toàn tin tưởng sẽ cung cấp dịch vụ bảo trì bảo dưỡng thang máy theo đúng tiêu chuẩn chính hãng với chi phí cạnh tranh. </p>
                                 				<p style="text-align: center;width: 100%">
                                 					<img src="{{ asset('images/7.jpg') }}">
                                 				</p>
                                 				<p>Dịch vụ bảo trì bảo dưỡng của chúng tôi được xây dựng trên quy trình tiêu chuẩn dịch vụ chung trong ngành thang máy, đồng thời có tham chiếu quy trình bảo trì bảo dưỡng của từng hãng để đảm bảo tối ưu chất lượng dịch vụ cho hệ thống thang. Ngoài ra, công ty chúng tôi thể hiện trách nhiệm cao nhất của mình và đảm bảo quyền lợi tối đa cho khách hàng bằng việc mua và duy trì hiệu lực đầy đủ của một bảo hiểm trách nhiệm công cộng để đảm bảo việc bồi thường cho bên thứ 3 trong trường hợp tổn thất nếu có trong quá trình thực hiện việc kiểm tra, bảo trì.</p>
                                 				<p style="font-weight: 600;">CÁC GÓI HỢP ĐỒNG BẢO TRÌ BẢO DƯỠNG</p>
                                 				<p class="hd">1.	Hợp đồng Bảo trì tiêu chuẩn </p>
                                 				
                                 				<div class="hdbt">
                                 				<i class="fas fa-arrow-alt-circle-right" style="float: left; margin-right: 2%;">
                                 					
                                 				</i>
                                 				<p>Hợp đồng bảo trì tiêu chuẩn bao gồm chi phí nhân công thực hiện bảo trì định kỳ mỗi tháng 1 lần và nhân công trực sửa chữa. Nếu thang ít sử dụng, khách hàng có thể lựa chọn loại dịch vụ bảo trì định kỳ 2 tháng 1 lần để phù hợp ngân sách. Trong trường hợp có vật tư hư hỏng, Unieco sẽ gửi báo giá vật tư riêng biệt với chi phí ưu đãi để khách hàng phê duyệt.</p>
                                 				<p class="hd">2.	Hợp đồng Bảo trì trọn gói  </p>
                                 				
                                 				<div class="hdbt">
                                 				<i class="fas fa-arrow-alt-circle-right" style="float: left; margin-right: 2%;">
                                 					
                                 				</i>
                                 				<p>Hợp đồng bảo trì tiêu chuẩn bao gồm chi phí nhân công thực hiện bảo trì định kỳ mỗi tháng 1 lần và nhân công trực sửa chữa. Nếu thang ít sử dụng, khách hàng có thể lựa chọn loại dịch vụ bảo trì định kỳ 2 tháng 1 lần để phù hợp ngân sách. Trong trường hợp có vật tư hư hỏng, Unieco sẽ gửi báo giá vật tư riêng biệt với chi phí ưu đãi để khách hàng phê duyệt.</p>
                                 				<p style="font-weight: 600;">QUY TRÌNH BẢO TRÌ ĐỊNH KỲ </p>
                                 				<p style="text-align: center;width: 100%">
                                 					<img src="{{ asset('images/9.png') }}">
                                 				</p>
                                                 <!-- <p style="text-align: center;width: 100%">
                                 					<img src="{{ asset('images/8.jpg') }}">
                                 				</p>

                                 				<p>Duy trì chế độ bảo trì định kì hàng tháng để  đảm bảo hệ thống thang máy hoạt động ổn định bảo trì ngăn ngừa hư hỏng thăng cường tuổi thọ thiết bị bằng cách định kì vệ sinh,căn chỉnh tra dầu mỡcúng cấp dịch vụ sửa chữa kịp thờitránh hư hỏng phát sinh</p>
                                 		        <p class="buoc">Bước một</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Kiểm tra kế hoạch bảo trì hàng tháng</p>
                                 		        <p class="buoc">Bước hai</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Lập kế hoạch bảo trì định kì hàng tháng</p>
                                 		        <p class="buoc">Bước ba</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Thông báo kế hoạch với khách hàng</p>
                                 		        <p class="buoc">Bước bốn</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Tiến hành dịch vụ bảo trì</p>
                                 		        <p class="buoc">Bước năm</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Đăt biến cảnh báo</p>
                                 		        <p class="buoc">Bước sáu</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Đi thử thang</p>
                                 		        <p class="buoc">Bước bảy</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Kiểm tra phòng máy,hố thang</p>
                                 		        <p class="buoc">Bước tám</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Kiểm tra buồng thang,hố pit</p>
                                 		        <p class="buoc">Bước chín</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Tham vấn các yêu cầu của khách hàng</p>
                                 		        <p class="buoc">Bước mười</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Kiểm tra và căn chỉnh theo danh mục</p>
                                 		        <p class="buoc">Bước mười</p>
                                 		        <i class="fas fa-angle-right" style="float: left; margin-right: 2%;"></i>
                                 		        <p>Hoàn tất công việc</p> -->
                                 		        <p style="font-weight: 600;">CHECK LIST BẢO TRÌ ĐỊNH KỲ </p>
                                 		        <p class="text-center" style="color: #ffd53d;font-weight: 700;font-size:19px; ">Danh mục kiểm tra thang cuốn,thang trượt định kì</p>
                                 		        <p style="text-align: center;width: 100%">
                                 					<img src="{{ asset('images/10.jpg') }}">
                                 				</p>

                                 				<p class="text-center" style="color: #ffd53d;font-weight: 700;font-size:19px; ">Danh mục kiểm tra bảo trì thang máy định kì</p>
                                 		        <p style="text-align: center;width: 100%">
                                 					<img src="{{ asset('images/11.jpg') }}">
                                 				</p>
                                 			</div>
                                 	</div>
                                 </div>
</main>
 @endsection

@section('js')

@endsection