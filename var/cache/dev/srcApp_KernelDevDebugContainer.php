<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBwuuUUy\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBwuuUUy/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBwuuUUy.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBwuuUUy\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBwuuUUy\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BwuuUUy',
    'container.build_id' => 'bbfcd00e',
    'container.build_time' => 1574203484,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBwuuUUy');
