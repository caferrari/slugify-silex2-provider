<?php

/**
 * Slugify service provider for silex 2.x
 *
 * (c) Carlos André Ferrari <caferrari@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Caf\Slugify\Bridge\Silex;

use Cocur\Slugify\Slugify;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * SlugifyServiceProvider
 *
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class SlugifyServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(Container $app)
    {
        $app['slugify'] = new Slugify();
    }
    
}
