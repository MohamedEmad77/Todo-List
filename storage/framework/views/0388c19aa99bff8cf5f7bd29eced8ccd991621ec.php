<div class="form-group">
    <?php echo e(Form::label($name, null, ['class' => 'control-label'])); ?>

    <?php echo e(Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes))); ?>

</div>