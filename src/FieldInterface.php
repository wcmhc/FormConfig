<?php
namespace GCWorld\FormConfig;

use GCWorld\FormConfig\Forms\FormField;

/**
 * Interface FieldInterface
 */
interface FieldInterface
{
    /**
     * @return string
     */
    public static function getConstantName(): string;

    /**
     * @return string
     */
    public static function getKey(): string;

    /**
     * @return string
     */
    public static function getTwigPath(): string;

    /**
     * @param FormField $field
     * @return FormField
     */
    public static function makeReadOnly(FormField $field): FormField;
}