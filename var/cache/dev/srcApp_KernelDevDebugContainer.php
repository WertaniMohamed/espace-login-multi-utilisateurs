<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7b37q10\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7b37q10/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7b37q10.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7b37q10\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container7b37q10\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '7b37q10',
    'container.build_id' => '31148b39',
    'container.build_time' => 1574116777,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7b37q10');
