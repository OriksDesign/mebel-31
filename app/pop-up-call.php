	<div class="hidden">	
		<div id="call-popup" class="white-popup mfp-hide">
			<form name="form" class="form-call">
				<div class="success">Спасибо за заявку! <br>
					Наши менеджеры свяжутся с вами в ближайшее время.</div>		
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="mebel-31.com.ru">
				<input type="hidden" name="admin_email" value="admin@mebel-31.com.ru">
				<input type="hidden" name="form_subject" value="Заказ звонка, с сайта.">		
				<h4>Заявка на обратный звонок</h4>
				<div class="">
					<i class="glyphicon glyphicon-user"></i>
					<input  class="form-value" name="Name" type="text" placeholder="Ваше имя" required>
				</div>									
				<div class="">
					<i class="glyphicon glyphicon-earphone"></i>
					<input class="form-value" name="Phone" type="text" placeholder="Ваш телефон" required>
				</div>
				<div>
					<p>Комментарии помогут нам определить специалиста для звонка Вам.</p>
					<i class="glyphicon glyphicon-pencil"></i>			
					<textarea rows="10" cols="45" class="input-lage focused form-value" name="Text" placeholder="Ваш комментарий"></textarea>
				</div>
				<div>
					<i class="glyphicon glyphicon-ok"></i>
					<select class="form-value" name="Select">
						<option value="">Выберите тип мебели</option>
						<option value="Мягкая мебель">Мягкая мебель</option>
						<option value="Корпусная мебель">Корпусная мебель</option>
					</select>
				</div>
				<div class="submit-call">					
					<input class="formname btn btn-block btn-success button" name="send" type="submit" value="Заказать звонок">
				</div>
			</form>
		</div>
	</div>