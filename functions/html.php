<?php
/**
 * Generates tag attributes
 *
 * @param array $attrs
 * @return string
 */
function html_attr(array $attrs): string
{
    $string = [];
    foreach ($attrs as $attr_key => $attr) {
        $string[] = "$attr_key=\"$attr\"";
    }
    return implode(' ', $string);
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
 * Generates buttons
 *
 * @param string $button_id
 * @param array $butoon
 * @return string
 */
//function button_attr(string $button_id, array $button): string
//{
//    $attributes = [
//        'name' => $button_id,
//        'value' => $button['save'],
//    ];
//    $attributes += $button['save']['title']['extra'] ?? [];
//    return html_attr($attributes);
//}