<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVgo2khs\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVgo2khs/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVgo2khs.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVgo2khs\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVgo2khs\appDevDebugProjectContainer([
    'container.build_hash' => 'Vgo2khs',
    'container.build_id' => '4665f00c',
    'container.build_time' => 1603635018,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVgo2khs');
