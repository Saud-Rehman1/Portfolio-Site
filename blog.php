<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1' dynamic_folders='1'>
    <cms:editable name='blog_content' no_xss_check='1' type='textarea' />
    <cms:editable name='blog_caption' type='richtext' />

    <cms:editable name='blog_image'
        width='900'
        height='300'
        type='image'
    />

    <cms:folder name="all" title="all">
    <cms:folder name="general" title="general" />
    </cms:folder>

</cms:template>

<?php include 'head.php'; ?>
<body>
<?php include 'header.php'; ?>
<cms:if k_is_page >
<section id="blog-list" class="latest-blog-section section-padding">
        <h2 class="section-title wow fadeInUp"><cms:show k_page_title /></h2>
        <div class="container">
        <div class="row blog">
        
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->
                <div class="blog-block">
                <!-- Title -->
                <h1><cms:show k_page_title /></h1>

                <!-- Author -->
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
 
                <!-- Preview Image -->
                <img class="img-responsive" src="<cms:show blog_image />" alt="">
                <!-- Post Content -->
                <p class="lead"><cms:show blog_caption /></p>
                <p><cms:show blog_content /></p>
                </div>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 sidebar-widget">

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

                <!-- Blog Categories Well -->
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

                <div class="well">
                <h4>Recent Posts</h4>
                <cms:pages masterpage='blog.php' limit='5' paginate='0'>
                    <ul>
                        <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                    </ul>
                </cms:pages>
                    
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>About Me</h4>
                    <p>Saud Rehman</p>
                </div>

            </div>
        <!-- /.row -->
        <!-- Footer -->
    </div>
    </div>
    </section>
<cms:else />
    <cms:embed 'blog_list.php' />
</cms:if>
<?php include 'footer.php'; ?>
<?php COUCH::invoke(); ?>