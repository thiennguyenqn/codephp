//https://developers.mynukeviet.net/code/PHP-lay-hinh-anh-dau-tien-trong-noi-dung-75/
<?php

// Khai báo hàm
function get_firstimage( $contents ){
	if( preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $contents, $img) ){
		return $img[1];
	}else{
		return '';
	}
}

// Sử dụng hàm
$content = 'Module cho phép người quản trị thêm xe và hiển thị thông tin về xe, người dùng có thể đặt xe trực tuyến, hoặc thiết kế yêu cầu báo giá. Module cung cấp đầy đủ các chức năng giúp bạn có thể xây dựng một website đặt xe trực tuyến, hoặc kết hợp với các module khác về dịch vụ như <a href="https://mynukeviet.net/san-pham/modules/module-thong-tin-tour-du-lich.html">Tour du lịch</a>.<br />
 
<div style="text-align:center"><img alt="module dịch vụ xe" src="/uploads/san-pham/2016/module-dich-vu-xe_1.png" /></div>
<h2>1. Quản lý Loại xe</h2>
<div style="text-align:center"><img alt="module dịch vụ xe" height="443" src="/uploads/san-pham/2016/module-dich-vu-xe_2.png" width="987" /></div>
<h2>2. Quản lý Hãng xe</h2>
<div style="text-align:center"><img alt="module dịch vụ xe" height="493" src="/uploads/san-pham/2016/module-dich-vu-xe_3.png" width="984" /></div>';

$contents = 'Kết quả: ';
$contents .= get_firstimage($content);

//echo $contents;
