<?php
include('./pages/header.php');
?>
<div class="row">
    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="user-data">

            </tbody>
        </table>
    </div>
    <div class="form-section col-md-4">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">First name:</label>
                        <input type="text" name="first_name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Last name:</label>
                        <input type="text" name="last_name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Email:</label>
                        <input type="email" name="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Mobile No:</label>
                        <input type="text" name="mobile_no" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Password:</label>
                        <input type="password" name="password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php
include('./pages/footer.php');
?>