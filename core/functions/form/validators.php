<?php
/**
 * Numeric values validation
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_is_numeric(string $field_value, array &$field)
{
    if (!is_numeric($field_value)){
        $field['error'] = 'Laukelyje turi buti skaiciai';
        return false;
    } else {
        return true;
    }
}

/**
 * String values validation
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_is_string(string $field_value, array &$field)
{
    if (!is_string($field_value)){
        $field['error'] = 'Laukelyje turi buti tekstas';
        return false;
    } else {
        return true;
    }
}

/**
 * Empty values validation
 *
 * @param array $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty($field_value, &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Laukelis tuscias';
        return false;
    } else {
        return true;
    }
}

/**
 * Spaces validation by counting words
 *
 * @param $field_value
 * @param $field
 * @return bool
 */
function validate_field_has_space($form_field, $field)
{
    $words = str_word_count($form_field);
        if ($words != 2) {
        $field['error'] = 'Neteisingai ivestas vardas';
        return false;
    }
        return true;
}

/**
 * Age validator
 *
 * @param $field_value
 * @param $field
 * @return bool
 */
function validate_field_from_18_to_99($field_value, &$field)
{
    if ($field_value < 18 || $field_value > 99) {
        $field['error'] = 'Iveskite tikrą amžių';
    } else {
        return true;
    }
}