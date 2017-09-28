<?php

$query_string;

$allshadows = ['home', 'search', 'article', 'contact', 'partners', 'tags', 'all-articles'];

$allcategories = ['democracy', 'environment', 'economy'];

// Add all democracy related tags to this array -- keep alphabetized
$democracy_tags = ['activism','equality','governance','justice','policy','reform','social movement'];

// Add all economy related tags to this array -- keep alphabetized
$economy_tags = ['capitalism','commons','consumerism','decoupling','degrowth','economic growth/GDP','prosperity','sustainable economics'];

// Add all environment related tags to this array -- keep alphabetized
$environment_tags = ['biodiversity loss','climate change','climate justice','planetary boundaries','resources','sustainability'];

function debug_to_console($data) {
    if (is_array($data))
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

/*
   Args: <string> $curr_page - string that appears after https://seed.uw.edu
   Return: name of page
   
   If a new page is added, add a mapping from the url ending to page name here
*/
function get_page_name($curr_page) {
    if (strpos($curr_page, '/economy/') !== false) {
        return 'economy';
    } else if (strpos($curr_page, '/democracy/') !== false) {
        return 'democracy';
    } else if (strpos($curr_page, '/search/') !== false || strpos($curr_page, 's=') !== false) {
       return 'search';
    } else if (strpos($curr_page, '/environment/') !== false) {
       return 'environment';
    } else if (strpos($curr_page, '/all-articles/') !== false) {
        return 'all-articles';
    } else if ($curr_page == '/partners/') {
       return 'partners';
    } else if ($curr_page == '/contact/') {
       return 'contact';
    } else if ($curr_page == '/tags/' || strpos($curr_page, '/tag/') !== false) {
        return 'tags';
    } else if ($curr_page == '/') {
        return 'home';
    } else {
        return 'article';
    }
}

/* 
   Args: <string> $tag_name - name of tag
   Return: <string> name of category tag belong to
   
   If a given tag does not seem to be returning the correct category, check to make sure the tag is contained in the correct ${category}_tags array at the top of the page and the name of the tag being passed matches what's in the array exactly
*/
function category_for_tag($tag_name) {
    global $democracy_tags, $economy_tags, $environment_tags;
    
    if (in_array($tag_name, $democracy_tags)) {
        return 'democracy';
    } else if (in_array($tag_name, $economy_tags)) {
        return 'economy';
    } else {
        return 'environment';
    }
}

/* Args: <string> $div_class - name of page
   Return: Colors that should appear in the shadow bar beneath the header image
*/
function get_shadow_colors($div_class) {
    global $allshadows;
    $env = '';
    $eco = '';
    $dem = '';
    
    if (in_array($div_class, $allshadows) || $div_class == 'environment') {
        $env = 'environment-background';
    }
    if (in_array($div_class, $allshadows) || $div_class == 'economy') {
        $eco = 'economy-background';
    }
    if (in_array($div_class, $allshadows) || $div_class == 'democracy') {
        $dem = 'democracy-background';
    }
    
    return '<li class="' . $env . '"></li><li class="' . $eco . '"></li><li class="' . $dem . '"></li>';
}

/*
   Used for the https://seed.uw.edu/partners page
   Displays list of partner organizations
*/
function display_partners() {
    $args = array(
        'orderby' => 'title',
        'order' => 'ASC',
        'post_type' => 'partnerorganizations',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) : 
        while ($query->have_posts()) : 
            $query->the_post();
            $link = get_post_meta(get_the_ID(), 'link', true);
            echo '<h3 class="nopadding"><a href="' . $link . '">';
            echo the_title_attribute('echo=0') . '</a></h3>';
            echo '<p>';
            the_content();
            echo '<br/></p>';
            echo '<div class="rule black-rule"></div>';
        endwhile;
    endif;
}

/*
   Args: <string> $class_name - name of the current page
   
   Displays a search container (with selectable categories) on the category pages
*/
function get_posts_for_page($class_name) {
    echo '<div id="postlistcontainer">
            <form method="get" action="' . get_home_url() . '/' . $class_name . '"';
    echo '<fieldset>
            <h4>CATEGORIES</h4>
            <p>Filter articles to only show those that include ALL of the selected categories</p>
            <div style="margin-bottom: 15px"></div>';
    display_categories_for_page($class_name);
    echo '<button class="searchbutton" type="submit">Filter</button>
        </fieldset>   
        </form>
        <div style="margin-bottom: 15px"></div>
        <div class="rule black-rule"></div>';
    fetch_posts($_GET['categorylist'], $class_name);
    echo '</div>';
}

/*
   Args: <nullable array> $categories - array of categories to be used for filtering            articles
         <string> $page_name - name of page
         
   Queries for a list of posts for the given page using an intersection of the selected categories
*/
function fetch_posts($categories, $page_name) {
    global $allcategories;
    
    $search_all = FALSE;
    if ($page_name === 'all-articles') {
        if (empty($categories) || !$categories) {
            $search_all = TRUE;
        } 
    } else {
        if (empty($categories) || !$categories) {
            $categories = array($page_name);
        }
    
        if (!in_array($page_name, $categories)) {
            array_push($categories, $page_name);
        } 
    }
    
    // category search using AND function
    $categories_string = ($search_all == TRUE) ? implode(",", $allcategories) : implode("+", $categories);
    debug_to_console("category search: " . $categories_string);
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'category_name' => $categories_string, 
        'orderby' => 'title',
        'order' => 'ASC',
        'post_type' => 'articles',
        'post_status' => 'publish',
        'paged' => $paged
    );
    
    $query = new WP_Query($args); 
    display_posts($query); 
}

