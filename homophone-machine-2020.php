<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/Article">

<head>
    <!-- Meta -->
    <!-- Place this data between the <head> tags of your website -->
    <title>Page Title. Maximum length 60-70 characters</title>
    <meta name="description" content="Page description. No longer than 155 characters." />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="The Name or Title Here">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content="http://www.example.com/image.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://www.example.com/image.html">

    <!-- Open Graph data -->
    <meta property="og:title" content="Title Here" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.example.com/" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:description" content="Description Here" />
    <meta property="og:site_name" content="Site Name, i.e. Moz" />
    <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
    <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
    <meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <meta property="fb:admins" content="Facebook numberic ID" />

    <style type="text/css">
    .homophonemachine {
        margin: 0 auto;
        max-width: 800px;
        background-image: url('https://cdn2.bigcommerce.com/server5900/e3bf3/product_images/uploaded_images/homophone-machine-background.jpg');
        background-repeat: repeat-y;
        background-size: contain;
    }

    .homophonemachine h2 {
        font-size: 24px;
        margin: 15px 0;
        color: #444;
        background: -webkit-linear-gradient(#111, #666);
        background: linear-gradient(#111, #666);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
    }

    .homophonemachine .original h2,
    .homophonemachine .converted h2 {
        margin-left: 15px;
        margin-bottom: 0;
    }

    .flex-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%;
    }

    .flex-container>.intro {
        -webkit-box-shadow: inset 0px 2px 2px #616161;
        box-shadow: inset 0px 2px 2px #616161;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#bad2b4), to(#a3bf9d));
        background-image: linear-gradient(#bad2b4, #a3bf9d);
        background-color: #bad2b4;
        width: 86%;
        padding: 15px;
        font-size: 18px;
        line-height: 23px;
        text-align: justify;
        border-radius: 6px;
        border: #000 1px solid;
    }

    .flex-container>.original,
    .flex-container>.converted {
        background-color: #6b9a5f;
        -webkit-box-shadow: inset 0px 2px 2px #616161;
        box-shadow: inset 0px 2px 2px #616161;
        border-radius: 6px;
        border: black 1px solid;
        width: 43%;
        margin: 15px;
        height: 100%;
    }

    .homophonemachine textarea {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#bad2b4), to(#a3bf9d));
        background-image: linear-gradient(#bad2b4, #a3bf9d);
        background-color: #bad2b4;
        border: #6b9a5f 1px solid;
        margin: 15px 0px 0px 0px;
        padding: 10px;
        font-size: 18px;
        border-top: 1px solid #000;
        box-sizing: border-box;
        /* fit parent width */
        height: 100%;
    }

    .button-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .button-container>div {
        margin: 15px;
        padding: 1px 10px 1px 10px;
    }

    .button {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        background-color: #ff60000;
        padding: 5px 20px;
        font-size: 17px;
        border: 1px solid #d55203;
        background-image: -webkit-gradient(linear, left bottom, left top, from(rgb(241, 136, 2)), to(rgb(241, 100, 2)));
        background-image: linear-gradient(bottom, rgb(241, 136, 2) 0%, rgb(241, 100, 2) 100%);
        border-radius: 5px;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, .5);
        -webkit-box-shadow: 0px 6px 0px #d55203, 0px 1px 6px rgba(0, 0, 0, .4), inset 0px 1px 0px rgba(255, 255, 255, .3), inset 0px 0px 3px rgba(255, 255, 255, .5);
        box-shadow: 0px 6px 0px #d55203, 0px 1px 6px rgba(0, 0, 0, .4), inset 0px 1px 0px rgba(255, 255, 255, .3), inset 0px 0px 3px rgba(255, 255, 255, .5);
    }

    .button:visited {
        text-decoration: none !important;
        color: #FFFFFF !important;
    }

    .button:active {
        text-decoration: none !important;
        color: #ebe3de;
        background-image: -webkit-gradient(linear, left bottom, left top, from(rgb(241, 126, 2)), to(rgb(241, 90, 2))) !important;
        background-image: linear-gradient(to top, rgb(241, 126, 2) 0%, rgb(241, 90, 2) 100%) !important;
        -webkit-box-shadow: 0px 3px 0px #d55203, 0px 1px 6px rgba(0, 0, 0, .4), inset 0px 1px 0px rgba(255, 255, 255, .3), inset 0px 0px 3px rgba(255, 255, 255, .5);
        box-shadow: 0px 3px 0px #d55203, 0px 1px 6px rgba(0, 0, 0, .4), inset 0px 1px 0px rgba(255, 255, 255, .3), inset 0px 0px 3px rgba(255, 255, 255, .5);
        -webkit-transform: translate(0, 4px);
        transform: translate(0, 4px);
        -webkit-transition: all .1s ease-in-out;
        transition: all .1s ease-in-out;
    }

    .button:hover {
        text-decoration: none;
        color: #fff;
        background-image: -webkit-linear-gradient(bottom, rgb(241, 146, 2) 0%, rgb(241, 110, 2) 100%);
        background-image: linear-gradient(bottom, rgb(241, 246, 2) 0%, rgb(241, 110, 2) 100%);
    }

    @media screen and (max-width: 960px) {

        .flex-container>div.original,
        .flex-container>div.converted {
            width: 90%;
        }
    }
    </style>

</head>

<body>
    <!-- Begin content -->
    <div class="stripe stripeDark">
        <div class="homophonemachine">
            <img
                src="https://cdn2.bigcommerce.com/server5900/e3bf3/product_images/uploaded_images/homophone-machine-top-2.jpg">
            <div class="flex-container">
                <div class="intro">
                    <h2>Welcome</h2> This is the <span class="bold">Homophone Machine</span>! To work this machine,
                    simply type your setence or paragraph into the field below and press the <span
                        class="bold">"Convert"</span> button to convert your copy. There's still lots of fuel left, so
                    use it as many times as you'd like!
                </div>
                <div class="original">
                    <h2>Original</h2>
                    <textarea class="js-auto-size multiple-lines input" placeholder="Type something here."
                        required>My new horse has blue eyes and a red mane.</textarea>
                </div>
                <div class="converted">
                    <h2>Converted</h2>
                    <textarea class="js-auto-size multiple-lines output" readonly></textarea>
                </div>
            </div>
            <div class="button-container">
                <div><a href="#" id="button_convert" class="button">Convert</a> </div>
                <div><a href="#" id="button_reset" class="button">Clear Form and Try again</a></div>
            </div>
            <img
                src="https://cdn2.bigcommerce.com/server5900/e3bf3/product_images/uploaded_images/homophone-machine-bottom.jpg">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
    (function($) {

        function replacerFunc() {
            let converted_arr = [];
            let convert_text = $('.original textarea').val();

            jsonFileObject = {}

            // request json data from file
            $.ajax({
                type: "GET",
                url: 'homophone-list.json',
                contentType: "text/html; charset=UTF-8",
                dataType: "text",
                success: function(data) {
                    jsonFileObject = JSON.parse(data)
                }
            }).done(function() {
                // split and convert words
                splited_text = convert_text.split(/([?!,.\s]+)/g)

                splited_text.forEach(replaceMethod)

                function replaceMethod(word, index) {
                    if ($.trim(word) == '') {
                        return
                    }

                    if (jsonFileObject.hasOwnProperty(word) || jsonFileObject.hasOwnProperty(word
                            .toLowerCase())) {
                        if (word[0] === word[0].toUpperCase()) {

                            lowerCasedWord = jsonFileObject[word.toLowerCase()]
                            converted_arr.push(capitalizeFirstLetter(lowerCasedWord))

                        } else {
                            converted_arr.push(jsonFileObject[word])
                        }

                    } else {
                        converted_arr.push(word)
                    }
                }
                finalString = converted_arr.join(' ').replace(/ +(\W)/g, "$1")
                $('.converted textarea').val(finalString)
            })
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        $(document).ready(function() {
            replacerFunc()
        })


        $(document).on('keyup', '.original textarea', function() {
            replacerFunc()
        });

        // Reset form
        $('#button_reset').on('click tap touchstart', function(e) {
            e.preventDefault();
            $('.original textarea, .converted textarea').val('')
        })
    })(jQuery)
    </script>


</body>

</html>