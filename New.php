<?php
session_start();
?>

<?php
include 'Templates/head.php';
?>
<style>
    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 250px;
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

    .cards .card {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        height: 100px;
        width: 350px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        transition: 400ms;
    }

    .cards .card p.tip {
        font-size: 1em;
        font-weight: 700;
    }

    .cards .card p.second-text {
        font-size: .8em;
    }

    .cards .card:hover {
        transform: scale(1.1, 1.1);
    }

    .cards:hover>.card:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
    }


    .Chartcards {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        justify-content: center;

    }
    .Chartcard1 {
        width: 400px;
        height: 400px;
        background-color: blue;
        border-radius: 8px;
        z-index: 1;
        margin-top: 20px;
    }

    .Chartcard2 {
        width: 1200px;
        height: 400px;
        background-color: red;
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
                    </div>
                </div>
            </div>

            <div class="cards">
                <div class="card red">
                    <p class="tip">PROVISIONARY</p>
                    <p class="tip">150</p>
                </div>
                <div class="card blue">
                    <p class="tip">SUBSTITUTE</p>
                    <p class="tip">0</p>
                </div>
                <div class="card green">
                    <p class="tip">PERMANENT</p>
                    <p class="tip">25</p>
                </div>
            </div>





        </div>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>