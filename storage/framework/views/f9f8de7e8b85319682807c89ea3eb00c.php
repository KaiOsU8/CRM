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
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20 text-white">Klanten in dienst</h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="bedrijf/create">Voeg klant toe</a>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Klant </th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">kvk_nummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bedrijf</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Overzicht</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Edit</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Remove</th>
                </tr>
                <?php $__currentLoopData = $bedrijfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bedrijf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($bedrijf->bedrijfsnaam); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($bedrijf->kvk_nummer); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($bedrijf->isbedrijf == 1 ? 'yes' : 'no'); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="/bedrijf/<?php echo e($bedrijf->id); ?>">Show</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="/bedrijf/<?php echo e($bedrijf->id); ?>/edit">Edit</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <form action="/bedrijf/<?php echo e($bedrijf->id); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/bedrijf/index.blade.php ENDPATH**/ ?>