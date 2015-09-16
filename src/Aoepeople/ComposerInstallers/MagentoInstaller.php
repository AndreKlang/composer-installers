<?php
namespace Aoepeople\ComposerInstallers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => 'public_html/.modman/{$vendor}_{$name}/',
        'source'    => 'htdocs/'
    );
}
