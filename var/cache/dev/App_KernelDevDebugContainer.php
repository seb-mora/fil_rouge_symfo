<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ3DzubG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ3DzubG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ3DzubG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ3DzubG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZ3DzubG\App_KernelDevDebugContainer([
    'container.build_hash' => 'Z3DzubG',
    'container.build_id' => 'f986cee5',
    'container.build_time' => 1691190875,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ3DzubG');
