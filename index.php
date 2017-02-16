   <div id="popup_contacthead" class="popup_block">
			<div class="newform-infoblock_form" >
				<form id="form" action="" method="POST" >
				<a href="#" title="Закрыть" class="close">  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>    </a>
					<span class="newform-form-title">Заявкахеад</span>
					
					<div class="newform-two-input">
					<div class="newform-two-input_item" style="width:50%;">
					 <label><i>Имя:</i></label>
					 <input type="email" id="email" name="email" class="txt">
					</div>
				    <div class="newform-two-input_item newform-two-input_item-two"  style="width:50%;">
				     <label><i>Телефон:</i></label>
					 <input type="text" name="PHONE" required="required">
					</div>						
					</div>
					<div class="newform-textarea">
				     <label><i>Комментарий</i></label>
				     <textarea type ="text" name="COMMENT" required="required"></textarea>
					</div>
					<div class="newfrom-submit">
				     <input type="submit" name="submittwo">
				<!--	<input type="hidden" name="formData" value="Заявка с сайта">-->
					</div>
				</form>
			</div>
			<style>
			.txt:focus, .txtarea:focus { border-style: solid; border-color: #bababa; color: #444; }

input.error, textarea.error { border-color: #973d3d; border-style: solid; background: #f0bebe; color: #a35959; }
input.error:focus, textarea.error:focus { border-color: #973d3d; color: #a35959; }
			</style>
			
			<script type="text/javascript">
	function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}

	$(document).ready(function() {
		$(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });

		
		$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			if(mailvalid == true && msglen >= 4) {
				// если обе проверки пройдены
				// сначала мы скрываем кнопку отправки
				</script>
			
