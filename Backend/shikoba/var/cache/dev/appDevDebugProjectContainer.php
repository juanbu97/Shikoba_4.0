<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA19xes0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA19xes0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerA19xes0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerA19xes0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerA19xes0\appDevDebugProjectContainer();
