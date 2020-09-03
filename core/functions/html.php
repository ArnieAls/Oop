<?php

/**
 * Generates tag attributes
 *
 * @param $attrs
 * @return string
 */
function html_attr(array $attrs): string
{
    // $innerForm = '';
    $innerForm = [];
    foreach ($attrs as $key => $attr) {
        // $innerForm .= "$atributes=\"$value\" ";
        $innerForm[] = "$key=\"$attr\"";
    }
    // return $innerForm;
    return implode(' ', $innerForm);
}

/**
 * Generating new input field from given array
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function input_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'value' => $field['value'] ?? ''
    ];
    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

/**
 * Generates select tag attributes
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function select_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        // 'id' => $field['id'] ?? '',
    ];
    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

/**
 * Generates option tag attributes
 *
 * @param string $option_id
 * @param array $field
 * @return string
 */
function option_attr(string $option_id, array $field): string
{
    $attributes = [
        'value' => $option_id,
    ];

    $option = $field['options'][$option_id];
    if ($field['value'] == $option_id) $attributes['selected'] = true;
    if (is_array($option)) $attributes += $option['attr'];

    return html_attr($attributes);
}

/**
 * Generating buttons from given array
 *
 * @param string $button_id
 * @param array $button
 * @return string
 */
function button_attr(string $button_id, array $button): string
{
    $attributes = [
        'name' => 'action',
        'value' => $button_id,
    ];
    $attributes += $button['extra']['attr'] ?? [];
    return html_attr($attributes);
}

///**
// * sanitize array keys
// *
// * @param array $fields
// * @return array
// */
//function sanitize_post(array $fields): array
//{
//    $arr = [];
//    foreach ($fields as $key => $field) {
//        $arr[$key] = $field;
//    }
//    var_dump($arr);
//    return filter_input_array(INPUT_POST, $arr);
//}
///**
// * sanitize array keys from form
// *
// * @param array $form
// * @return array
// */
//function sanitize_form_input_values(array $form): array
//{
//    $fields = [];
//    foreach ($form['fields'] as $key => $input) {
//        $fields[$key] = $input['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
//    }
//    return sanitize_post($fields);
//}

/**
 * sanitize array keys from form
 *
 * @param array $form
 * @return array
 */
function sanitize_form_input_values(array $form): array
{
    $filter_parameters = [];
    foreach ($form['fields'] as $key => $field) {
        $filter_parameters[$key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

/**
 * Error message generation
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

///**
// * Email values validation
// *
// * @param array $field_value
// * @param array $field
// * @return bool
// */
//function validate_field_is_email(array $field_value, array &$field)
//{
//    if (!is_($field_value)){
//        $field['error'] = 'Laukelis';
//        return false;
//    } else {
//        return true;
//    }
//}

/**
 * Error messages if empty values
 *
 * @param array $form
 * @param array $form_values
 * @return bool
 */
function validate_form(&$form, $form_values): bool
{
    $success = true;

    foreach ($form['fields'] as $field_key => &$field) {
        foreach ($field['validators'] as $validator) {
            if (is_callable($validator)) {
                if ($validator($form_values[$field_key], $field)) {
                    $field['value'] = $form_values($field_key);
                } else {
                    $success = false;
                    break;
                }
            }
        }
    }
    return $success;
}
