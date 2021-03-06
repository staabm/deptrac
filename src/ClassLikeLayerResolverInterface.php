<?php

declare(strict_types=1);

namespace Qossmic\Deptrac;

use Qossmic\Deptrac\AstRunner\AstMap\ClassLikeName;

interface ClassLikeLayerResolverInterface
{
    /**
     * @return string[]
     */
    public function getLayersByClassLikeName(ClassLikeName $className): array;
}
