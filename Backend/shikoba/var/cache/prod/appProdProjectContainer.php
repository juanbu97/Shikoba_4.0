<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0uewww5\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0uewww5/appProdProjectContainer.php') {
    touch(__DIR__.'/Container0uewww5.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container0uewww5\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container0uewww5\appProdProjectContainer();
