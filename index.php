<?php
include('./pages/header.php');
?>
<div class="row">
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Email</th>   
                </tr>
            </thead>
            <tbody id="users-data">
                
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="" class="form-label">First name:</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Last name:</label>
                <input type="text" >
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email:</label>
                <input type="text" >
            </div>
            <div class="form-group">
                <label for="" class="form-label">Mobile No:</label>
                <input type="text" >
            </div>
            <div class="form-group">
                <label for="" class="form-label">Password:</label>
                <input type="password" >
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