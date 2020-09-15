<select class="form-control"  name="courses" value="" required="required">
	<?php if($courses){
		foreach($courses as $val){?>
			<option value="<?= $val['id'];?>">(<?= $val['code'];?>) - <?= $val['title'];?></option>
		<?php }
	}?>
    <option value="">--Select Courses--</option>
     
</select>