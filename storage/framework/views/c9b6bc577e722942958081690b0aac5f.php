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
    <form action="<?php echo e(route('gesprek.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <select name="bedrijf_id">
                    <?php $__currentLoopData = $bedrijven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bedrijf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bedrijf->id); ?>" required><?php echo e($bedrijf->bedrijfsnaam); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprekdatum">Gesprek Datum:</label>
                <input type="date" id="gesprekdatum" name="gesprekdatum" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprektijd">Gesprek Tijd:</label>
                <input type="time" id="gesprektijd" name="gesprektijd" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprokenmet">Gesproken Met:</label>
                <input type="text" id="gesprokenmet" name="gesprokenmet" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="notitiegesprek">Notitie Gesprek:</label>
                <input type="text" id="notitiegesprek" name="notitiegesprek" required>
            </div>
            
        <button class="text-white flex self-center" type="submit">Create</button>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/gesprek/create.blade.php ENDPATH**/ ?>