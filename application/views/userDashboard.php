
<div id="page-wrapper">
            <?php if($this->session->flashdata('success')):?>
                &nbsp;<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                &nbsp;<div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>
            <script>
        // Wait for the document to be ready
        $(document).ready(function(){
            // When the button is clicked, show the modal
            $("#myButton").click(function(){
                $("#myModal").modal("show");
            });
        });
    </script>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row text-center">
                        Dashboard Content..
                        USER
                        <button id="myButton">Open Modal</button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->




    <h1>Welcome to My View Page</h1>
    

    <!-- Modal HTML -->
    <div id="myModal" style="display: none;">
        <h2>Modal Title</h2>
        <p>This is the modal content.</p>
    </div>




    </div>
    <!-- wrapper -->
            






