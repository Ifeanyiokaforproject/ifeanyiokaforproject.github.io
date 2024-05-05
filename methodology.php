<?php require_once('syscon.php'); ?>
<?php
include 'dfconfig.php'; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2: Methodologies - Project Management System</title>
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

            <div id="step" class="active">2</div>

            <div class="line"></div>

            <div id="step" class="active">3</div>

            <div class="line"></div>

            <div id="step" class="">4</div>

            <div class="line"></div>

            <div id="step" class="">5</div>
        </div>
    </section>

    <section class="checkbox_form_container">
        <form action="page3.php" method="get" id="methodologyForm">
            <h1 class="form_header">Methodologies</h1>
            <br>
            <hr><br>
            <div id="propertyOptions"></div>
            <!-- Dynamically generated checkboxes will be added here -->
            <br><br>
            <div class="formgroup2 double_btn_container">
                <button class="register_form_btn" type="submit">Next</button>
            </div>
             <input type="hidden" name="process" value="yes">
        </form>
    </section>

    <script>
        function storeSelectedProperties(properties) {
            // This function is not used in this approach
        }

        // function getNextPageUrl(selectedProperties) {
        //     const baseUrl = "page3.html";
        //     const queryString = selectedProperties.map(property => `methodology=${property}`).join("&");
        //     return `${baseUrl}?${queryString}`;
        // }



        function displayPropertyOptions() {
            const selectedProperties = JSON.parse(localStorage.getItem('selectedProperties'));
            const propertyOptionsDiv = document.getElementById('propertyOptions');
            propertyOptionsDiv.innerHTML = ""; // Clear any previous content

            const propertyMap = {
                property1: {
                    text: 'Continuous Feedback: Agile, Lean, Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        },
                        {
                            text: 'Agile',
                            value: 'agile'
                        },

                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property2: {
                    text: 'Waste Elimination: Lean',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        }
                    ]
                },
                property3: {
                    text: 'Iterative and incremental approach: Agile',
                    type: [
                        {
                            text: 'Agile',
                            value: 'agile'
                        }
                    ]
                },
                property4: {
                    text: 'Emphasis on collaboration and customer feedback: Agile',
                    type: [
                        {
                            text: 'Agile',
                            value: 'agile'
                        }
                    ]
                },
                property5: {
                    text: 'Adaptive to changing requirements: Agile',
                    type: [
                        {
                            text: 'Agile',
                            value: 'agile'
                        }
                    ]
                },
                property6: {
                    text: 'Cross-functional teams: Agile',
                    type: [
                        {
                            text: 'Agile',
                            value: 'agile'
                        }
                    ]
                },
                property7: {
                    text: 'Continuous delivery and improvement: Agile',
                    type: [
                        {
                            text: 'Agile',
                            value: 'agile'
                        }
                    ]
                },
                property8: {
      text: 'Sequential approach with distinct phases (Requirements, Design, Implementation, Testing, Deployment): Waterfall',
                    type: [
                        {
                            text: 'Waterfall',
                            value: 'waterfall'
                        }
                    ]
                },
                property9: {
                    text: 'Emphasis on documentation: Waterfall',
                    type: [
                        {
                            text: 'Waterfall',
                            value: 'waterfall'
                        }
                    ]
                },
                property10: {
                    text: 'Little flexibility for changes after the initial planning stage: Waterfall',
                    type: [
                        {
                            text: 'Waterfall',
                            value: 'waterfall'
                        }
                    ]
                },
                property11: {
                    text: 'Well-defined deliverables at each phase: Waterfall',
                    type: [
                        {
                            text: 'Waterfall',
                            value: 'waterfall'
                        }
                    ]
                },
                property12: {
                    text: 'Iterative approach with short, time-boxed iterations (sprints): Scrum',
                    type: [
                        {
                            text: 'Scrum',
                            value: 'scrum'
                        }
                    ]
                },
                property13: {
                    text: 'Employs roles such as Product Owner, Scrum Master, and Development Team: Scrum',
                    type: [
                        {
                            text: 'Scrum',
                            value: 'scrum'
                        }
                    ]
                },
                property14: {
                    text: 'Daily stand-up meetings (daily scrum): Scrum',
                    type: [
                        {
                            text: 'Scrum',
                            value: 'scrum'
                        }
                    ]
                },
                property15: {
                    text: 'Sprint planning, review, and retrospective meetings: Scrum',
                    type: [
                        {
                            text: 'Scrum',
                            value: 'scrum'
                        }
                    ]
                },
                property16: {
                    text: 'Backlog grooming and prioritization: Scrum',
                    type: [
                        {
                            text: 'Scrum',
                            value: 'scrum'
                        }
                    ]
                },
                property17: {
                    text: 'Focus on eliminating waste and maximizing value: Lean',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        }
                    ]
                },
                property18: {
                    text: 'Continuous improvement (Kaizen): Lean',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        }
                    ]
                },
                property19: {
                    text: 'Visual management (e.g., Kanban boards): Lean, Kanban',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        },
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
                property20: {
                    text: 'Just-in-time delivery: Lean',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        }
                    ]
                },
                property21: {
                    text: 'Empowerment of teams: Lean',
                    type: [
                        {
                            text: 'Lean',
                            value: 'lean'
                        }
                    ]
                },
                property22: {
 text: 'Emphasis on software engineering practices (e.g., Test-Driven Development, Pair Programming): Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property23: {
                    text: 'Frequent releases: Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property24: {
                    text: 'Simple design: Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property25: {
                    text: 'Continuous integration: Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property26: {
                    text: 'Customer involvement throughout the development process: Extreme Programming (XP)',
                    type: [
                        {
                            text: 'Extreme Programming (XP)',
                            value: 'xp'
                        }
                    ]
                },
                property27: {
                    text: 'Visual management using Kanban boards: Kanban',
                    type: [
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
                property28: {
                    text: 'Limiting work in progress (WIP): Kanban',
                    type: [
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
                property29: {
                    text: 'Continuous flow of work: Kanban',
                    type: [
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
                property30: {
                    text: 'Focus on cycle time optimization: Kanban',
                    type: [
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
                property31: {
                    text: 'Transparency and communication through board visibility: Kanban',
                    type: [
                        {
                            text: 'Kanban',
                            value: 'kanban'
                        }
                    ]
                },
            };


            function getNextPageUrl(selectedProperties) {
                const baseUrl = "page3.php";

                // Get the selected methodology descriptions based on selected properties
                const selectedDescriptions = selectedProperties.flatMap(property => {
                    return methodologyMap[property] ? [methodologyMap[property]] : [];
                });

                // Encode the selected descriptions as URI components
                const encodedDescriptions = selectedDescriptions.map(description => encodeURIComponent(description));

                // Create the query string parameter for the selected descriptions
                const queryString = encodedDescriptions.map(description => `description=${description}`).join("&");

                return `${baseUrl}?${queryString}`;
            }



            function handleNextButtonClick(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                const selectedProperties = Array.from(document.querySelectorAll('input[name="methodology"]:checked'))
                    .map(checkbox => checkbox.value);

                const nextPageUrl = getNextPageUrl(selectedProperties);
                window.location.href = nextPageUrl;
            }


            for (const property of selectedProperties) {
                const description = propertyMap[property];
                if (description) {
                    const checkbox = document.createElement('input');
					const hidden = document.createElement('input');
                    checkbox.type = "checkbox";
					hidden.type = "hidden";
                    checkbox.id = property;
					hidden.id = property;
                    checkbox.name = "methodology";
					hidden.name = property;
                    checkbox.value = property;
					hidden.value = description.text;
                    checkbox.checked = true;

                    const label = document.createElement('label');
                    label.htmlFor = property;
                    label.textContent = description.text;

                    propertyOptionsDiv.appendChild(checkbox);
					propertyOptionsDiv.appendChild(hidden);
                    propertyOptionsDiv.appendChild(label);
                    propertyOptionsDiv.appendChild(document.createElement('br'));
                }
            }
        }

        displayPropertyOptions(); // Call the function to display options on page load

        // Add event listener to the next button
        const nextButton = document.querySelector('.register_form_btn[type="submit"]');
        nextButton.addEventListener('click', handleNextButtonClick);
    </script>

    <style>
        .field {
            margin-top: 54px;
        }

        .checkbox_form_container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 54px;
        }

        form {
            width: 918px;
            background: #ffffff;
            padding: 40px 56px 40px 36px;
            gap: 8px;
            border-radius: 15px;
            border: 1px solid #E5E5E5;

        }

        input {
            width: 18PX;
            height: 18PX;
            display: inline;
            margin-top: 20px;
        }

        label {
            width: 100%;
            display: inline;
            align-items: center;
            gap: 8px;
            font-size: 16PX;
            margin-top: 20px;
            margin-left: 10px;
        }

        hr {
            opacity: 0.2;
        }

        .double_btn_container {
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .double_btn_container button {
            width: 100%;
        }
    </style>
</body>

</html>