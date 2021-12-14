<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CartExtension\Dependency\Plugin;

/**
 * Implement this plugin if you want to make sure that plugins are executed in specific order.
 */
interface ExecutionOrderAwarePluginInterface
{
    /**
     * Specification:
     * - Validates plugins execution order.
     * - Returns `false` if order is incorrect.
     *
     * @api
     *
     * @param array<string> $executedPlugins
     *
     * @return bool
     */
    public function validateExecutionOrder(array $executedPlugins): bool;
}
