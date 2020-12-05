<?php
include_once 'account-header.php';
$post_id = $_GET['id'];
$post = $con->query("SELECT * from posts where id ='$post_id' LIMIT 1");
$post_details = $post->fetch_assoc();
?>
<div class="dashboard-content">
    <div class="row">
        <!-- Listings -->
        <div class="col-lg-12 col-sm-12">
            <div id="add-listing">
                <form action="upload_post.php" method="post" enctype="multipart/form-data">
                    <!-- Section -->
                    <div class="add-listing-section">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                        </div>

                        <!-- Title -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label> Title </label>
                                <input class="search-field" type="text" value="<?php echo $post_details['title']?>" name="title" />
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <label>Category</label>
                                <select class="chosen-select-no-single" name="category">
                                    <option value="<?php echo $post_details['category']?>"><?php echo $post_details['category']?></option>
                                    <option value="sports">Sports</option>
                                    <option value="music">Music</option>
                                    <option value="health">Health</option>
                                    <option value="news">News</option>
                                    <option value="events">Events</option>
                                    <option value="technology">Technology</option>
                                </select>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                            <img src="../post_images/<?php echo $post_details['image']?>" alt="image" class="img-responsive center-block post_img" />
                                <label>Images</label>
                                <input type="file" name="image" accept="image/*" required="required">
                            </div>

                            <div class="form">
                                <label>Description</label>
                                <textarea class="WSIWYG" name="content" cols="40" rows="3" id="summary" value="" spellcheck="true" ><?php echo $post_details['content']?></textarea>
                            </div>
                        </div>
                        <!-- Row / End -->
                    </div>
                    <!-- Section / End -->
                    <button class="button">Save</button>
                    <button class="button" href="#">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content / End -->
<?php
include_once 'account-footer.php';

?>

<!-- Mirrored from cyclonethemes.com/demo/html/suchana/dashboard-addtour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:20 GMT -->

</html>