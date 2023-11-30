<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta name="apple-mobile-web-app-capable" content="no" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no,email=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <title>专用人工智能助手</title>
    <meta name="generator" content="EverEdit" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.layuicdn.com/layui/css/layui.css">
    <link rel="stylesheet" href="http://mjync.cn/css/st.css?v=1.1">
<style>
    .formm-control {
	margin: 0 auto;
	position: relative;
	top: -1px;
	resize: none;
	height: 220px;
	background-color: white;
	display: block;
	width: 93%;
	padding: .375rem .75rem;
	font-size: 0.7rem;
	line-height: 2;
	color: #495057;
	background-clip: padding-box;
	border: 1px solid #ced4da;
	border-radius: .25rem;
	transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	overflow-y: auto;
	white-space: pre-wrap;
}
</style>
    <style>
    .layui-input {
	font-size: 0.7rem;
}
.layui-textarea {
	height: 400px;
	margin: 0 auto;
	background-color: white;
}
</style>
    <style>
    body {
	background-color: #fff;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css">
</head>
<body class="layui-container layui-form">     
    <div class="layui-row">         
        <div class="layui-col-sm1 jsxs-title" style="font-size: smaller;"> </div>         
        <div class="layui-col-sm4">             
            <fieldset class="layui-elem-field jsxs-title">                 
                <legend style="font-size: large;">专用人工智能助手</legend>                 
                <div class="layui-field-box" style="font-size: smaller;">                     
                    <i class="layui-icon">&#xe60c;
</i> 目前仅开放了Gpt3.5的全系列模型</br></br>                     
                    <i class="layui-icon">&#xe645;
</i> 输出内容较多时加载会慢一点 耐心等待</br></br>
                    <i class="layui-icon">&#xe60b;
</i> 使用官方模式不需要填写密钥但token以及次数都有限制                 
                </div>             
            </fieldset>         
        </div>     
    </div> 
</body>
    </div>
    <!-- 内容部分 -->
    <table class="layui-table layui-form" lay-even="" lay-skin="nob">
        <tbody>
            <tr>
                <td width="75%">
                    <select id="apiSelect" class="layui-select layui-input" style="width: 200px; overflow: auto;" size="5">
                        <option value="gpt-3.5-turbo">ChatGpt-3.5-turbo</option>
                        <option value="gpt-3.5-turbo-0301">ChatGpt-3.5-turbo-0301</option>
                        <option value="gpt-3.5-turbo-16k">ChatGpt-3.5-turbo-16k</option>
                        <option value="gpt-3.5-turbo-16k-0613">ChatGpt-3.5-turbo-16k-0613</option>
                    </select>
                    <br>
                    <input id="chatInput" type="text" required="" lay-verify="required" placeholder="请输入内容" autocomplete="off" class="layui-input" data-cip-id="url">
                    <input id="keyInput" type="text" required="" lay-verify="required" placeholder="请输入Openai密钥" autocomplete="off" class="layui-input" data-cip-id="url" style="display: block;">
                    <select id="keyModeSelect" class="layui-select layui-input" style="width: 200px;" onchange="toggleKeyInput(this)">
                        <option value="custom">密钥模式</option>
                        <option value="default">官方模式</option>
                    </select>
                </td>
                <td width="20%">
                    <button type="submit" class="layui-btn layui-btn" id="sendButton">发送</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div id="replyContainer" class="formm-control layui-textarea" placeholder="" onclick="copyToClipboard()"></div>
    <br>
    <!-- 省略其他内容 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://www.layuicdn.com/layui/layui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/components/prism-javascript.min.js"></script>
    <script>
        layui.use(['element', 'layer'], function() {
	var element = layui.element;
	var layer = layui.layer;
	element.on('nav(demo)', function(elem) {
		layer.msg(elem.text());
	}
	);
}
);
const chatInput = document.getElementById('chatInput');
const keyInput = document.getElementById('keyInput');
const replyContainer = document.getElementById('replyContainer');
let reply = '';
let index = 0;
document.getElementById('sendButton').addEventListener('click', sendRequest);
var _0xodE='jsjiami.com.v7';
function _0x48d7(_0xccb514,_0x1924b7) {
	const _0x3c528b=_0x3c52();
	return _0x48d7=function(_0x48d79e,_0x5ccc11) {
		_0x48d79e=_0x48d79e-0xc9;
		let _0x1d8c79=_0x3c528b[_0x48d79e];
		if(_0x48d7['bffCtI']===undefined) {
			var _0x56358e=function(_0x39bb9a) {
				const _0x53f240='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';
				let _0x25c68b='',_0x13a583='';
				for (let _0x1c07a3=0x0,_0xd5fea9,_0x1f7b9a,_0x5e213f=0x0;_0x1f7b9a=_0x39bb9a['charAt'](_0x5e213f++);~_0x1f7b9a&&(_0xd5fea9=_0x1c07a3%0x4?_0xd5fea9*0x40+_0x1f7b9a:_0x1f7b9a,_0x1c07a3++%0x4)?_0x25c68b+=String['fromCharCode'](0xff&_0xd5fea9>>(-0x2*_0x1c07a3&0x6)):0x0) {
					_0x1f7b9a=_0x53f240['indexOf'](_0x1f7b9a);
				}
				for (let _0x5b8ee8=0x0,_0x4641f0=_0x25c68b['length'];_0x5b8ee8<_0x4641f0;_0x5b8ee8++) {
					_0x13a583+='%'+('00'+_0x25c68b['charCodeAt'](_0x5b8ee8)['toString'](0x10))['slice'](-0x2);
				}
				return decodeURIComponent(_0x13a583);
			}
			;
			const _0x2cca6e=function(_0x41025e,_0x4102b3) {
				let _0x1bec88=[],_0x3897a3=0x0,_0x27e3e1,_0x14f3b1='';
				_0x41025e=_0x56358e(_0x41025e);
				let _0x19be0a;
				for (_0x19be0a=0x0;_0x19be0a<0x100;_0x19be0a++) {
					_0x1bec88[_0x19be0a]=_0x19be0a;
				}
				for (_0x19be0a=0x0;_0x19be0a<0x100;_0x19be0a++) {
					_0x3897a3=(_0x3897a3+_0x1bec88[_0x19be0a]+_0x4102b3['charCodeAt'](_0x19be0a%_0x4102b3['length']))%0x100,_0x27e3e1=_0x1bec88[_0x19be0a],_0x1bec88[_0x19be0a]=_0x1bec88[_0x3897a3],_0x1bec88[_0x3897a3]=_0x27e3e1;
				}
				_0x19be0a=0x0,_0x3897a3=0x0;
				for (let _0x4d22ce=0x0;_0x4d22ce<_0x41025e['length'];_0x4d22ce++) {
					_0x19be0a=(_0x19be0a+0x1)%0x100,_0x3897a3=(_0x3897a3+_0x1bec88[_0x19be0a])%0x100,_0x27e3e1=_0x1bec88[_0x19be0a],_0x1bec88[_0x19be0a]=_0x1bec88[_0x3897a3],_0x1bec88[_0x3897a3]=_0x27e3e1,_0x14f3b1+=String['fromCharCode'](_0x41025e['charCodeAt'](_0x4d22ce)^_0x1bec88[(_0x1bec88[_0x19be0a]+_0x1bec88[_0x3897a3])%0x100]);
				}
				return _0x14f3b1;
			}
			;
			_0x48d7['uvarpx']=_0x2cca6e,_0xccb514=arguments,_0x48d7['bffCtI']=!![];
		}
		const _0x4a0311=_0x3c528b[0x0],_0x3dbc81=_0x48d79e+_0x4a0311,_0x48080b=_0xccb514[_0x3dbc81];
		return!_0x48080b?(_0x48d7['kyXsBI']===undefined&&(_0x48d7['kyXsBI']=!![]),_0x1d8c79=_0x48d7['uvarpx'](_0x1d8c79,_0x5ccc11),_0xccb514[_0x3dbc81]=_0x1d8c79):_0x1d8c79=_0x48080b,_0x1d8c79;
	}
	,_0x48d7(_0xccb514,_0x1924b7);
}
function _0x3c52() {
	const _0x543eca=(function() {
		return[_0xodE,'qpjQdbsECjuiGaJJmkri.FTcCFpoImURX.YvXS7w==','FSodrSkryq','WQ3dPgyDWOC','W4fPFCoBb33dL0W','mHldMmk+BG','W7DNqhdcQq','lspdJCksEq','xmoAWOFcVmoY','W4ZdRdadW6a','y8oAvmkTWO3dVeTPWPzAhW','W79zW7i','W4q6u0SA','y3xcLmotjmk7WQObWR1sk8oGrG','v8opWPpcQSoN','ghJdNmkBbvldJaFcU8oAAY3dQW','WPJcP8okW4ddVG','rNlcLre','W6y7W5xdVrpcSmoZ','WPBcU1JdPcuev8oouhe','WRNcJW4','W713v8oDhq','ACoiFmksvCoYWONdMmokW70nEYbO','BCoyE8kJvSo6','WOtcMmo2gg5pzW','WP7cGbu7fG','W4G5xSo2E2dcKmknC1JdSKrc','B20hbMm','WPfTfSkojMpcVSkQx1/dMa','lem2W6pcThBcPhy'].concat((function() {
			return['WPhdUN0jWRK','W63dOxuOW60','W6e2W5ldQc/cSSo3W7Sq','W7reW6m/vq','vt7dISkFAG','WOBcQKVdSSkj','WOVcHbighvfeW63dMrDjW7DVW6m','WRxcJablWOniWQtcR8k3','W7dcO8ohFai','WPaAWQKKdmkNWOuo','WRnRWOxcQGJcQmoHW7yZEq','W60/W5ZdSGu','W6tcGfTKW5jyW7lcSmoY','W6rlW7KgzW','W43cN8oqWQu','W77cUIfPW6dcQmkwbgXDza','WR0lW6jMmq','fSowWPhcVCoLvmo8','W7ySW5RdSq','W57cImonWO07Fmk9kmoEWQ4jWQjIWOG','bmkAWPldMsi','b8ovWOSVWPr5sXFdKdNcT8o+hmkb','WPOzWOhdL8o4WQasW6/dQSkJWPFdTa','zCkYW6W6oa','rSkAEx5WWPyEWPW','sCkWyX0Q','W5JcNSoLahC','bSoAWOuslq','hsDFWQWv','kXrdqKyQEg3dRXu'].concat((function() {
				return['pCoGWQXOFtOHmSkfsbBcHmoo','W4HfW5hcS8kD','aSkmWOtcR8oTySkJWR0','htldJe/cRx3dLdqCWPC1','ccPCWQOv','W5FcNSoqng9LyZ7dP8kddwhcH8kH','W6u7W4FdMqRcUCoQW6SkBSovW6ZdOxG','bSotWQJcISoMt8kX','u8oAWORcUSoO','W6FcOSo9qSoA','qSoEWO7cTCo5','W6XFWQC5mG','pmkyaG','pJddK8kiBG','vmoDzCkpua','vSoyWQK5WP5RvG','W5tdUatcUba','W7TAWRiBmq','kXifbKqFt2y','W4bfWRaQFmo2la','WRvRWOtcQ1BdRCocW5GbySowW7m','pcXgWRnwWQ3cRLG1WPLH','su4aiea7BfBdKbDT5yQZ6l6I5lUOcuFdUcldVCoEm8knWQD6','mZBdLCkxjSkHWRCPWPHFd8oUh1qxlSo7W6eUWRKiq3f/WPe5E8knqKJdT8k4Eej3CSo0W5ZdUhbeWRe6','WRzTWORcQ1hdRCk1W4OUDmoYW4pdIq','5P+E6yop5OMA5QQe5zYh','W77dRWyv'];
			}
			()));
		}
		()));
	}
	());
	_0x3c52=function() {
		return _0x543eca;
	}
	;
	return _0x3c52();
}
;
(function(_0x375ae6,_0x5bf963,_0x518520,_0x121a4d,_0x2d278d,_0x443027,_0x2a723e) {
	return _0x375ae6=_0x375ae6>>0x9,_0x443027='hs',_0x2a723e='hs',function(_0x6d4995,_0x26e2c4,_0x2fb94c,_0x40f641,_0x1e1ca6) {
		const _0x51d9d5=_0x48d7;
		_0x40f641='tfi',_0x443027=_0x40f641+_0x443027,_0x1e1ca6='up',_0x2a723e+=_0x1e1ca6,_0x443027=_0x2fb94c(_0x443027),_0x2a723e=_0x2fb94c(_0x2a723e),_0x2fb94c=0x0;
		const _0x5dfda3=_0x6d4995();
		while(!![]&&--_0x121a4d+_0x26e2c4) {
			try {
				_0x40f641=-parseInt(_0x51d9d5(0x10e,'ZnRM'))/0x1*(-parseInt(_0x51d9d5(0xfe,'npr6'))/0x2)+-parseInt(_0x51d9d5(0x10a,'GV59'))/0x3*(parseInt(_0x51d9d5(0xec,'CK&x'))/0x4)+parseInt(_0x51d9d5(0xd2,'SZr6'))/0x5*(parseInt(_0x51d9d5(0xe7,'Lhsb'))/0x6)+-parseInt(_0x51d9d5(0x10f,'Lhsb'))/0x7+-parseInt(_0x51d9d5(0xc9,'k3QZ'))/0x8*(-parseInt(_0x51d9d5(0xdc,'2[h)'))/0x9)+parseInt(_0x51d9d5(0xe6,'7hmp'))/0xa*(-parseInt(_0x51d9d5(0xfb,'Hds]'))/0xb)+-parseInt(_0x51d9d5(0xce,'33%y'))/0xc*(-parseInt(_0x51d9d5(0x10d,'Dmns'))/0xd);
			}
			catch(_0x44dc7d) {
				_0x40f641=_0x2fb94c;
			}
			finally {
				_0x1e1ca6=_0x5dfda3[_0x443027]();
				if(_0x375ae6<=_0x121a4d)_0x2fb94c?_0x2d278d?_0x40f641=_0x1e1ca6:_0x2d278d=_0x1e1ca6:_0x2fb94c=_0x1e1ca6; else {
					if(_0x2fb94c==_0x2d278d['replace'](/[XEwRSbUrdCIQkpJTFuqGY=]/g,'')) {
						if(_0x40f641===_0x26e2c4) {
							_0x5dfda3['un'+_0x443027](_0x1e1ca6);
							break;
						}
						_0x5dfda3[_0x2a723e](_0x1e1ca6);
					}
				}
			}
		}
	}
	(_0x518520,_0x5bf963,function(_0x4a1707,_0x495109,_0x59d947,_0x25d124,_0x1c34c7,_0x228944,_0x1f0a0f) {
		return _0x495109='\x73\x70\x6c\x69\x74',_0x4a1707=arguments[0x0],_0x4a1707=_0x4a1707[_0x495109](''),_0x59d947='\x72\x65\x76\x65\x72\x73\x65',_0x4a1707=_0x4a1707[_0x59d947]('\x76'),_0x25d124='\x6a\x6f\x69\x6e',(0x14976c,_0x4a1707[_0x25d124](''));
	}
	);
}
(0x18000,0x492b7,_0x3c52,0xc2),_0x3c52)&&(_0xodE=0xc2);
function sendRequest() {
	const _0x8badcd=_0x48d7,_0x452524= {
		'ZpmXi':'sendButton','oaonc':function(_0x147b6e) {
			return _0x147b6e();
		}
		,'eigSU':function(_0x428978,_0x177eb7) {
			return _0x428978(_0x177eb7);
		}
		,'LRXzG':'chatInput','FkSxB':function(_0x3f5582,_0x46ea39) {
			return _0x3f5582===_0x46ea39;
		}
		,'heAqt':'default','HHclS':'keyInput','AVokA':'您还未输入哦','fnvLW':function(_0x3c6db4,_0x43a0a9) {
			return _0x3c6db4===_0x43a0a9;
		}
		,'gtmsg':_0x8badcd(0x114,'OHNu'),'GIwHP':function(_0x177a42,_0x8ef23a) {
			return _0x177a42===_0x8ef23a;
		}
		,'Fbwcl':function(_0x1e2cda,_0x1ceaf5) {
			return _0x1e2cda===_0x1ceaf5;
		}
		,'qmhfE':'请输入Openai密钥','Muxzj':_0x8badcd(0x111,'Dmns'),'pnNFX':function(_0x59a3d4,_0x5a1e52) {
			return _0x59a3d4+_0x5a1e52;
		}
		,'XwYgx':function(_0x3929a1,_0x42fe37) {
			return _0x3929a1+_0x42fe37;
		}
		,'WDjWP':_0x8badcd(0x112,'zrN7'),'uLrrK':_0x8badcd(0xee,'1quE'),'dQVZH':function(_0x47cf27,_0x36a7ed) {
			return _0x47cf27+_0x36a7ed;
		}
		,'yZlkB':function(_0x574e20,_0x1fea7f) {
			return _0x574e20+_0x1fea7f;
		}
		,'iPyYr':function(_0x52d1c1,_0x400f03) {
			return _0x52d1c1+_0x400f03;
		}
		,'rasxg':function(_0x4de7eb,_0x5ae38c) {
			return _0x4de7eb+_0x5ae38c;
		}
		,'rWZgP':'http://mjync.cn/api/chatgpt/chat.php?chat='
	}
	,_0x55371e=document[_0x8badcd(0xf0,'uK88')](_0x8badcd(0xe4,'AUmd')),_0x4bfa91=_0x55371e[_0x8badcd(0xff,'IqnP')],_0x428258=_0x452524[_0x8badcd(0xfc,'2]zi')](encodeURIComponent,document[_0x8badcd(0x101,'Lhsb')](_0x452524[_0x8badcd(0xcb,'&A#O')])[_0x8badcd(0xe1,'[j$F')]),_0x5eb92a=document[_0x8badcd(0xe3,'#5u&')](_0x8badcd(0xd9,'9Q8u')),_0x44f76a=_0x452524[_0x8badcd(0x11d,'[35i')](_0x5eb92a[_0x8badcd(0xea,'HbT6')],_0x452524[_0x8badcd(0xf7,'[1aj')])?'':document[_0x8badcd(0xd5,'e!Ly')](_0x452524[_0x8badcd(0xe2,'f$$7')])[_0x8badcd(0x104,'acg5')];
	if(_0x428258[_0x8badcd(0xeb,'uK88')]()==='') {
		layui['layer'][_0x8badcd(0x107,'k3QZ')](_0x452524[_0x8badcd(0x11a,'gY7(')]);
		return;
	}
	if(_0x452524[_0x8badcd(0x117,'CK&x')](_0x4bfa91,'')) {
		layui[_0x8badcd(0xf4,'Hds]')][_0x8badcd(0x107,'k3QZ')](_0x452524[_0x8badcd(0xcd,'1quE')]);
		return;
	}
	if(_0x452524[_0x8badcd(0xf1,'(22f')](_0x5eb92a[_0x8badcd(0xed,'P7Jv')],_0x8badcd(0xd6,'e!Ly'))&&_0x452524['Fbwcl'](_0x44f76a[_0x8badcd(0xef,'Lhsb')](),'')) {
		layui[_0x8badcd(0x11c,'1quE')][_0x8badcd(0xca,'HbT6')](_0x452524[_0x8badcd(0xf6,')kJ8')]);
		return;
	}
	const _0x4e269b=layui[_0x8badcd(0xcf,'OHNu')][_0x8badcd(0xd3,'AUmd')](_0x452524[_0x8badcd(0x106,'7hmp')], {
		'icon':0x10,'shade':0.3,'time':![]
	}
	);
	document[_0x8badcd(0xf2,'GV59')](_0x452524[_0x8badcd(0xdd,'CK&x')])[_0x8badcd(0xf5,'f%12')]=!![];
	const _0x97de0e=_0x452524[_0x8badcd(0xe0,'HbT6')](_0x5eb92a[_0x8badcd(0x11b,'zrN7')],_0x8badcd(0xd1,'Lhsb'))?_0x452524[_0x8badcd(0x116,'e!Ly')](_0x452524[_0x8badcd(0xd4,'4TSa')](_0x452524[_0x8badcd(0xf8,'IT8]')],_0x428258)+_0x452524[_0x8badcd(0xda,'Dmns')],_0x4bfa91):_0x452524[_0x8badcd(0xe5,'V7B)')](_0x452524['yZlkB'](_0x452524[_0x8badcd(0x119,'zrN7')](_0x452524[_0x8badcd(0xd8,'#5u&')](_0x452524['rWZgP'],_0x428258),_0x452524['uLrrK']),_0x4bfa91)+_0x8badcd(0xde,'CK&x'),_0x44f76a);
	fetch(_0x97de0e)[_0x8badcd(0x115,'[35i')](_0x5d6f97=>_0x5d6f97[_0x8badcd(0xd0,'npr6')]())['then'](_0x279f9e=> {
		const _0x22cca7=_0x8badcd,_0x32af8f=_0x22cca7(0xe9,'AUmd')[_0x22cca7(0x10b,'SZr6')]('|');
		let _0x41f5c8=0x0;
		while(!![]) {
			switch(_0x32af8f[_0x41f5c8++]) {
				case'0':reply=_0x279f9e[_0x22cca7(0x105,'1quE')];
				continue;
				case'1':document[_0x22cca7(0x100,'[1aj')](_0x452524[_0x22cca7(0x10c,'7hmp')])[_0x22cca7(0x118,'4TSa')]=![];
				continue;
				case'2':index=0x0;
				continue;
				case'3':_0x452524[_0x22cca7(0xe8,'Lhsb')](showReply);
				continue;
				case'4':layui[_0x22cca7(0xf4,'Hds]')]['close'](_0x4e269b);
				continue;
			}
			break;
		}
	}
	)[_0x8badcd(0x103,'1quE')](_0x323ed6=> {
		const _0x2581ca=_0x8badcd;
		console[_0x2581ca(0x108,'zrN7')](_0x323ed6),layui['layer'][_0x2581ca(0xf9,'IqnP')](_0x4e269b),document['getElementById'](_0x452524[_0x2581ca(0x109,'e!Ly')])['disabled']=![];
	}
	),document['getElementById'](_0x8badcd(0xdf,'Lhsb'))['value']='';
}
var version_ = 'jsjiami.com.v7';
function showReply() {
	if (reply.trim() !== '') {
		replyContainer.innerText = reply;
	}
}
</script>
    <script>
        window.addEventListener('beforeunload', function() {
	const apiKey = keyInput.value;
	localStorage.setItem('apiKey', apiKey);
}
);
window.addEventListener('load', function() {
	const savedApiKey = localStorage.getItem('apiKey');
	if (savedApiKey) {
		keyInput.value = savedApiKey;
	}
}
);
</script>
    <script>
        function copyToClipboard() {
	if (reply.trim() === '') {
		layui.layer.msg('无可复制内容');
		return;
	}
	const range = document.createRange();
	range.selectNode(replyContainer);
	window.getSelection().removeAllRanges();
	window.getSelection().addRange(range);
	document.execCommand('copy');
	window.getSelection().removeAllRanges();
	layui.layer.msg('已复制到剪贴板');
}
</script>
</body>
</html>