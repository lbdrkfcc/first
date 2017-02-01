<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Home page</title>
    <link href="favicon.ico" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.min.css" rel="stylesheet">
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
    
    <div class="navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <div class="content">
        <div class="row">
            <div class="img_and_text"> <img src="img/girl.jpeg" alt="">
                <h1 class="text"><span>Some very very very long title</span></h1> </div>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod natus excepturi aut harum nemo asperiores incidunt architecto alias ipsam. Modi eveniet minima repellat cum ab neque itaque. Eos, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto nulla repellendus atque blanditiis qui quam natus. Id eaque dolores, quae minima voluptas necessitatibus deserunt deleniti sapiente sed repellendus. Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro modi, id eum. Dolores, quisquam quos explicabo delectus aut ullam. Blanditiis iure adipisci repellendus ab, ut facere dignissimos inventore quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique suscipit officiis ab, iusto temporibus sed quis est! Blanditiis officiis, odio, laborum doloribus ducimus animi iste! Natus, maxime, odio. Reiciendis, sequi? </p>
            <h2>Some not long title</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod natus excepturi aut harum nemo asperiores incidunt architecto alias ipsam. Modi eveniet minima repellat cum ab neque itaque. Eos, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto nulla repellendus atque blanditiis qui quam natus. Id eaque dolores, quae minima voluptas necessitatibus deserunt deleniti sapiente sed repellendus. Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro modi, id eum. Dolores, quisquam quos explicabo delectus aut ullam. Blanditiis iure adipisci repellendus ab, ut facere dignissimos inventore quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique suscipit officiis ab, iusto temporibus sed quis est! Blanditiis officiis, odio, laborum doloribus ducimus animi iste! Natus, maxime, odio. Reiciendis, sequi? </p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod natus excepturi aut harum nemo asperiores incidunt architecto alias ipsam. Modi eveniet minima repellat cum ab neque itaque. Eos, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto nulla repellendus atque blanditiis qui quam natus. Id eaque dolores, quae minima voluptas necessitatibus deserunt deleniti sapiente sed repellendus. Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro modi, id eum. Dolores, quisquam quos explicabo delectus aut ullam. Blanditiis iure adipisci repellendus ab, ut facere dignissimos inventore quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique suscipit officiis ab, iusto temporibus sed quis est! Blanditiis officiis, odio, laborum doloribus ducimus animi iste! Natus, maxime, odio. Reiciendis, sequi? </p>
            <h3>Some not long title</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quod natus excepturi aut harum nemo asperiores incidunt architecto alias ipsam. Modi eveniet minima repellat cum ab neque itaque. Eos, ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto nulla repellendus atque blanditiis qui quam natus. Id eaque dolores, quae minima voluptas necessitatibus deserunt deleniti sapiente sed repellendus. Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro modi, id eum. Dolores, quisquam quos explicabo delectus aut ullam. Blanditiis iure adipisci repellendus ab, ut facere dignissimos inventore quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique suscipit officiis ab, iusto temporibus sed quis est! Blanditiis officiis, odio, laborum doloribus ducimus animi iste! Natus, maxime, odio. Reiciendis, sequi? </p> <img src="img/ornament.png" alt="" class="ornament"> </div>
    </div>
    
    <div class="content content_small">
        <h4>Some not long title</h4>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> Launch demo modal </button>
        
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4> </div>
                <div class="modal-body"> ... </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            
        });
    </script>
</body>

</html>