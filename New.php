<?php
include 'Templates/head.php';
?>
<style>

    
    .card-title {

        font-weight: bolder;
        font-size: 25px;
    }

    .card-text {
        font-size: 20px;
    }

    .cards {
        margin-top: 20px;
        display: flex;
        gap: 90px;
        /* Adjust the gap between cards as needed */
        flex-wrap: wrap;
        /* Allow the cards to wrap to the next line if necessary */
    }

    .card {
        flex: 1 0 200px;
        /* Flex-grow, flex-shrink, and flex-basis */
        max-width: 400px;
        /* Limit the maximum width of each card */
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

            <h1>Admin Dashboard</h1>

            <div class="cycle-tab-container">
                <ul class="nav nav-tabs">
                    <li class="cycle-tab-item ">
                        <a class="nav-link active" role="tab" data-toggle="tab" href="#UNITHEADS" id="DISTRICT I-tab">DISTRICT I</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DEVELOPER" id="DISTRICT II-tab">DISTRICT II</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ICTTEAM" id="DISTRICT III-tab">DISTRICT III</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT IV-tab">DISTRICT IV</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT V-tab">DISTRICT V</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="DISTRICT VI-tab">DISTRICT VI</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="cards">
                <!-- Active Card -->
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Active</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Active Teachers</h5>
                        <p class="card-text">100</p> <!-- Static number for total active users -->
                    </div>
                </div>

                <!-- Inactive Card -->
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Inactive</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Inactive Teachers</h5>
                        <p class="card-text">50</p> <!-- Static number for total inactive users -->
                    </div>
                </div>

                <!-- Retiree Card -->
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Retiree</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Retiree Teachers</h5>
                        <p class="card-text">20</p> <!-- Static number for total retired users -->
                    </div>
                </div>
            </div>

            <div class="chartcard">
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








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>