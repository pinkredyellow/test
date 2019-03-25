var arr = [
 {
    name: '迟靖欣',
	sex: '他',
	phone: 'LNX5526',
	wx_num: 'LNX5526',
	wx_img: 'LNX5526.jpg'
}
,
{
    name: '迟雅纯',
	sex: '他',
	phone: 'LNX852',
	wx_num: 'LNX852',
	wx_img: 'LNX852.jpg'
},
{
    name: '付一翔',
	sex: '他',
	phone: 'LNX645',
	wx_num: 'LNX645',
	wx_img: 'LNX645.jpg'
}
,
{
    name: '李梦奇',
	sex: '他',
	phone: 'LNX819',
	wx_num: 'LNX819',
	wx_img: 'LNX819.jpg'
},
{
    name: '李万吉',
	sex: '他',
	phone: 'LNX00426',
	wx_num: 'LNX00426',
	wx_img: 'LNX00426.jpg'
},
{
    name: '刘长旭',
	sex: '他',
	phone: 'LNX2779',
	wx_num: 'LNX2779',
	wx_img: 'LNX2779.jpg'
},
{
    name: '王凯',
	sex: '他',
	phone: 'LNX0551',
	wx_num: 'LNX0551',
	wx_img: 'LNX0551.jpg'
}
,
{
    name: '魏建林',
	sex: '他',
	phone: 'LNX0002',
	wx_num: 'LNX0002',
	wx_img: 'LNX0002.jpg'
}
,
{
    name: '于迪',
	sex: '他',
	phone: 'LNX345',
	wx_num: 'LNX345',
	wx_img: 'LNX345.jpg'
}
,
{
    name: '祖玉姝',
	sex: '他',
	phone: 'LNX660',
	wx_num: 'LNX660',
	wx_img: 'LNX660.jpg'
}
];

var n = Math.floor(Math.random() * arr.length + 1) - 1;

var name = arr[n]["name"];
var phone = arr[n]["phone"];
var wx_num = arr[n]["wx_num"];
var sex = arr[n]["sex"];
var wx_img = "<img src='./assets/images/" + arr[n]["wx_img"] + "' style='width:250px;'/>";

$(function() {

	//js调用bootstamp模态框开始

	$(".open_copy").on("click", function() {

		$(".bs-example-modal-lg").modal();

	})

	//js调用bootstamp模态框结束

	//一键复制开始

	new ClipboardJS('.open_copy', {

		text: function(trigger) {

			return wx_num;

		}

	});

	//一键复制结束

	//打开微信开始

	$(".btn_open_wx").on("click", function() {

		window.location.href = "weixin://";

	})

	//打开微信结束

	//动态销售客服二维码开始

	$(".user_info_qrcode").html(wx_img);
	$(".user_info_name").html(name);
	$(".user_info_phone").html(phone);
	$(".user_info_wx_num").html(wx_num);
	//动态销售客服二维码结束
})