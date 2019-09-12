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
                                 <h2 class="the">Dịch vụ sau bán hàng</h2>
                                 <h5 class="mt-4 hi">Dịch vụ bảo hành -<a href="{{ route()}}"> Dịch vụ bảo trì</a></h5>
                                 <p class="bhh"> I.Dịch vụ bảo hành</p>
                                 <p class="MsoNormal">
                                 	<span class="do">- &nbsp;Thang máy tại công trình sẽ được bên B bảo hành bảo dưỡng 12 tháng kể từ ngày nghiệm thu bàn giao. </span><br/>
                                 	<span class="do">- &nbsp; Ngay sau khi bàn giao nghiệm thu, các thang máy trên sẽ được bên B trực sửa chữa 24/24 giờ trong ngày. </span><br/>
                                 	<span class="do">- &nbsp;Khi nhận được thông báo của bên A về tình trạng sự cố của thang máy, kỹ thuật viên của bên B sẽ có mặt tại công trình trong thời gian sớm nhất để giải quyết và duy trì hoạt động của thang máy. </span><br/>
                                 	<span class="do">- &nbsp;Trong thời gian bảo hành, kể cả khi thang máy đang hoạt động bình thường thì kỹ thuật viên của bên B vẫn thường xuyên đến công trình kiểm tra tình trạng hoạt động của thang máy 1 thang trên 1 lần để kịp thời phát hiện khắc phục các lỗi hỏng có thể xảy ra. </span><br/>
                                 	<span class="do">- &nbsp;Trong thời gian bảo hành, kể cả khi thang máy đang hoạt động bình thường thì kỹ thuật viên của bên B vẫn thường xuyên đến công trình kiểm tra tình trạng hoạt động của thang máy 1 thang trên 1 lần để kịp thời phát hiện khắc phục các lỗi hỏng có thể xảy ra. </span><br/>
                                 	<span class="do">- &nbsp;Trong các lần kiểm tra này các kỹ thuật viên của bên B sẽ tiến hành bảo dưỡng thang máy như: Tra dầu mỡ, kiểm tra, vệ sinh lại ray, cáp, tăng phanh, căn chỉnh lại (nếu cần thiết) để tạo cho thang máy luôn hoạt động ổn định, êm ái, an toàn với người sử dụng. </span>

                                 </p>
                                 <div class="text-center mb-4">
                                 	<img src="{{ asset('images/8.jpg') }}">
                                 </div>
                                  <p class="bhh"> II. Dịch vụ bảo trì và khả năng thay thế phụ tùng kịp thời: </p>
                                  <p class="MsoNormal">
                                 	<span class="do">- &nbsp;Sau khi thời hạn bảo hành kết thúc, các thang máy trên sẽ được ký một hợp đồng bảo trì, trực sửa chữa hệ thống thang máy. </span><br/>
                                 	<span class="do">- &nbsp;  Bên cạnh đó, Công ty luôn sẵn lòng đáp ứng nhu cầu phụ tùng thay thế kịp thời cho công trình của Quý Khách. </span><br/>
                                 	<span class="do">- &nbsp;Để có thể xem xét, đánh giá, so sánh chi phí bảo trì giữa các loại thang máy đề nghị Chủ đầu tư có thể tham khảo thêm qua các khách hàng đang sử dụng thang máy tại Việt Nam </span><br/>
                                 	<span class="do">- &nbsp; Giá thành bảo trì có thể giao động từ 500.000 – 2.000.000 VND/ 1 tháng. </span>
                                 	
                                 </p>
                             </div>
                         </div>
                        </div>            
                </div>                       	
                </div>
            </div>
        </div>
	</div>
</main>
 @endsection

@section('js')

@endsection