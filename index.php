You can hook into the is_protected_meta filter and return true for any custom field you want to hide.

add_filter('is_protected_meta', 'my_is_protected_meta_filter', 10, 2);
function my_is_protected_meta_filter($protected, $meta_key) {
    return $meta_key == 'test1' ? true : $protected;
}
