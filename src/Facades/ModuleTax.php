<?php

namespace Hanafalah\ModuleTax\Facades;

class ModuleTax extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\ModuleTax\Contracts\ModuleTax::class;
  }
}
