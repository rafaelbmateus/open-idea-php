<input hidden="hidden" name="user_id" type="text" value="<?php if (isset($item->user_id)) echo $item->user_id; ?>" />

<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new');?></h4>
			<div class="row">
				<div class="input-field col s7">
					<?php if($this->session->userdata('user_type')=='admin'){ ?>
						<input name="email" type="text" required value="<?php if (isset($item)) echo $item->user_email; ?>"/>
					<?php }else{ ?>
						<input name="email" type="text" readonly value="<?php if (isset($item)) echo $item->user_email; ?>"/>
					<?php } ?>
					<label><?php echo $this->lang->line('email');?></label>
				</div>

				<div class="input-field col s5">
					<?php if($this->session->userdata('user_type')=='admin'){ ?>
						<select name="job_id" required>
							<option value="" disabled selected><?php echo $this->lang->line('choice_job'); ?></option>
							<?php if (isset($jobs)){ ?>
								<?php foreach ($jobs as $job ){ ?>
										<?php if ($job->job_id == $item->job_id){ ?>
											<option value="<?php echo $job->job_id; ?>" selected="selected"><?php echo $this->lang->line($job->job_name); ?></option>
										<?php }else{ ?>
											<option value="<?php echo $job->job_id; ?>"><?php echo $this->lang->line($job->job_name); ?></option>
											<?php } ?>
								<?php } ?>
							<?php } ?>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="divider"></div>
			<br>
			<div class="row">
				<div class="input-field col s7">
					<input name="name" type="text" required value="<?php if (isset($item)) echo $item->user_name; ?>"/>
					<label><?php echo $this->lang->line('name');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="description" class="materialize-textarea" length="1200" maxlength="1200"><?php if (isset($item)) echo 'description'; ?></textarea>
					<label><?php echo $this->lang->line('description');?></label>
				</div>
			</div>
			<?php if($view=='new'){ ?>
				<div class="row">
					<div class="input-field col s6">
						<input name="password" type="password" required
							value="<?php //if (isset($item)) echo $item->user_password; ?>"/>
						<label><?php echo $this->lang->line('password');?></label>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<!-- <div class="input-field col s5">
					<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module;?>"><?php echo $this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
				</div> -->
				<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save');?><i class="fa fa-check right"></i></button>
			</div>
		</div>
	</div>
</div>
