<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php require_once ('components/navbar.php') ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form action="addarticleprocess.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-5 mt-2 ">
                    <textarea name="article" rows="10" cols="50" placeholder="Write Article Here"
                        class="form-group"></textarea><br>
                        <label for="title">Enter the Title Name for article</label>
                        <input type="text" for="title">
                </div>
                <div class="col-md-7">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="picture"
                            accept="image/*">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <?php
                            require_once ('db.php');
                            $query = "SELECT * FROM categories";
                            $result = mysqli_query($connection, $query);
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" ><?php echo $row['category_name']; ?></option>
                                    <?php
                                }
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>