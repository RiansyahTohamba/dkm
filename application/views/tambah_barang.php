<?php
/**
 * This is a bootstrapped form, you should pass along the following
 * array to this view to render it properly.
 *
 * $fields = array(
 *    array(
 *       'name' => What post variable it will return. [ex. first_name]
 *       'type' => The field type [ex. password, text, etc.]
 *       'default' => The default value for this field.
 *    )
 * )
 */
?>
<div class="span9"> 
    
<form class="form-horizontal" method="POST">
    
   <?php foreach ($fields as $field): ?>
      <?php $error = form_error($field['name']) ?>
    
      <div class="control-group <?php if(!empty($error)): ?>error<?php endif; ?>">
          <label class="control-label"><?= $field['label'] ?></label>
         <?php $value = set_value($field['name'], ($field['default']) ? $field['default'] : ''); ?>
          <?php form_error($field['name'],'<div class="error">','</div>') ?>
      	<div class="controls">
				<input 
               class="input-xlarge" 
               type="<?= $field['type'] ?>" 
               name="<?= $field['name'] ?>" 
               value="<?php if (!empty($value)) echo $value; ?>" 
            />
            <div class="help-block">
               <?= $error ?>
            </div>
			</div>
      </div>
   <?php endforeach; ?>
    
   <div class="form-actions">
       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
   	<a onclick="history.go(-1)" class="btn">Cancel</a>
   </div>
</form>
        </div>
    