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
				<div class="col-lg-3 mt-4 col-md-12 abc">
				<div class="blog-categories aaaa">
						<a href=""><h4 class="title_block">Danh mục</h4></a>
						<div class="blog_content">
							<ul class="category-top-menu-blog" style="padding: 0px;margin: 0px;">
								<li style="list-style: none;">
									<ul class="category-sub-menu-blog" >
										<div class="down">
										<li class="data-depth-blog" >
											<a href="">Linh kiện thang máy</a>
										</li>
									    </div>
									    <div class="dow">
										<li class="data-depth-blog">
											<a href="">Linh kiện thang cuốn</a>
										</li>
									    </div>
									</ul>
								</li>
							</ul>
						</div>
				</div>
				<div class="blog-categories">
						<a href=""><h4 class="title_block">Bộ lọc tìm kiếm</h4></a>
						<div class="slidecontainer mt-4">
							<h5><a href="">Giá</a></h5>
                    <p class="gia">$0   ~    $<span id="demo"></span></p>
                 <input type="range" min="100000" max="35000000" value="" class="" id="myRange" style="width: 100%;">
                 </div>
                 <div class="thuonghieu">
                 	<h5><a href="">Thương hiệu</a></h5>
                 	<ul class="ulth">
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Schindler</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class=""> Otis</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Thyssen</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Kone</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Schindler</a>
                 		</li>
                 	</ul>
                 </div>
                    </div>
                    <div class="blog-categories">
                    	<a href=""><h4 class="title_block">Sản phẩm nổi bật</h4></a>
                    	<div class="spsl" style="">
                    		 <div class="box21">
                        <a href=""><img src="{{ asset('images/may.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
                             <div class="box21">
                        <a href=""><img src="{{ asset('images/thangmay.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
                             <div class="box21">
                        <a href=""><img src="{{ asset('images/thang.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
			            </div>
		            </div>
		            <div class="blog-categories">
		            	<a href=""><h4 class="title_block">Hỗ trợ khách hàng</h4></a>
		            	<div class="kh">
		            		<ul>
		            			<li><a href="">Hỗ trợ kĩ thuật :&nbsp;  091999999</a></li>
		            			<li><a href="">Hỗ trợ kinh doanh:&nbsp; 091999999</a></li>
		            			<li><a href="">Hỗ trợ dịch vụ   :&nbsp;091999999</a></li>
		            		</ul>
		            	</div>
		            </div>
		        </div>
			<div class="col-lg-9  mt-4  ">
                <div class="ri">
                <div class="container">
                    <div class="row">
				     <div class="col-lg-6 mt-4 col-md-12">
                        <div class="container">
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/may.jpg') }}" style="width:100%;height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/thangmay.jpg') }}" style="width:100%;height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/thang.jpg') }}" style="width:100%;height: 400px;">
  </div>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  <div class="row mt-4">
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/may.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/thangmay.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/thang.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>    
  </div>
</div>
 
                     </div>
                     <div class="col-lg-6 mt-4 col-md-12 fomm" >
                         <form class="">
                            <h3>Thang tải thực phẩm - TA 001</h3>
                             <ul class="ull">
                                 <li>Mã sản phẩm: HHDHGHD543</li>
                                 <li>Loại:Nhật</li>
                                 <li>6.000.000</li>
                                 <li>Thương hiệu:KONE</li>
                                 <li>Model: SKI70IQ</li>
                                 <li>Đường đính cáp: vàng</li>
                                 <li>Chiều dài:1m 32</li>
                                 <li>Màu sắc: vàng</li>
                                 <li>Bo mạch điện tử: part number</li>
                                 <li>Khối lượng:50kg</li>
                                 <li>Bảo hành:48 tháng</li>
                             </ul>
                             <div class="row add-to-cart mt-4">
                <input type="number" min="1" value="1" class="amount">
                <button class="btn add-cart" type="button">Mua ngay</button>
              </div>
                         </form>
                     </div>

                            </div>
						</div>
					</div>
				</div>   
</main>
 @endsection

@section('js')

@endsection