<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKziEfmv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKziEfmv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKziEfmv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKziEfmv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKziEfmv\App_KernelDevDebugContainer([
    'container.build_hash' => 'KziEfmv',
    'container.build_id' => '2e84cb6f',
    'container.build_time' => 1601331250,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKziEfmv');