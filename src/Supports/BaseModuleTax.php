<?php

namespace Hanafalah\ModuleTax\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseModuleTax extends PackageManagement
{
    /** @var array */
    protected $__module_tax_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('module_tax', $this->__module_tax_config);
    }
}
