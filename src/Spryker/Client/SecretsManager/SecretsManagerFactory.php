<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SecretsManager;

use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\SecretsManagerExtension\Dependency\Plugin\SecretsManagerClientPluginInterface;

class SecretsManagerFactory extends AbstractFactory
{
    /**
     * @return \Spryker\Client\SecretsManagerExtension\Dependency\Plugin\SecretsManagerClientPluginInterface
     */
    public function getSecretsManagerClientPlugin(): SecretsManagerClientPluginInterface
    {
        return $this->getProvidedDependency(SecretsManagerDependencyProvider::PLUGIN_SECRETS_MANAGER_CLIENT);
    }
}
