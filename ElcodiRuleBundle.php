<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\RuleBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Elcodi\RuleBundle\CompilerPass\ContextCompilerPass;
use Elcodi\RuleBundle\CompilerPass\ExpressionLanguageCompilerPass;

/**
 * Class ElcodiRuleBundle
 */
class ElcodiRuleBundle extends Bundle
{
    /**
     * Builds bundle
     *
     * @param ContainerBuilder $container Container
     */
    public function build(ContainerBuilder $container)
    {

        /**
         * Adds compiler pass
         */
        $container
            ->addCompilerPass(new ContextCompilerPass())
            ->addCompilerPass(new ExpressionLanguageCompilerPass());
    }

}
