<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Sensor Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">


</head>
<body>
        <nav id="desktop-nav">
        <div class="logo">Farming Sensor Project</div>
        <div>
            <ul class="nav-links">
                <li><a href="#background">Background</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#data">Data</a></li>
            </ul>
        </div>

    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Raspberry Pi</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#background" onclick="toggleMenu()">Projects</a></li>
                <li><a href="#process" onclick="toggleMenu()">Process</a></li>
                <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
                <li><a href="#data" onclick="toggleMenu()">Data</a></li>
            </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/raspi1.jpg" alt="device" />
        </div>
        <div class="section__text">
            <p class="section__text__p1">This is an overview of using a raspberry pi to make a  </p>
            <h1 class="title">Farming Sensor</h1>
            <p class="section__text__p2">This is my first Backend Developer Project</p>
            
            <div class="btn-container">
                    <button class="btn btn-color-1" onclick="window.location.href='https://github.com/cullenmarshall'">
            GitHub
        </button>

        <button class="btn btn-color-1" onclick="window.location.href='https:www.cullenmarshall.com'">
            Get in Touch
        </button>

            </div>
            <div>
                <img src="./assets/css.png" alt="css" class="icon">
                <img src="./assets/html.png" alt="css" class="icon">
                <img src="./assets/js.png" alt="css" class="icon">
                <img src="./assets/php.png" alt="css" class="icon">
                <img src="./assets/python.png" alt="css" class="icon">
                <img src="./assets/sql.png" alt="css" class="icon">
                <img src="./assets/pi.png" alt="css" class="icon">
            </div>
        </div>
    </section>
    <section id="background">
        <h2>Background</h2>
        <p>
            I was curious about programming and technology for a long time but wasn't sure where to get started. I started learning programming languages like Python but after going through a few tutorials, I realized that I needed to apply my knowledge to real-world projects. I really wanted to learn about databases and how to store and retrieve data, so I decided to build a weather station using a Raspberry Pi and a dh22 sensor. The goal of this project was to build out the databases, collect the data, and visualize it to be analyzed. Also, to practice my programming and seeing how data flows and is stored.
        </p>
        <p>This is not a how to guide. This is a story of my first project. I hope you enjoy it.This was my first ever real project, so I used a lot of Youtube, Google, and ChatGPT. I honesetly wasn't sure what I was doing 1/2 the time. It is really fun go think back of the struggles I went through!</p>
     
    </section>
    <section id="process">
        <h2>Process</h2>
        <h3>Raspberry Pi Pico Setup:</h3>

            <p>Connect the DHT22 sensor to the Raspberry Pi Pico.
            Write a Python script using Thonny to read data from the DHT22 sensor. I just copy and pasted the code from the internet. 
            Use Thonny to upload the script to the Raspberry Pi Pico.
            Install the Mosquitto MQTT broker on the Raspberry Pi to enable IoT communication.</p>
            <h3>Database Setup:</h3>

            <p>Ensure the Oracle is configured to allow remote connections. Install DBeaver and
            create a new database connection in DBeaver.
            Test the connection to ensure it works.
            Create all the necessary columns to store the incoming weather data.</p>

            <h3>Python Script on Raspberry Pi Pico:</h3>

            <p>Enhance the Python script to publish DHT22 data to an MQTT topic using a Python MQTT library.
            Ensure the Raspberry Pi Pico is connected to the Mosquitto MQTT broker running on the Raspberry Pi.</p>
            <h3>Mosquitto MQTT Broker:</h3>

            <p>Start the Mosquitto MQTT broker on the Raspberry Pi.
            Configure the broker to allow communication on a specific topic for weather data.</p>
            <h3>Data Flow:</h3>

            <p>Raspberry Pi Pico reads sensor data.
            Python script on the Pico publishes data to an MQTT topic on the Mosquitto broker.
            Oracle database subscribes to the MQTT topic and sends incoming weather data to the database.</p>

            <h6>***If I got any of this wrong, or it doesn't make sense fully, it is because I am still a little confused by the process. This process is a summary of my scribbled down notes and memory over a few weeks, while trying to understand what was going on. Please excuse me, I am still learning.</h6>
    </section>  
    <section id="experience">
        <h2>Experience</h2>
        <h3>The Good</h3>
        <p>It was a great learning experience. I learned a lot about programming, databases, and web development. I also learned how to use a Raspberry Pi and a DHT22 sensor to build a farming station. I learned how to use Python to read data from the DHT22 sensor in the database. I got to practice using PHP to fetch data from the database and display it on a web page.</p>
        <h3>The Bad</h3>
        <p>This was a lot harder than I antcipated. I had to look so many things up and almost feel guilty for how much I copy and pasted. I broke 2 rasberry pis while doing this project. Deleted my database,spent hours lost. With out the help of friends and the internet, there is almost no way I could have accomplished this. But that's the lesson I learned, is it is okay to ask for help and not to give up. </p>
        <h3>What I can improve on...</h3>
        <p>I would have a clear plan ahead of time. I just went about this step-by-step not knowing what my next step would be. I was also learning things for the very first time, so I was clueless on basic programming vocabulary. I would try to be clearer with how the data was inputed. I need to keep practicing my chart making and data cleaning/processing for clearer analysis.  </p>
    </section>
    <section id="data">
        <h2>Data Collected</h2>
        <h3>Data in spreadsheets</h3>
        <div>
            <img src="./assets/data_in_spreadsheets.jpg" alt="">
        </div>
        <h3>Data Visualization using Spreadsheets</h3>
        <div>
            <img src="./assets/temperature_humity.png" alt="">
        </div>
        <h3>Data Visualization using Javascript </h3>
        <canvas id="myChart" width="400" height="200"></canvas>
        <h3>Analysis</h3>
        <p>I have 40,0000 rows of data in my database.I used the first 100 rows of data to create a line chart to visualize the temperature, humidity, and CO2 levels. The temperature and humidity are inversely proportional. As the temperature increases, the humidity decreases. The CO2 levels are also inversely proportional to the temperature. As the temperature increases, the CO2 levels decrease. This is interesting because it shows that the temperature and CO2 levels are related. The temperature and humidity are inversely proportional, which is expected. The temperature and CO2 levels are also inversely proportional, which is interesting. This data could be used to make decisions about the farm. For example, if the temperature is too high, the CO2 levels will decrease, which could affect the plants.</p>
        <p>The Rasberry Pi was in a indoor enviorment, climate controlled room, so there wasn't much variations.</p>
        <p>I wish I would have entered the datetime properly, I had this running from July 2023 to October 2023. But my rookie mistake was not recording the dates properly. </p>
        <br>
        <br>

    <div id="dataContainer"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_data.php')
        .then(response => response.json())
        .then(data => {
            const temperatureData = [];
            const humidityData = [];
            const co2Data = [];

            data.forEach((row, index) => {
                // Use the index as the x-axis value
                const xValue = index + 1;

                if (row.sensor_name.includes('mhz19_Co2_Temperature')) {
                    co2Data.push({ x: xValue, y: parseInt(row.s1) });
                    temperatureData.push({ x: xValue, y: parseInt(row.s2) });
                } else if (row.sensor_name.includes('dht22_Temperature_Humidity')) {
                    temperatureData.push({ x: xValue, y: parseInt(row.s1) });
                    humidityData.push({ x: xValue, y: parseInt(row.s2) });
                }
            });

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    datasets: [
                        {
                            label: 'Temperature',
                            data: temperatureData,
                            borderColor: 'red',
                            fill: false,
                        },
                        {
                            label: 'Humidity',
                            data: humidityData,
                            borderColor: 'blue',
                            fill: false,
                            showLine: false, // Don't show line for humidity (scatter plot only)
                            pointStyle: 'cross',
                        },
                        {
                            label: 'CO2',
                            data: co2Data,
                            borderColor: 'green',
                            fill: false,
                            showLine: false, // Don't show line for CO2 (scatter plot only)
                            pointStyle: 'triangle',
                        },
                    ],
                },
                options: {
                    scales: {
                        x: {
                            type: 'linear',
                            position: 'bottom',
                        },
                    },
                },
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

      
    // Raw Data  
fetch('fetch_data.php')
    .then(response => response.json())
    .then(data => {
        // Create a table element
        const dataTable = document.createElement('table');
        dataTable.className = 'sensor-table'; 

        const tableCaption = document.createElement('caption');
        tableCaption.textContent = 'Raw Data';
        dataTable.appendChild(tableCaption);

        // Create table header
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headerCells = ['ID', 'Topic', 'Topic Number', 'Temperature', 'CO2/Humidity', 'Created At', 'Created KR At', 'Sensor Name'];
        
        headerCells.forEach(cellText => {
            const headerCell = document.createElement('th');
            headerCell.textContent = cellText;
            headerRow.appendChild(headerCell);
        });

        tableHeader.appendChild(headerRow);
        dataTable.appendChild(tableHeader);

        // Create table body
        const tableBody = document.createElement('tbody');

        data.forEach(row => {
            const rowElement = document.createElement('tr');

            // Check if the sensor name contains "CO2"
            if (row.sensor_name.includes('mhz19_Co2_Temperature')) {
                rowElement.innerHTML = `
                    <td>${row.id}</td>
                    <td>${row.topic}</td>
                    <td>${row.topic_no}</td>
                    <td>${row.s2}</td>
                    <td>${row.s1}</td>
                    <td>${row.created_at}</td>
                    <td>${row.created_kr_at}</td>
                    <td>${row.sensor_name}</td>
                `;
            } else if (row.sensor_name.includes('dht22_Temperature_Humidity')) {
                // Check if the sensor name contains "dht22_Temperature_Humidity"
                rowElement.innerHTML = `
                    <td>${row.id}</td>
                    <td>${row.topic}</td>
                    <td>${row.topic_no}</td>
                    <td>${row.s1}</td>
                    <td>${row.s2}</td>
                    <td>${row.created_at}</td>
                    <td>${row.created_kr_at}</td>
                    <td>${row.sensor_name}</td>
                `;
            }

            tableBody.appendChild(rowElement);
        });

        dataTable.appendChild(tableBody);

        // Append the table to the document
        const dataContainer = document.getElementById('dataContainer');
        dataContainer.appendChild(dataTable);
    })
    .catch(error => console.error('Error fetching data:', error));

    
    </script>
</body>
</html>
