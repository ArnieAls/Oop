<?php
/**
 * sanitize array keys from form
 *
 * @param array $form
 * @return array
 */
function sanitize_form_input_values(array $form): ?array
{
    $filter_parameters = [];
    foreach ($form['fields'] as $key => $field) {
        $filter_parameters[$key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

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
                    $field['value'] = $form_values[$field_key];
                } else {
                    $success = false;
                    break;
                }
            }
        }
    }
    return $success;
}