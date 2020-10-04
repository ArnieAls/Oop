<?php

use App\App;

/**
 * is user exists in DB_FILE
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{

    $user = ['user_name' => $field_value];
    if (App::$db->getRowsWhere('users', $user)) {
        $field['error'] = "User $field_value already registered";
        return false;
    }

    return true;
}

/**
 * Validates if pixel coordinates are taken
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_pixel_unique_position(array $form_values, array &$form)
{

    $pixels = App::$db->getRowsWhere('pixels', []);
    foreach ($pixels as $pixel) {

        $new_x_right_overlap = $form_values['x'] + $form_values['pixel_size'] >= $pixel['x'];
        $new_x_left_overlap = $form_values['x'] <= $pixel['x'] + $pixel['pixel_size'];
        $new_y_right_overlap = $form_values['y'] + $form_values['pixel_size'] >= $pixel['y'];
        $new_y_left_overlap = $form_values['y'] <= $pixel['y'] + $pixel['pixel_size'];

        if (($new_x_right_overlap && $new_x_left_overlap)
            && ($new_y_right_overlap && $new_y_left_overlap)) {
            $form['error'] = 'Koordinates jau uzimtos';
            return false;
        }
    }
    if ($form_values['x'] + $form_values['pixel_size'] > 500) return false;
    if ($form_values['y'] + $form_values['pixel_size'] > 500) return false;

    return true;
}

/**
 * Validates option selected
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_option (string $field_value, array $field)
{
    foreach ($field['options'] as $option_key => $option_value) {
        if ($option_key === $field_value) {
            return true;
        }
    }

    return false;
}

/**
 * checking if email and password match db_file data
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_login(array $form_values, array &$form): bool
{

    if (App::$db->getRowsWhere('users', $form_values)) {
        return true;
    }
    $form['error'] = 'neapvyko!';

    return false;
}

