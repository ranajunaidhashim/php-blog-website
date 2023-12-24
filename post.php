<?php include("header.php");
$id = $_GET['post_id'];

$q1 = "SELECT * FROM `posts` where post_id='$id' ";
$result = mysqli_query($conn, $q1);
while ($posts = mysqli_fetch_assoc($result)) {
?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1><?php echo $posts['title'] ?></h1>
                        <!-- <h2 class="subheading"><?php echo $posts['content'] ?></h2> -->
                        <span class="meta">
                            Posted by
                            <a href="#!">Junaid</a>
                            on <?php echo formatTimestamp( $posts['created_at']) ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p><?php echo $posts['content'] ?></p>
                    <h2 class="section-heading">The Final Frontier</h2>
                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                    <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>
                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>
                    <h2 class="section-heading">Reaching for the Stars</h2>
                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
                    <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a>
                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
                    <p>
                        Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>
                        &middot; Images by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                    </p>
                </div>
            </div>
        </div>
    </article>



<?php }
include("footer.php") ?>