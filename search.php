<?php require_once( 'couch/cms.php' ); ?>
<?php include 'head.php'; ?>
<body>
<?php include 'header.php'; ?>
<section id="blog-list" class="latest-blog-section section-padding">
<div class="container">
        <div class="row blog">
        <h2>Search Results for '<cms:gpc 's' />':</h2>

        <br>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <cms:search masterpage='blog.php' limit='5' paginate='1' keywords="<cms:gpc 's' />">
                <div class="blog-block">
                    <h2>
                        <a href="<cms:show k_page_link />"><cms:show k_search_title /></a>
                    </h2>
                    <p class="lead">
                        <i class="fa fa-user" aria-hidden="true"></i> Saud Rehman
                    </p>

                    <cms:if k_page_foldertitle >
                        <cms:set my_category=k_page_foldertitle />
                    <cms:else />
                        <cms:set my_category='Uncategorized' />
                    </cms:if>   
                    <!-- Date/Time -->
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> Posted in <cms:show my_category /> on <cms:date k_page_date format='F d, Y'/></p>
                    <img class="img-responsive" src="<cms:show blog_image />" alt="">
                    <p><cms:show blog_caption /></p>
                    <a class="btn btn-primary read-more" href="<cms:show k_page_link />">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                </div>

                <cms:if k_paginated_bottom >
                    <cms:if k_paginator_required >
                        Page <cms:show k_current_page /> of <cms:show k_total_pages /><br>
                    </cms:if>
                    <cms:if k_paginate_link_prev >
                    <div class="prev-btn">
                        <a href="<cms:show k_paginate_link_prev />" class="btn btn-primary previous"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous Page</a>
                    </div>
                    </cms:if>
                    <cms:if k_paginate_link_next >
                        <a href="<cms:show k_paginate_link_next />" class="btn btn-primary next">Next Page <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </cms:if>
                </cms:if>
                <cms:no_results>
			      <h3>No pages found for <cms:show k_search_query /></h3>
			   </cms:no_results>
                </cms:search>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                    <form method="get" action="search.php" >
                        <div class="input-group">
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..." value="" name="s" />
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary" value="Go"/>
                            </span>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <div class="well">
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled category-list">
                                <cms:folders masterpage='blog.php'>
                                <li>                                        
                                    <a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a> 
                                </li>
                                </cms:folders>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                <h4>Recent Posts</h4>
                <cms:pages masterpage='blog.php' limit='5' paginate='0'>
                    <ul class="recent-posts">
                        <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                    </ul>
                </cms:pages>
                    
                </div>

                <div class="well">
                    <h4>About Me</h4>
                    <p>Saud Rehman</p>
                </div>

            </div>

        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<?php COUCH::invoke(); ?>