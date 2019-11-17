<?php

namespace CMTestPlugin\Tests;

use CMTestPlugin\CMTestPlugin as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'CMTestPlugin' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['CMTestPlugin'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
