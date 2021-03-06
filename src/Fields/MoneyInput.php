<?php
namespace GCWorld\FormConfig\Fields;

use GCWorld\FormConfig\Abstracts\Base;
use GCWorld\FormConfig\Core\Twig;
use GCWorld\FormConfig\FieldInterface;
use GCWorld\FormConfig\Forms\FormField;

/**
 * Class MoneyInput
 */
class MoneyInput extends Base implements FieldInterface
{
    /**
     * @return string
     */
    public static function getConstantName(): string
    {
        return 'MONEY';
    }

    /**
     * @return string
     */
    public static function getKey(): string
    {
        return 'moneyInput';
    }

    /**
     * @return string
     */
    public static function getTwigPath(): string
    {
        return '@'.Twig::TWIG_NAMESPACE_REPLACE.'/fields/moneyInput.twig';
    }

    /**
     * @param FormField $field
     * @return FormField
     */
    public static function makeReadOnly(FormField $field): FormField
    {
        $field->setType(StaticInput::getKey());

        return $field;
    }
}
