<!--dropify-->
<!-- <link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
<!-- <script type="text/javascript" src="js/plugins/dropify/js/dropify.min.js"></script> -->

<!-- id -->
<input hidden="hidden" name="challenge_id" type="text" value="<?php if (isset($item->challenge_id)) echo $item->challenge_id; ?>" />

<!-- area -->
<div class="row">
	<div class="input-field col s6">
		<select name="area_id">
			<?php if (isset($innovation_areas)){ ?>
				<?php foreach ($innovation_areas as $area){ ?>
					<?php if($area->innovation_area_id == $item->area_id) { ?>
						<option selected value="<?php echo $area->innovation_area_id; ?>"><?php echo $area->area_name; ?></option>
					<?php }else{ ?>
						<option value="<?php echo $area->innovation_area_id; ?>"><?php echo $area->area_name; ?></option>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</select>
		<label><?php echo $this->lang->line('innovation_area'); ?></label>
	</div>

	<!-- deadline -->
	<!-- <div class="input-field col s2 offset-s2">
		<input name="challenge_deadline" type="date" class="datepicker" required>
		<label><?php echo $this->lang->line('deadline'); ?></label>
	</div> -->
</div>

<!-- title -->
<div class="row">
	<div class="input-field col s8">
		<input name="challenge_title" type="text" length="80" maxlength="80" required
			value="<?php if (isset($item)) echo $item->challenge_title; ?>"/>
		<label><?php echo $this->lang->line('title'); ?></label>
	</div>
</div>

<!-- description -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="challenge_description" class="materialize-textarea" length="1200" maxlength="1200" required><?php if (isset($item)) echo $item->challenge_description; ?></textarea>
		<label><?php echo $this->lang->line('description'); ?></label>
	</div>
</div>

<!-- attachment -->
<!-- <div class="row">
	<div class="file-field input-field col s6">
		<input class="file-path" type="text" readonly/>
		<div class="btn">
			<span><?php echo $this->lang->line('attachment'); ?></span>
			<input name="idea_attachment" type="file"/>
		</div>
	</div>
</div> -->

<br><br>

<!-- buttons confirm -->
<div class="row">
	<div class="input-field">
		<button class="btn cyan waves-effect waves-light col s12" type="submit"><?php echo $this->lang->line('save');?> <i class="fa fa-check"></i></button>
	</div>
</div>
