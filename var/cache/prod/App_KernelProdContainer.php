<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAiU42X9\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAiU42X9/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerAiU42X9.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerAiU42X9\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerAiU42X9\App_KernelProdContainer([
    'container.build_hash' => 'AiU42X9',
    'container.build_id' => '202f72aa',
    'container.build_time' => 1690789055,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAiU42X9');
