<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMQtR1mj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMQtR1mj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMQtR1mj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMQtR1mj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMQtR1mj\App_KernelDevDebugContainer([
    'container.build_hash' => 'MQtR1mj',
    'container.build_id' => 'd5348755',
    'container.build_time' => 1649775032,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMQtR1mj');
