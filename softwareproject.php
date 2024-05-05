<?php require_once('syscon.php'); ?>
<?php
include 'dfconfig.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Types - Project Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
    <nav>
        <h1>Master Project</h1>
    </nav>

    <section class="stepper_container">
        <div class="stepper">
            <div id="step" class="active">1</div>
    
            <div class="line"></div>
    
            <div id="step" class="">2</div>
    
            <div class="line"></div>
    
            <div id="step" class="">3</div>
    
            <div class="line"></div>
    
            <div id="step" class="">4</div>
    
            <div class="line"></div>
    
            <div id="step" class="">5</div>
        </div>
    </section>
    

    <section class="field form_container">
        <form id="softwareProjectForm" action="projectproperty.php" method="post" style="gap: 14px;">
            <h1 class="form_header">Select Software Projects Types</h1>

            <hr>

            <div class="formgroup3">
<button class="myButton" type="submit" name="protype" value="Project Management Software">Project Management Software</button>
<button class="myButton" type="submit" name="protype" value="Enterprise Resource Planning (ERP) System">Enterprise Resource Planning (ERP) System</button>
            </div>

            <div class="formgroup3">
<button class="myButton" type="submit" name="protype" value="Financial Software Solution">Financial Software Solution</button>
<button class="myButton" type="submit" name="protype" value="Government Systems">Government Systems</button>
            </div>
            <div class="formgroup3">
<button class="myButton" type="submit" name="protype" value="Mobile Application Development">Mobile Application Development</button>
 <button class="myButton" type="submit" name="protype" value="Web Development Projects">Web Development Projects</button>
            </div>
            <div class="formgroup3">
   <button class="myButton" type="submit" name="protype" value="E-commerce Platform">E-commerce Platform</button>
    <button class="myButton" type="submit" name="protype" value="CRM Systems">CRM Systems</button>
            </div>

            <br>

            <div class="formgroup2">
                <button class="register_form_btn" type="submit">Next</button>
            </div>
             <input type="hidden" name="process" value="yes">
        </form>
    </section>

    <footer>
        <p>Project By: Okafor Ifeanyi</p>
    </footer>

    <script>
        window.onload = function() {
            var myButtons = document.querySelectorAll(".myButton");
            var selectedButton = null;

            myButtons.forEach(function(button, index) {
                button.addEventListener("click", function() {
                    if (selectedButton !== null) {
                        myButtons[selectedButton].style.backgroundColor = "#f8f8f8";
                        myButtons[selectedButton].style.color = "#000000";
                    }
                    selectedButton = index;
                    this.style.backgroundColor = "#BDBDBD";
                    this.style.color = "#000000";
                });
            });

            var form = document.getElementById("softwareProjectForm");
            form.addEventListener("submit", function(event) {
                if (selectedButton === null) {
                    event.preventDefault(); // Prevent the form from submitting
                    alert("No software project was selected. Please select one before proceeding.");
                }
            });
        }
    </script>

    <style>
        .field {
            margin-top: 54px;
        }
        .formgroup3 {
            width: 100%;
            display: flex;
            gap: 14px;
        }
        .myButton {
            height: 56px;
            outline: none;
            border: none;
            width: 100%;
            border-radius: 4px;
            background: #f8f8f8;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
        }
        .myButton:hover {
            background: #f0f4f0;
        }
        .register_form_btn {
            height: 56px;
            outline: none;
            border: none;
            border-radius: 4px;
            background: #4E8522;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
        }
    </style>
    </body>
</html>
