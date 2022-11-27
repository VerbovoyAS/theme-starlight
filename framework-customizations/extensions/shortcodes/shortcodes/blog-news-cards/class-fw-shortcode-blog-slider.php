<?php if (!defined('FW')) {
    die('Forbidden');
}

class FW_Shortcode_Blog_Slider extends FW_Shortcode
{

    public static function getPostCategories(): array
    {
        $categoriesList = [];
        $categories = get_categories();

        if (empty($categories)) {
            return $categoriesList;
        }

        foreach ($categories as $category) {
            $categoriesList[$category->slug] = $category->name;
        }

        return $categoriesList;
    }
}
