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
    <form action="/bedrijf" method="POST">
        <?php echo csrf_field(); ?>
        <div class="flex justify-center flex-col items-center">
            <div>dfoghdouifghhsd</div>
            <div class="mb-4">
                <label class="text-white" for="bedrijfsnaam">Klant:</label>
                <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="kvk_nummer">KvK Nummer:</label>
                <input type="text" id="kvk_nummer" name="kvk_nummer" min="8" max="8" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="isbedrijf">Is Bedrijf:</label>
                <input type="checkbox" id="isbedrijf" name="isbedrijf" >
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
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/bedrijf/create.blade.php ENDPATH**/ ?>