/*
   Args: <wp tag object> $tag - a wordpress tag object to use for filtering posts 
         
   Queries for a list of posts containing the given tag
*/
function get_posts_for_tag($tag) {
    $args = array(
        'tag' => $tag->slug, 
        'orderby' => 'name',
        'order' => 'ASC',
        'post_type' => 'articles',
        'post_status' => 'publish',
        'paged' => $paged
    );
    
    $query = new WP_Query($args); 
    display_posts($query); 
}

/*
   Args: <WP_query> $query - article query results
         
   Formats each article in the $query results to display (title w/ permalink, categories, authors, and excerpt)
   
   If $query object is empty, will just display "No Results Found"
*/
function display_posts($query) {
    if ($query->have_posts()) : 
        while ($query->have_posts()) : 
            $query->the_post(); 
            $author = get_post_meta(get_the_ID(), 'article-author', true);
            echo '<h3><a href="' . get_permalink() . '">';
            echo the_title_attribute('echo=0') . '</a></h3>';
            echo '<div style="margin-bottom: 10px"></div>';
            display_categories(get_post(), 0);
            echo '<h4>' . $author . '</h4>';
            echo '<p>' . the_excerpt() . '<p>';
            get_template_part('article', get_post_format());
        endwhile; 
        
        
        echo '<div class="navigation"><p id="rightlink">';
        echo get_next_posts_link( 'More Articles', $query->max_num_pages );
        echo '</p><p id="leftlink">';
        echo previous_posts_link( 'Previous Articles' ) . '</p></div>';
    else :
        echo '<h3>No Results Found</h3>';
    endif;
}

/*
   Args: <array(wp tag object)> $tags - array of wordpress tag objects to categorize
   Return: array(<array> $democracy-tags, <array> $economy-tags, <array> $environment-tags) in that order
*/
function categorize_tags($tags) {
    global $democracy_tags, $economy_tags, $environment_tags;
    
    // sort tags into the correct categories
    $numtags = count($tags);
    $dem_tags = array();
    $eco_tags = array();
    $env_tags = array();
    for ($i = 0; $i < $numtags; $i++) {
        $curr_tag = $tags[$i];
        $curr_tag_name = $curr_tag->name;
        if (in_array($curr_tag_name, $democracy_tags)) {
            array_push($dem_tags, $curr_tag);
        } else if (in_array($curr_tag_name, $economy_tags)) {
            array_push($eco_tags, $curr_tag);
        } else {
            array_push($env_tags, $curr_tag);
        }
    }
    $tags_categorized = [$dem_tags, $eco_tags, $env_tags];
    
    return $tags_categorized;
}

/*
   Args: <array(wp tag object)> $tags - array of tag objects to display
         <boolean> $should_break_between_categories
         
   Displays the given tags in a color coded scheme (democracy tags first, followed by economy tags and lastly environment tags). The tags within each category are sorted in alphabetical order.
   
   If $should_break_between_categories == TRUE, will insert a header containing the name of the category above each group of tags (a group will contain all of the tags in a particular category, 3 groups total)
*/
function display_tags($tags, $should_break_between_categories) {
    $categories = ['democracy', 'economy', 'environment'];
    $tags_categorized = categorize_tags($tags);
    
    for ($i = 0; $i < 3; $i++) {
        $curr_tag_cat = $tags_categorized[$i];
        $num = count($curr_tag_cat);
        $category = $categories[$i];
        
        if($should_break_between_categories == TRUE) {
            $padding = ($i == 0) ? " nopadding" : "";
            echo '<h3 class="capitalize article-tighttext' . $padding . '"><span class="' . $category . '-text">' . $category . ' related tags<br/><br/></span></h3>';
        }
        
        for ($j = 0; $j < $num; $j++) {
            $curr_tag = $curr_tag_cat[$j];
            echo '<div class="tagbox ' . $category . '-border"><h4 class="' . $category . '-text"><a href="' . get_tag_link($curr_tag->term_id) . '">';  
            echo $curr_tag->name . '</a></h4></div>'; 
        }
    }
}

