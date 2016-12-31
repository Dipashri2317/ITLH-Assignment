<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter File Upload Form</title>
    <!-- load bootstrap css file -->
   
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    

    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
        <legend>UPLOAD IMAGES</legend>
        

        <fieldset>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="filename" class="control-label">Select File to Upload</label>
                    </div>
                </div>
            </div>
            <form method="post" action="upload">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename" size="20" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Upload File" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
            </form>
        </fieldset>
        
        
        </div>
    </div>
</div>
</body>
</html>