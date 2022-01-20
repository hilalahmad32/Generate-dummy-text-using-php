<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Lorem Ipsum</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-12">
                <form id="form-data">
                    <input type="number" class="form-control my-3" placeholder="Enter Number of Words" id="word" name="word">
                    <input type="text" class="form-control" placeholder="Enter the Tag" id="word_tag">

                    <input type="number" class="form-control my-3" placeholder="Enter Number of Sentence" id="sentence" name="sentence">
                    <input type="text" class="form-control" placeholder="Enter the Tag" id="sentence_tag">

                    <input type="number" class="form-control my-3" placeholder="Enter Number of paragraphs" id="para" name="para">
                    <input type="text" class="form-control" placeholder="Enter the Tag" id="para_tag">
                    <button type="submit" class="btn btn-primary my-3" id="create">Submit</button>
                </form>
            </div>
        </div>
        <div id="output"></div>
    </div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#create").on("click", function(e) {
                e.preventDefault();

                const word = $("#word").val();
                const word_tag = $("#word_tag").val();
                const sentence = $("#sentence").val();
                const sentence_tag = $("#sentence_tag").val();
                const para = $("#para").val();
                const para_tag = $("#para_tag").val();

                $.ajax({
                    url: "create.php",
                    type: "POST",
                    data: {
                        word: word,
                        word_tag: word_tag,
                        sentence: sentence,
                        sentence_tag: sentence_tag,
                        para: para,
                        para_tag: para_tag,
                    },
                    success: (data) => {
                        $("#output").html(data);
                        $("#form-data").trigger("reset");
                    }
                })
            })
        })
    </script>
</body>

</html>