<?php
session_start();
?>

<?php
include 'Templates/head.php';
?>
<style>
    #stackedbar {
  height: 450px !important;
}

    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 83px;
        justify-content: center;
        margin-top: 20px;

    }

    .cards .red {
        background-color: #f43f5e;

    }

    .cards .blue {
        background-color: #3b82f6;
    }

    .cards .green {
        background-color: #22c55e;
    }

    .cards .gray {
        background-color: #138496;
    }

    .card .tip {
        margin-bottom: 5px;
        /* Adjust this value to reduce the space */
    }

    .card .second-text {
        margin-top: 2px;
        font-weight: 700;
        margin-right: 30px; /* Adjust the value as needed */
    }

    .cards .card {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        height: 160px;
        width: 350px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        transition: 400ms;
    }

    .cards .card p.tip {
        font-size: 1.5em;
        font-weight: 700;
    }

    .cards .card p.second-text {
        font-size: 1em;
    }

    .cards .card:hover {
        transform: scale(1.1, 1.1);
    }

    .cards:hover>.card:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
    }

    .second-text-container {
    display: flex; /* Use flexbox to align items horizontally */
    justify-content: space-between; /* Distribute items evenly */
}

    .Chartcards {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        justify-content: center;

    }

    .Chartcard1 {
        width: 400px;
        height: 450px;
        background-color: #F8FBFE;
        border-radius: 8px;
        z-index: 1;
        margin-top: 20px;
    }

    .Chartcard2 {
        width: 1200px;
        height: 450px;
        background-color: #F8FBFE;
        border-radius: 8px;
        z-index: 1;
        margin-top: 20px;
    }

    .tools {
        display: flex;
        align-items: center;
        padding: 9px;
    }

    .circle {
        padding: 0 4px;
    }

    .box {
        display: inline-block;
        align-items: center;
        width: 10px;
        height: 10px;
        padding: 1px;
        border-radius: 50%;
    }

    .red {
        background-color: #ff605c;
    }

    .yellow {
        background-color: #ffbd44;
    }

    .green {
        background-color: #00ca4e;
    }


</style>


<body>



    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'Templates/sidebar.php';
        ?>


        <div id="content">
            <?php
            include 'Templates/header.php';
            ?>

            <h1>Division Dashboard</h1>

            <div class="cycle-tab-container">
                <ul class="nav nav-tabs">
                    <li class="cycle-tab-item ">
                        <a class="nav-link active" role="tab" data-toggle="tab" href="#UNITHEADS"
                            id="DISTRICT I-tab">DISTRICT I</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DEVELOPER" id="DISTRICT II-tab">DISTRICT
                            II</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ICTTEAM" id="DISTRICT III-tab">DISTRICT
                            III</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT IV-tab">DISTRICT
                            IV</a>

                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT V-tab">DISTRICT
                            V</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT VI-tab">DISTRICT
                            VI</a>
                    </li>
                </ul>
            </div>


            <div class="cards">
                <div class="card red">
                    <p class="tip">ACTIVE</p>
                    <p class="tip">150</p>
                </div>
                <div class="card blue">
                    <p class="tip">INACTIVE</p>
                    <p class="tip">0</p>
                </div>
                <div class="card green">
                    <p class="tip">RETIRED</p>
                    <p class="tip">25</p>
                </div>
                <div class="card gray">
                    <p class="tip">Status of Appointment</p>
                    <div class="second-text-container">
                        <div>
                            <p class="second-text">PERMANENT:</p>
                            <p class="second-text">SUBSTITUTE:</p>
                            <p class="second-text">PROVISIONARY:</p>
                        </div>
                        <div>
                            <p class="second-text">1</p>
                            <p class="second-text">2</p>
                            <p class="second-text">3</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Chartcards">
                <div class="Chartcard1">
                    <div class="tools">
                        <div class="circle">
                            <span class="red box"></span>
                        </div>
                        <div class="circle">
                            <span class="yellow box"></span>
                        </div>
                        <div class="circle">
                            <span class="green box"></span>
                        </div>
                    </div>
                    <div class="card__content">
                    <canvas id="piechart"></canvas>
                    </div>
                </div>

                <div class="Chartcard2">
                    <div class="tools">
                        <div class="circle">
                            <span class="red box"></span>
                        </div>
                        <div class="circle">
                            <span class="yellow box"></span>
                        </div>
                        <div class="circle">
                            <span class="green box"></span>
                        </div>
                    </div>

                    <div class="card__content">
                    <canvas id="stackedbar" ></canvas>
                    </div>
                </div>
            </div>







        </div>






        <script src="charts/stackedbar1.js"></script>
        <script src="charts/piechart.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>