<?php include 'header.php'; 
include 'db.php';?>
<body >
<div class="container-fluid">
    <div class="row mt-5">
       <?php include 'sidebar.php' ?>
        <div class="col-lg-9">
            <div class="notepadbox">
            <form action="addpost.php" method="POST"> 
                <label for="name">Title:</label>
                <input required type="text" name="title" id="title" class="form-control" maxlength="12" placeholder="Your Brain Dump">
                <br>
                <label for="name">Note:</label>
                <textarea required name="note" style="height: 200px;" id="name" class="form-control" placeholder="Jot down your thoughts here!"></textarea>
                <br>
                <input type="hidden" name="submit">
                <button class="submitbutton" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>


</html>