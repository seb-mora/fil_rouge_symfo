<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5QJi9Tc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5QJi9Tc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5QJi9Tc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5QJi9Tc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5QJi9Tc\App_KernelDevDebugContainer([
    'container.build_hash' => '5QJi9Tc',
    'container.build_id' => 'e745f6b0',
    'container.build_time' => 1690997616,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5QJi9Tc');
