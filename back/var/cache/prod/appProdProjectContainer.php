<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxq4wvb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxq4wvb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSxq4wvb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSxq4wvb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSxq4wvb\appProdProjectContainer(array(
    'container.build_hash' => 'Sxq4wvb',
    'container.build_id' => 'a50eb572',
    'container.build_time' => 1518688889,
));
