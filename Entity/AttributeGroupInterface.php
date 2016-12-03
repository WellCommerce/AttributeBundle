<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AttributeBundle\Entity;

use Doctrine\Common\Collections\Collection;
use WellCommerce\Bundle\CoreBundle\Entity\BlameableInterface;
use WellCommerce\Bundle\CoreBundle\Entity\EntityInterface;
use WellCommerce\Bundle\CoreBundle\Entity\TimestampableInterface;
use WellCommerce\Bundle\CoreBundle\Entity\TranslatableInterface;

/**
 * Interface GroupInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface AttributeGroupInterface extends EntityInterface, TimestampableInterface, TranslatableInterface, BlameableInterface
{
    public function getAttributes() : Collection;
    
    public function setAttributes(Collection $collection);

    public function addAttribute(AttributeInterface $attribute);

    public function removeAttribute(AttributeInterface $attribute);
}
