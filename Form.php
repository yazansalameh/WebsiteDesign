<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classification Application Form</title>
    <meta name="description" content="jordanian food and drug administration online form portal to apply for
                                       classifying your product">
    <meta name="keywords" content="JFDA, jordanian food and drug administration,
                                    product classification, الغذاء و الدواء الاردن, تصنيف منتج,تسجيل دواء
                                    , تسجيل منتج غذائي">
    <meta name="author" content="Yazan Salameh">
    <style>
        * {
            margin: 0;
            padding: 0;
           }

        .container {
            background-color: cadetblue;
            display: grid;
            height: 100vh;


            grid-template-areas:
            ". . . header . . ."
            ". . . product . . ."
            ". . . desc . . ."
            ". . . manufacturer . . ."
            ". . . country . . ."
            ". . . images . . ."
            ". . . comp_name . . ."
            ". . . comp_owner . . ."
            ". . . address . . ."
            ". . . button . . .";

            background-color: #DAD2D8;
            background-image: url('bg2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            min-height: 1400px;
            min-width: 700px;

            background-color: #DAD2D8;
            background-image: url('bg2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;



        }

        .grid-item {
            border: 0px solid red;
            font-size: 2em;
            text-align: center;

        }

        .item1 {
            grid-area: header;
        }

        .item2 {
            grid-area: product;
        }

        .item3 {
            grid-area: desc;
        }

        .item4 {
            grid-area: manufacturer;
        }

        .item5 {
            grid-area: country;
        }


        .item6 {
            grid-area: images;
        }

        .item8 {
            grid-area: comp_name;
        }

        .item9 {
            grid-area: comp_owner;
        }

        .item10 {
            grid-area: address;
        }

        .item11 {
            grid-area: button;
        }

    </style>

</head>

<body>

<form enctype="multipart/form-data" action="Confirmation2.php" method="post">
    <div class="container">
        <div class="grid-item item1"><h2>Product Classification Form</h2></div>

        <div class="grid-item item2">
            <label for="product"></label>
            Name of the product
            <br>
            <input type="text" style="font-size:12pt;height:50px;width:320px;"
            id="product" name="product" placeholder="" required>
        </div>

        <div class="grid-item item3">
            <label for="desc">Product Description</label>
            <br>
            <textarea name="desc" id="desc" placeholder="" rows="7" cols="50" style="font-size:11pt" required></textarea>
            <br>
        </div>

        <div class="grid-item item4">
            <label for="manufacturer"></label>
            Name of the manufacturing company
            <br>
            <input type="text" style="font-size:12pt;height:50px;width:320px;"
            id="manufacturer" name="manufacturer" placeholder="" required>
        </div>

        <div class="grid-item item5">
            <label for="country"></label>
            Manufacturing country
            <br>
            <input type="text" style="font-size:12pt;height:50px;width:320px;"
            id="country" name="country" placeholder="" required>
        </div>


        <div class="grid-item item6">
            <p>Upload a word document containing images of the packaging from all sides with the including the leaflet, and the composition certificate</p>
            <input type="file" style="font-size:13pt;height:50px;width:320px;" name="file" id="file" label="file"><br>
        </div>

        <div class="grid-item item8">
            <label for="comp_name"></label>
            The name of your company
            <br>
            <input type="text" style="font-size:12pt;height:50px;width:320px;"
            id="comp_name" name="comp_name" placeholder="" required>
        </div>

        <div class="grid-item item9">
            <label for="comp_owner"></label>
            The name of the company owner
            <br>
            <input type="text" style="font-size:12pt;height:50px;width:320px;"
            id="comp_owner" name="comp_owner" placeholder="" required>
        </div>

        <div class="grid-item item10">
            <label for="address">Company Address</label>
            <br>
            <textarea name="address" id="address" placeholder="" rows="7" cols="50" style="font-size:11pt" required></textarea>
            <br>
        </div>

        <div class="grid-item item11">
            <button type="submit" style="font-size:25pt;height:50px;width:280px;" name="submit3" value="upload">
            Upload</button>
        </div>

    </div>

</form>
</body>

</html>