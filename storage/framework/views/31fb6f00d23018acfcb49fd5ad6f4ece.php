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
        <h1 class="text-center text-4xl m-20 text-white">Klant overzicht</h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="<?php echo e(route('contact.create')); ?>">Voeg contact toe</a>
        <h1 class="text-center text-2xl mb-20 text-white">Contacten van <?php echo e($bedrijf->bedrijfsnaam); ?></h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Contact name</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Achternaam</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Straat</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Huisnummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Postcode</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Plaats</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Email</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Telefoonnummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Functie</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bewerken</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Verwijderen</th>
                </tr>
                <?php $__currentLoopData = $bedrijf->contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->voornaam); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->achternaam); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->straat); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->huisnummer); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->postcode); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->plaats); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->email); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->telefoonnummer); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($contact->functie); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="<?php echo e(route('contact.edit', $contact)); ?>">Edit</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                    <form action="<?php echo e(route('contact.destroy', $contact)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <h1 class="text-center text-2xl m-20 text-white">Gesprekken van <?php echo e($bedrijf->bedrijfsnaam); ?></h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="<?php echo e(route('gesprek.create')); ?>">Voeg gesprek toe</a>
        <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesprek datum</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesprek tijd</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesproken met</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Notities</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bewerken</th>
                </tr>
                <?php $__currentLoopData = $bedrijf->gespreks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gesprek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($gesprek->gesprekdatum); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($gesprek->gesprektijd); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($gesprek->gesprokenmet); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1"><?php echo e($gesprek->notitiegesprek); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="<?php echo e(route('gesprek.edit', $gesprek)); ?>">Edit</a>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/bedrijf/show.blade.php ENDPATH**/ ?>