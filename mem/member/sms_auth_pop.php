<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��Ŀ���н� ���ջ���Ʈ</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="/css/popup.css" />
</head>
<body>
	<div class="popup_join">
		<h1><img src="/img/popup/tit_01.gif" alt="�н����� ��������" /></h1>
		<div class="con">
			<h3>�ڵ�����ȣ ����</h3>
			<p class="tip_text" style="margin-bottom:20px;">�ڵ������� ���� ������ȣ �Է� �� Ȯ���� ���� �ּ���.</p>
			<div class="check_num">
				<label><img src="/img/popup/text_01.gif" alt="������ȣ" /></label>
				<input type="text" class="checkNum" />
			</div>
			<p class="tip_text" style="margin-bottom:35px;"><span style="font-size:12px;">��</span> ��������� �н����Ŀ��� �δ��մϴ�</p>
			<h3><img src="/img/popup/text_02.gif" alt="������ȣ�� �������� �ʴ´ٸ�?" /></h3>
			<ul class="check_text">
				<li>�������� �õ��� �ּ���.</li>
				<li>������ ���� �� ��Ż翡 �����Ͻñ� �ٶ��ϴ�.</li>
				<li>��Ż� ���� �� ���ܼ���, �޽����� �뷮 �ʰ� ����,<br />���Թ������� Ȯ���� �ּ���.</li>
			</ul>
			<div class="btn">
				<a href="" id="ok"><img src="/img/popup/btn_ok.gif" alt="Ȯ��" /></a>
				<a href="#"><img src="/img/popup/btn_re.gif" alt="������" /></a>
			</div>
		</div>
	</div>
	<script src="/js/jquery-1.8.1.min.js"></script>
	<script>
		$("#ok").click(function() {
			if($(".checkNum").val() == '1234') {
				confirm('�����Ǿ����ϴ�.');
				window.close();
			}else {
				alert('������ȣ�� �ٽ� Ȯ�����ּ���.');
			}
		})
	</script>
</body>
</html>