<?php
/**
 * Converte o valor digitado para o formato do banco
 * @param $value
 * @return string formatada
 */
function currencyToDb($value)
{
    if ($value != "")
        return str_replace(",", ".", filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND));
    return 0;
}

