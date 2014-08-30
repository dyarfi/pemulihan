<div id="subBanner">
	<h4>Contact Us</h4>
	<?php //if ($page_category && $category_files):?>
	<div id="subBanner">
		<h4><?php echo ucfirst($page_category->title); ?></h4>
		<?php
			$file_img = !empty($category_files[$page_category->id]->file_name) ? $category_files[$page_category->id]->file_name : '';
			$caption = !empty($category_files[$page_category->id]->caption) ? text::limit_words(strip_tags($category_files[$page_category->id]->caption),20) : 'Title not available';
			if (is_file($category_upload_url . $file_img)) :
				$file_data = URL::base().$category_upload_url.str_replace('.', '_crop_640x121.', $file_img);
			else :
				$file_data = IMG . 'themes/content/subbanner_contact.jpg';
			endif;
		?>
		<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
	</div><!-- end subBanner -->	
	<?php //endif; ?>				
</div><!-- end subBanner -->	
<ul id="breadcrumb">
	<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
	<li>/</li>
	<li><a href="<?php echo URL::site('contact');?>" title="Contact">Contact</a></li>					
</ul><!-- end breadcrumb -->
<div id="content">	
	<div class="boxContact">
		<p>
			Bila Anda mempunyai pertanyaan, kirimkan pertanyaan Anda kepada kami melalui email di bawah ini. Kami dengan sendang hati akan membantu Anda. Tuhan memberkati.
		</p>
		<?php echo $result ? '<div class="result_apply">'. $result .'</div>' : ''; ?>
		<?php echo Form::open(URL::site('contact'),array('class'=>'formContact','method'=>'POST')); ?>
			<fieldset>
				<div class="formBox_top"></div>
				<div class="formBox_mid">
					<div class="isiMid">
					<div class="contentInput">
						<label for="contacting">Contact:</label>
						<span class="">
						<select id="contacting" name="contacting">
							<option value=""></option>
							<?php foreach ($email_contact as $email):?>
							<option value="<?php echo base64_encode($email->value); ?>" <?php echo ($fields['contacting'] == base64_encode($email->value)) ? 'selected="selected"' : '';?>>
								<?php echo str_replace('Email ','',HTML::chars(ucfirst($email->alias),TRUE)); ?>
							</option>
							<?php endforeach;?>
						</select>
						<?php echo sprintf($errors['contacting'], 'Contacting'); ?>
						</span>
					</div>
					<div class="contentInput">
						<label for="name">Name :</label>										
						<span class="box_input">
						<?php echo Form::input('name',!empty($fields['name']) ? $fields['name'] : '',array('class'=>'input')); ?>
						<?php echo sprintf($errors['name'], 'Name'); ?>
						</span>
					</div>
					<div class="contentInput">
						<label for="email">Email :</label>										
						<span class="box_input">
						<?php echo Form::input('email',!empty($fields['email']) ? $fields['email'] : '',array('class'=>'input')); ?>
						<?php echo sprintf($errors['email'], 'Email'); ?>
						</span>
					</div>
					<div class="contentInput">
						<label for="message">Message :</label>									
						<span class="box_area">
						<?php echo Form::textarea('message',!empty($fields['message']) ? $fields['message'] : '',array('class'=>'txtarea')); ?>
						<?php echo sprintf($errors['message'], 'Message'); ?>
						</span> 
					</div>
						<div class="clear">
							<span class="boxSend">
								<?php echo Form::submit('submit','Send',array('class'=>'btn_send'));?>
							</span>
						</div>
					</div>									
				</div>
				<div class="formBox_bot"></div>								
			</fieldset>
		<?php echo Form::close(); ?>
	</div>
</div><!-- end content -->