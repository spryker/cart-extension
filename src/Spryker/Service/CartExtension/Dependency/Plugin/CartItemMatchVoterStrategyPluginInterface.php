<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\CartExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ItemTransfer;

/**
 * This plugin interface can be extended in order to compare a collection of cart-items by a certain criteria.
 */
interface CartItemMatchVoterStrategyPluginInterface
{
    /**
     * Specification:
     * - Checks if the plugin is applicable for the given item.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return bool
     */
    public function isApplicable(ItemTransfer $itemTransfer): bool;

    /**
     * Specification:
     * - Compares two items and returns a boolean when they match.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     * @param \Generated\Shared\Transfer\ItemTransfer $itemToCompare
     *
     * @return bool
     */
    public function doItemsMatch(ItemTransfer $itemTransfer, ItemTransfer $itemToCompare): bool;
}
