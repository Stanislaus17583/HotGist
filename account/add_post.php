<?php
include_once 'account-header.php';
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
                            <h3><i class="sl sl-icon-doc"></i>Basic Informations</h3>
                        </div>

                        <!-- Title -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label> Title </label>
                                <input class="form-control" type="text" value="" name="title">
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <label>Category</label>
                                <select class="chosen-select-no-single form-control" name="category">
                                    <option label="Blank">Select Category</option>
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
                                <label>Images</label>
                                <input type="file" name="image" accept="image/*" required="required">
                            </div>

                            <div class="form">
                                <label>Description</label>
                                <textarea class="form-control" name="content" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                            </div>
                        </div>
                        <!-- Row / End -->
                    </div>
                    <!-- Section / End -->
                    <button class="button">Save</button>
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