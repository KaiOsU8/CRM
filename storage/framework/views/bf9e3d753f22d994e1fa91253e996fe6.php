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
<form action="<?php echo e(route('contact.update', $contact)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <select name="bedrijf_id">
                    <?php $__currentLoopData = $bedrijven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bedrijf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bedrijf->id); ?>" <?php echo e($contact->bedrijf_id == $bedrijf->id ? 'selected' : ''); ?>><?php echo e($bedrijf->bedrijfsnaam); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="text-white" for="voornaam">voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" value="<?php echo e($contact->voornaam); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="achternaam">achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" value="<?php echo e($contact->achternaam); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="straat">straat:</label>
                <input type="text" id="straat" name="straat" value="<?php echo e($contact->straat); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="huisnummer">huisnummer:</label>
                <input type="number" id="huisnummer" name="huisnummer" value="<?php echo e($contact->huisnummer); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="postcode">postcode:</label>
                <input type="text" id="postcode" name="postcode" value="<?php echo e($contact->postcode); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="plaats">plaats:</label>
                <input type="text" id="plaats" name="plaats" value="<?php echo e($contact->plaats); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="email">email:</label>
                <input type="email" id="email" name="email" value="<?php echo e($contact->email); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="telefoonnummer">telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" value="<?php echo e($contact->telefoonnummer); ?>" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="functie">functie:</label>
                <input type="text" id="functie" name="functie" value="<?php echo e($contact->functie); ?>" required>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\CRM\resources\views/contact/edit.blade.php ENDPATH**/ ?>