/*
   Display all tags that exist, a header with the category name will be inserted above each category of tags 
*/
function display_all_tags() {
    $all_tags = get_tags();
    display_tags($all_tags, TRUE);
}

/*
   Args: <wp post> $post - the post to display tags for

   Display all tags for the given $post 
*/
function display_tags_for_post($post) {
    $tags = wp_get_post_tags($post->ID);
    display_tags($tags, FALSE);
}

/*
   Args: <wp post> $post - the post to display categories for
         <int> $padding - amount of padding to display below categories
         
   Displays the categories for the given $post in a color coded horizontal list
*/
function display_categories($post, $padding) {
    $categories = get_the_category($post->ID);
    $numcategories = count($categories);
    foreach ($categories as $category) {
        $cat_name = $category->name;
        echo '<div class="catbox '; 
        echo $cat_name . '-background ' . $cat_name . '-border"><h4><span class="uppercase whitetext">';  
        echo $cat_name . '</span></h4></div>'; 
    }
    echo '<div style="margin-bottom:' . $padding . 'px"></div>';
}

/*
   Args: <string> $title - pdf link for a article
   Return: <string> new link with special characters (not allowed in filenames) removed
*/
function get_article_link($title) {
    $special_characters = array("?", ":");
    $new_title = str_replace($special_characters, "", $title, $count);
    return '/articles/' . $new_title . '.pdf';
}

/*
   Args: <string> $class_name - name of the current page
   
   Controls the three supercategory search options that display in each category's serach box. The category of the current page is always selected
*/
function display_categories_for_page($class_name) {
    $categories = get_categories();
    $checked_categories = $_GET['categorylist'];
            
    foreach($categories as $category) { 
        $cat_name = $category->name;
        if ($cat_name == $class_name) {
            echo '<div class="catbox '; 
            echo $cat_name . '-background ' . $cat_name . '-border" style="margin-top:-5px"><h4><span class="uppercase whitetext">';  
            echo $cat_name . '</span></h4></div>';
        } else {
            $checked = (in_array($cat_name, $checked_categories) ? "checked" : "");
            echo '<input id="categoryoption" type="checkbox" name="categorylist[]" value="', $category->slug, '" ', $checked, '/>';
            echo '<label class="', $cat_name, '" for="categoryoption"><span class="uppercase"></span>', $cat_name, "</label>\n";
        }
    }
}

/*
   Args: <WP_query> $query - current search query
   Return: <WP_query> search query with a union of the currently selected categories applied
*/
function pre_get_search_posts($query) {
    // reutrn if requesting admin page
    if (is_admin()) {
        return;
    }
    
    if($query->is_search()) {
        // category search using OR function
        if (isset($_GET['categorylist']) && is_array($_GET['categorylist'])) {
            $categories = $_GET['categorylist'];
            $categories_string = implode(",", $categories);
            $query->set('category_name', $categories_string);
        }
        
        return $query;
    }
}
add_action('pre_get_posts', 'pre_get_search_posts', 1);

/*
   Return: <WP_query> search query customized for articles 
   
   Parses the current url and returns query with the given search term and filter options applied 
*/
function generate_search_query() {
    global $query_string;

    $query_args = explode("&", $query_string);
    $search_query = array(
        'orderby' => array('relevance' => 'DESC', 'title' => 'ASC'),
        'post_type' => 'articles',
        'post_status' => 'publish',
        'paged' => $paged
    );

    if(strlen($query_string) > 0) {
        foreach($query_args as $key => $string) {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        }
    }

    return new WP_Query($search_query);
}

function seed_design_scripts() {
    wp_enqueue_style( 'bootstrap_css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
    wp_enqueue_style( 'seed-design-style', get_stylesheet_uri() );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto', false );
    wp_enqueue_style( 'Alfa Slab One', 'https://fonts.googleapis.com/css?family=Alfa+Slab+One', false );
}

add_action( 'wp_enqueue_scripts', 'seed_design_scripts' );

?>
