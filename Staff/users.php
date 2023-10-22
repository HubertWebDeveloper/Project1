<?php include_once '../includes/staff_header.php'; ?>
    
<section class="destination" id="destination" style="margin-top:50px">
    <div class="py-5">
  <div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border:1px solid #212F3C">
                <div class="card-header" style="background:#212F3C;color:white">
                        <h4>Royal Netive DJ ACADEMY ( <b style="border-bottom:2px solid darkorange;border-radius:10px;padding:5px 5px">USERS</b> )</h4>
                    </div>
                   <div class="modal" tabindex="-1">
                    
                    </div>
                    <div class="card-body">
                       <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:70px">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Book Event</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="form-group col-12">
                                      <label class="form-label">Book Category</label>
                                      <input type="text" class="form-control" placeholder="enter book category" name="name" style="border:1px solid blue" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="btn" class="btn btn-primary">Save</button>
                                  </div>
                                </form>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal -->
                        <p style="margin-bottom:20px"><?php //echo $msg; ?></p>
                        <div class="table-responsive">
                        <table id="mydata" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <th scope="col">No</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Delete</th>
                                   <th scope="col">Edit</th>
                               </tr>  
                          </thead>  
                         
                               <tr>  
                                <td></td>
                                <td></td>
                                <td><a href="" style="text-decoration:none;background:red;color:white;border-radius:10px;padding:5px 5px">
                                <i class="fas fa-trash"></i> Delete</a></td>
                                <td><a href="" style="text-decoration:none;background:green;color:white;border-radius:10px;padding:5px 5px">
                                <i class="fas fa-pencil"></i> Edit</a></td>
                               </tr> 
                     </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

<?php include_once '../includes/staff_footer.php'; ?>