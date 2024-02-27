<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<form action="<?php echo e(route('gesprek.update', $gesprek)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <label class="text-white" for="gesprekdatum">Gesprek Datum:</label>
                <input type="date" id="gesprekdatum" name="gesprekdatum" value="<?php echo e($gesprek->gesprekdatum); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprektijd">Gesprek Tijd:</label>
                <input type="time" id="gesprektijd" name="gesprektijd" value="<?php echo e($gesprek->gesprektijd); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprokenmet">Gesproken Met:</label>
                <input type="text" id="gesprokenmet" name="gesprokenmet" value="<?php echo e($gesprek->gesprokenmet); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="notitiegesprek">Notitie Gesprek:</label>
                <input type="text" id="notitiegesprek" name="notitiegesprek" value="<?php echo e($gesprek->notitiegesprek); ?>" required>
            </div>
            
        <button class="text-white flex self-center" type="submit">Update</button>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/gesprek/edit.blade.php ENDPATH**/ ?>