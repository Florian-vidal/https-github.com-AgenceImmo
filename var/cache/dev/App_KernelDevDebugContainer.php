<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVO6rfE9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVO6rfE9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVO6rfE9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVO6rfE9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVO6rfE9\App_KernelDevDebugContainer([
    'container.build_hash' => 'VO6rfE9',
    'container.build_id' => '47fa5a02',
    'container.build_time' => 1583768878,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVO6rfE9');
