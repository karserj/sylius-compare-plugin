<?php

declare(strict_types=1);

namespace Karserj\SyliusComparePlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class KarserjSyliusComparePlugin
 *
 * @package Karserj\SyliusComparePlugin
 * @author  Serghei Karagodin <karserj@gmail.com>
 */
class KarserjSyliusComparePlugin extends Bundle
{
    use SyliusPluginTrait;
}
