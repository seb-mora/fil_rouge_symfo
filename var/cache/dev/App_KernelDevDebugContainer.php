<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPojKFrB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPojKFrB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPojKFrB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPojKFrB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPojKFrB\App_KernelDevDebugContainer([
    'container.build_hash' => 'PojKFrB',
    'container.build_id' => 'c906c345',
    'container.build_time' => 1691050206,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPojKFrB');
