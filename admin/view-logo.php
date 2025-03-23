<?php
require 'sidebar.php';
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>All Logos</h3>
        </div>
        <div class="bottom view-post">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <!-- <div class="block-search">
                                        <input type="text" class="form-control" placeholder="SEARCH HERE">
                                        <button type="submit">
                                        <img src="search.png" alt=""></button>
                                    </div> -->
                    <table class="table align-middle" border="1px" style="table-layout: fixed;">
                        <tr>
                            <th>Id</th>
                            <th>Thumbnail</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                            display_logo();
                        ?>
                    </table>
                    <ul class="pagination">
                        <li>
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                        </li>
                    </ul>

                    <!-- Modal update -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Logo?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="updated_id" id="updated_id">
                                            <label>Location</label>
                                            <select class="form-select" name="location" id="location">
                                                <option value="header">Header</option>
                                                <option value="footer">Footer</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <input type="file" class="form-control w-100" name="logo_thumbnail" id="logo_thumbnail">
                                        </div>
                                        <input type="hidden" id="old_text_logo" name="old_text_logo">
                                        <img width="80px" src="https://www.placehold.co/80" alt="" id="old_logo">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" name="btn_confirm_update_logo">Confirm Update</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal delete -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                </div>
                                <div class="modal-footer">
                                    <form action="" method="post">
                                        <input type="hidden" class="value_remove" name="remove_id">
                                        <button name="btn_confirm_remove_logo" type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>
</html>