<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHbuGNxf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHbuGNxf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHbuGNxf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHbuGNxf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHbuGNxf\App_KernelDevDebugContainer([
    'container.build_hash' => 'HbuGNxf',
    'container.build_id' => '5d446b7b',
    'container.build_time' => 1690969886,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHbuGNxf');
