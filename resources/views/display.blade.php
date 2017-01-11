<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.3 Image Upload with Validation example</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10md-offset-1">
                <div class="panel-heading">display Data</div>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Image Name</td>
                        <td>Image</td>

                    </tr>
                    <?php
                        foreach ($images as $image) {
                     ?>
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->name }}</td>
                            <td>{{ $image->image }}</td>
                            <td><img src="images/{{ $image->image }}" alt="{{ $image->image}}" /></td>



                        </tr>
                        <?php
                        }
                        ?>

                </table>



            </div>
        </div>
    </div>
