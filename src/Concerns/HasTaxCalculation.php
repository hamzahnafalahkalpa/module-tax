<?php

namespace Hanafalah\ModuleTax\Concerns;

use Hanafalah\ModuleTax\Contracts\Data\TotalTaxData;

trait HasTaxCalculation{
    public function taxCalculation(mixed &$model_dto, mixed $resource_dto){
        if (is_object($model_dto)){
            if ($model_dto->total_tax instanceof TotalTaxData) {
                $tax_dto = &$model_dto->total_tax;
                $tax_dto->total ??= 0;
                
                $resource_dto = (object) $resource_dto;
                foreach ($resource_dto->tax as $key => $tax) {
                    $tax_sum           = $tax * $resource_dto->qty;
                    $tax_dto->total   += $tax_sum;
                    $tax_dto->{$key}   ??= 0;
                    $tax_dto->{$key}    += $tax_sum;
                }
            }else{
                $model_dto->total_tax  += $resource_dto->tax;
            }
        }else{
            $model_dto->total_tax  += $resource_dto->tax;
        }
    }
}