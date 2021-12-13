function bloginfo_array() {
    $fields = array('name', 'description', 'wpurl', 'url', 'admin_email', 'charset', 'version', 'html_type', 'text_direction', 'language');
    $data = array();
    foreach($fields as $field) {
        $data[$field] = get_bloginfo($field);
    }
    return $data;
}