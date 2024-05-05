<?php require_once('syscon.php'); ?>
<?php
include 'dfconfig.php'; 
 
include 'ext.php';
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Methodology - Project Management System</title>
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

            <div id="step" class="active">4</div>

            <div class="line"></div>

            <div id="step" class="">5</div>
        </div>
    </section>

    <section class="methodology_details">
        <form action="time.php">
            <h2>Project Steps</h2>
        <hr>
        <!-- Methodology description will be displayed here -->

        <div id="descriptionContainer"></div>
        <br>
        <div class="formgroup2 double_btn_container">
            <button class="register_form_btn" type="submit">Next</button>
        </div>

        </form>
        
    </section>

    <footer>
        <p>Project By: Okafor Ifeanyi</p>
    </footer>

    <script>
        window.onload = function () {
            const selectedMethodologies = getSelectedMethodologies();
            displayMethodologyDescriptions(selectedMethodologies);
        };

        function getSelectedMethodologies() {
            const urlParams = new URLSearchParams(window.location.search);
            const selectedMethodologies = urlParams.getAll('methodology');


            // If 'property1' is selected, add 'property5' to the list of selected methodologies
            if (selectedMethodologies.includes('property1')) {
                // selectedMethodologies.push('property5');
            }

            return selectedMethodologies;
        }

        function displayMethodologyDescriptions(methodologies) {
            const methodologyDescriptionDiv = document.getElementById('descriptionContainer');
            methodologyDescriptionDiv.innerHTML = ""; // Clear any previous content

            const methodologyMap = {
                'm_agile': {
                    name: 'Agile',
                    description: [
                        'Requirements Gathering: Gather and prioritize requirements in collaboration with stakeholders',
                        'Sprint Planning: Plan the work to be done in the upcoming sprint.',
                        'Sprint Execution: Implement the planned work within the sprint time frame',
                        'Daily Stand-up Meetings: Conduct daily meetings to discuss progress, challenges, and plans.',
                        'Sprint Review: Review the completed work with stakeholders and obtain feedback.',
                        'Sprint Retrospective: Reflect on the sprint process and identify areas for improvement',
                        'Repeat: Iterate through these steps for subsequent sprints.',
                    ],
                    image: 'https://th.bing.com/th/id/OIP.x5EuZWQsGm_sIy-o_1sZ3gHaGh?w=516&h=454&rs=1&pid=ImgDetMain',
                },
                'm_lean': {
                    name: 'Lean',
                    description: [
                        'Identify Value: Identify the value that the software project will deliver to the customer',
                        'Map the Value Stream: Map out the entire value stream from concept to delivery.',
                        'Eliminate Waste: Identify and eliminate any activities that do not add value to the customer.',
                        'Optimize Flow: Streamline the workflow to improve efficiency and reduce lead times',
                        'Empower Teams: Empower teams to make decisions and take ownership of their work.',
                        'Continuous Improvement: Encourage a culture of continuous improvement and learning',
                    ],
                    image: 'https://th.bing.com/th/id/R.1fc282bb31b8666dc0f3d2910f45b56b?rik=DWCZTaBMK1GnCg&pid=ImgRaw&r=0',
                },
                'm_waterfall': {
                    name: 'Waterfall',
                    description: [
                        'Requirements Analysis: Gather and document all project requirements upfront.',
                        'Design: Create a detailed design based on the gathered requirements',
                        'Implementation: Develop the software based on the design specifications',
                        'Testing: Conduct testing to identify and fix defects',
                        'Deployment: Deploy the software to production after it passes testing',
                        'Maintenance: Provide ongoing support and maintenance for the deployed software.',
                    ],
                    image: 'https://th.bing.com/th/id/R.0470a2f2f05d1740835d7f4db83decfd?rik=9NPe4FCEzFF%2byw&pid=ImgRaw&r=0',
                },
                'm_scrum': {
                    name: 'Scrum',
                    description: [
                        'Product Backlog Creation: Develop and prioritize a backlog of features and tasks',
                        'Sprint Planning: Plan the work to be completed during the sprint',
                        'Daily Scrum: Hold daily stand-up meetings to discuss progress and any impediments.',
                        'Sprint Review: Demonstrate the completed work to stakeholders and obtain feedback.',
                        'Sprint Retrospective: Reflect on the sprint and identify improvements for future sprints.',
                        'Repeat: Iterate through these steps for subsequent sprints.',
                    ],
                    image: 'https://th.bing.com/th/id/OIP.8pDx440brhqscxh7dLUoVgHaHa?rs=1&pid=ImgDetMain',
                },
                'm_kanban': {
                    name: 'Kanban',
                    description: [
                        'Visualize Workflow: Map out the workflow stages on a Kanban board',
                        'Limit Work in Progress (WIP): Set limits on the number of items allowed in each workflow stage.',
                        'Pull System: Tasks are pulled into the next stage only when capacity allows',
                        'Continuous Improvement: Continuously review and improve the workflow based on feedback.',
                        'Iterate: Iterate through these steps to optimize workflow efficiency',
                    ],
                    image: 'https://th.bing.com/th/id/R.bc1330421eaa43ea967afcad9d6a3c6a?rik=4B9%2fEa942facBg&pid=ImgRaw&r=0&sres=1&sresct=1',
                },
                'm_xp': {
                    name: 'Extreme Programming (XP)',
                    description: [
                        "User Stories: Define user stories to capture requirements from the user's perspective",
                        'Test-Driven Development (TDD): Write tests before writing code to drive development.',
                        "Pair Programming: Developers work in pairs to write code, share knowledge, and review each other's work",
                        "Continuous Integration: Integrate code frequently to detect and fix defects early",
                        "Frequent Releases: Deliver working software in short iterations to gather feedback from users",
                        "Refactoring: Continuously improve the design and structure of the codebase while maintaining functionality.",
                    ],
                    image: 'https://th.bing.com/th/id/R.e3cc97966c8bff28401d0226561440cf?rik=CmXvQ5LqE84%2fww&pid=ImgRaw&r=0&sres=1&sresct=1',
                },
                // Add more methodologies and their descriptions as needed
            };

 // Keep track of displayed methodologies
let displayedDescriptions = {};

methodologies.forEach(methodology => {
    if (methodology === 'property1' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property2' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property3' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property4' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property5' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property6' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property7' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property8' && !displayedDescriptions['m_waterfall']) {
        displayDescription(methodologyMap['m_waterfall']);
        displayedDescriptions['m_waterfall'] = true;

    } else if (methodology === 'property9' && !displayedDescriptions['m_waterfall']) {
        displayDescription(methodologyMap['m_waterfall']);
        displayedDescriptions['m_waterfall'] = true;

    } else if (methodology === 'property10' && !displayedDescriptions['m_waterfall']) {
        displayDescription(methodologyMap['m_waterfall']);
        displayedDescriptions['m_waterfall'] = true;

    } else if (methodology === 'property11' && !displayedDescriptions['m_waterfall']) {
        displayDescription(methodologyMap['m_waterfall']);
        displayedDescriptions['m_waterfall'] = true;

    } else if (methodology === 'property12' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property13' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property14' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property15' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property16' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property17' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property18' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property19' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;

    } else if (methodology === 'property20' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property21' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property22' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property23' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property24' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property25' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property26' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;

    } else if (methodology === 'property27' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;

    } else if (methodology === 'property28' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;

    } else if (methodology === 'property29' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;

    } else if (methodology === 'property30' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;
        
    } else if (methodology === 'property31' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;
    
    
    // second option selection starts here    

    } else if (methodology === 'property32' && !displayedDescriptions['m_agile']) {
        displayDescription(methodologyMap['m_agile']);
        displayedDescriptions['m_agile'] = true;

    } else if (methodology === 'property33' && !displayedDescriptions['m_waterfall']) {
        displayDescription(methodologyMap['m_waterfall']);
        displayedDescriptions['m_waterfall'] = true;

    } else if (methodology === 'property34' && !displayedDescriptions['m_scrum']) {
        displayDescription(methodologyMap['m_scrum']);
        displayedDescriptions['m_scrum'] = true;

    } else if (methodology === 'property35' && !displayedDescriptions['m_lean']) {
        displayDescription(methodologyMap['m_lean']);
        displayedDescriptions['m_lean'] = true;

    } else if (methodology === 'property36' && !displayedDescriptions['m_kanban']) {
        displayDescription(methodologyMap['m_kanban']);
        displayedDescriptions['m_kanban'] = true;

    } else if (methodology === 'property37' && !displayedDescriptions['m_xp']) {
        displayDescription(methodologyMap['m_xp']);
        displayedDescriptions['m_xp'] = true;
    }
    
});




            if (methodologyDescriptionDiv.childElementCount === 0) {
                const paragraph = document.createElement('p');
                paragraph.textContent = "No descriptions available for selected methodologies";
                methodologyDescriptionDiv.appendChild(paragraph);
            }
        }

        // function displayDescription(description) {
        //     const methodologyDescriptionDiv = document.getElementById('descriptionContainer');
        //     if (description) {
        //         const paragraph = document.createElement('p');
        //         paragraph.textContent = description;
        //         methodologyDescriptionDiv.appendChild(paragraph);
        //     }
        // }

        function displayDescription(methodology) {
            const methodologyDescriptionDiv = document.getElementById('descriptionContainer');
            if (methodology) {
                // Create a div for each methodology
                const methodologyDiv = document.createElement('div');
                methodologyDiv.style.paddingBottom = '20px';

                // Create and append the name element
                const nameElement = document.createElement('h3');
                nameElement.textContent = methodology.name;
                methodologyDiv.appendChild(nameElement);

                // Create and append the image element
                const imgElement = document.createElement('img');
                imgElement.src = methodology.image;
                imgElement.style.maxWidth = '250px';
                methodologyDiv.appendChild(imgElement);

                // Create a ul element for the descriptions
                const descriptionList = document.createElement('ol');

                // Loop through the descriptions and create a li for each one
                methodology.description.forEach(description => {
                    const descriptionElement = document.createElement('li');
                    descriptionElement.textContent = description;
                    descriptionList.appendChild(descriptionElement);
                });

                // Append the description list to the methodology div
                methodologyDiv.appendChild(descriptionList);

                // Append the methodology div to the descriptionContainer
                methodologyDescriptionDiv.appendChild(methodologyDiv);
            }
        }
    </script>


</body>

</html>