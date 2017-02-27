<?php $class_name = 'search'; ?>

<form method="get" action="<?php bloginfo('url'); ?>">
    <fieldset>
        <div id="titlecontainer">
            <h1>Search: </h1>
            <div class="title-underline black"></div>        
        </div>
        
        <input id="searchform" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="enter search term" maxlength="50" required="required" />  
        
        <h4>CATEGORIES</h4>
        <p>Filter articles to only show those that include ANY of the selected categories</p>
        <div style="margin-bottom: 15px"></div>
        <?php display_categories_for_page($class_name); ?>
        
        <button class="searchbutton" type="submit">Search</button>
    </fieldset>   
</form>