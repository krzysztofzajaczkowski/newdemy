<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOxreavk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOxreavk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerOxreavk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerOxreavk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerOxreavk\appProdProjectContainer([
    'container.build_hash' => 'Oxreavk',
    'container.build_id' => 'a9915893',
    'container.build_time' => 1603042245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOxreavk');
