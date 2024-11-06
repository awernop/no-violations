
 <div class='container'>
  <div>
    <form method="POST" action="<?php echo e(route('reports.store')); ?>" class='report'>
      <?php echo csrf_field(); ?>
      <input name="number" type="text" placeholder="Номер авто" required class="input">
      <textarea name="description" placeholder="Описание" class="input"></textarea>
      <button type="submit" class="add">Добавить</button>
    </form>
  </div>
    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class='card'>
        <span class='card__number'><?php echo e($report['number']); ?></span>
        <p class='card__description'><?php echo e($report['description']); ?></p>
        <form method="POST" action="<?php echo e(route('reports.destroy', $report->id)); ?>">
          <?php echo method_field('delete'); ?>
          <?php echo csrf_field(); ?>
          <input type="submit" value="Удалить" class="delete">
        </form>
        <a href="<?php echo e(route('reports.update', $report->id)); ?>"></a>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
<?php /**PATH D:\xampp\htdocs\laravelproject\resources\views/report/index.blade.php ENDPATH**/ ?>