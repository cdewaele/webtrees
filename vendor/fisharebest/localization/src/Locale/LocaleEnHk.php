<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleEnHk
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnHk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryHk();
    }
}
