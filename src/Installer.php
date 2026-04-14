<?php

namespace Tygh\Addons\Labels;

use Tygh\Addons\InstallerInterface;
use Tygh\Core\ApplicationInterface;

class Installer implements InstallerInterface
{
    /**
     * @inheritDoc
     */
    public static function factory(ApplicationInterface $app)
    {
        return new self();
    }

    /**
     * @inheritDoc
     */
    public function onInstall()
    {

    }

    /**
     * @inheritDoc
     */
    public function onUninstall()
    {

    }

    /**
     * @inheritDoc
     */
    public function onBeforeInstall()
    {

    }
}