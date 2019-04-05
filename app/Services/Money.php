<?php

namespace App\Services;
use Money\Money as BaseMoney;
use Money\Currency;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use NumberFormatter;

class Money {
    protected $money;

    public function __construct($value)
    {
        $this->money = new BaseMoney($value, new Currency('UZS'));
    }

    public function formatted () {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('ru_RU', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );

        return $formatter->format($this->money);
    }

    public function amount () {
        return $this->money->getAmount();
    }
}
